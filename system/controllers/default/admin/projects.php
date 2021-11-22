<?php
/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/
_auth();

$ui->assign('selected_navigation', 'projects');
$ui->assign('_title', $_L['Projects'] . '- ' . $config['CompanyName']);
$action = route(1, 'list');
$user = User::_info();
$ui->assign('user', $user);
$ui->assign('action', $action);

if (!has_access($user->roleid, 'projects', 'view')) {
    permissionDenied();
}

$data = request()->all();

switch ($action) {
    case 'list':
        $projects = Project::orderBy('id', 'desc')->limit(100);

        if (!has_access($user->roleid, 'projects', 'all_data')) {
            $projects = $projects->where('admin_id', $user->id);
        }

        $projects = $projects->get();

        $staffs = User::all()
            ->keyBy('id')
            ->all();
        $contacts = Contact::all()
            ->keyBy('id')
            ->all();

        $project_ids = [];

        foreach ($projects as $project) {
            $project_ids[] = $project->id;
        }

        $tasks = Task::whereIn('pid', $project_ids)
            ->select('id', 'pid', 'status')
            ->get()
            ->groupBy('pid')
            ->all();

        $tasks_status = [];

        foreach ($projects as $project) {
            if (isset($tasks[$project->id])) {
                $tasks_count = 0;
                $task_completed = 0;
                foreach ($tasks[$project->id] as $task) {
                    $tasks_count++;
                    if (
                        $task->status == 'Completed' ||
                        $task->status == 'Archived'
                    ) {
                        $task_completed++;
                    }
                }

                $tasks_status[$project->id] = [
                    'total' => $tasks_count,
                    'completed' => $task_completed,
                ];
            }
        }

        \view('projects_list', [
            'projects' => $projects,
            'staffs' => $staffs,
            'contacts' => $contacts,
            'tasks_status' => $tasks_status,
        ]);

        break;

    case 'project':
        if (!has_access($user->roleid, 'projects')) {
            permissionDenied();
        }
        $project = false;

        $id = route(2, false);

        $members = [];

        if ($id) {
            $project = Project::find($id);

            if (
                !has_access($user->roleid, 'projects', 'all_data') &&
                $project->admin_id != $user->id
            ) {
                permissionDenied();
            }

            if ($project && $project->members) {
                $members = json_decode($project->members, true);
            }
        }

        $contacts = Contact::all();
        $staffs = User::all();
        $currencies_all = Currency::getAllCurrencies();
        $currencies = Currency::all();

        \view('projects_project', [
            'project' => $project,
            'contacts' => $contacts,
            'staffs' => $staffs,
            'currencies' => $currencies,
            'currencies_all' => $currencies_all,
            'members' => $members,
        ]);

        break;

    case 'project-save':
        if (!has_access($user->roleid, 'projects', 'create')) {
            permissionDenied();
        }
        $validator = new Validator();
        $data = $request->all();
        $validation = $validator->validate($data, [
            'name' => 'required',
        ]);

        if ($validation->fails()) {
            $message = '';
            foreach ($validation->errors()->all() as $key => $value) {
                $message .= $value . ' <br> ';
            }
            // validation failed
            responseWithError($message);
        } else {
            if (isset($data['id']) && $data['id'] != '') {
                if (!has_access($user->roleid, 'projects', 'edit')) {
                    permissionDenied();
                }
                $project = Project::find($data['id']);
            } else {
                $project = new Project();
            }

            if (!empty($data['admin_id'])) {
                $data['admin_id'] = (int) $data['admin_id'];
            }

            $project->name = $data['name'];
            $project->contact_id = $data['contact_id'] ?? 0;
            $project->admin_id = $data['admin_id'] ?? $user->id;
            $project->project_manager_id = $data['project_manager_id'] ?? 0;
            $project->start_date = $data['start_date'];
            $project->due_date = $data['due_date'];
            $project->description = $data['description'];
            $project->status = $data['status'];
            $project->billing_type = $data['billing_type'];

            $project->summary = _post('summary', null);

            if (isset($data['budget']) && $data['budget'] != '') {
                $project->budget = $data['budget'];
            }

            $members = [];

            if (isset($data['team_members'])) {
                $posted_team_members = $data['team_members'];
                foreach ($posted_team_members as $team_member) {
                    $team_member = (int) $team_member;

                    if ($team_member > 0) {
                        $members[] = $team_member;
                    }
                }
            }

            $project->members = json_encode($members);

            $project->currency = $data['currency'];

            $project->save();
        }

        break;

    case 'view':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $tasks = Task::where('pid', $project->id)
                    ->select('id', 'status')
                    ->get();

                $tasks_status = [];

                $tasks_count = 0;
                $task_completed = 0;
                $has_tasks = false;
                foreach ($tasks as $task) {
                    $has_tasks = true;
                    $tasks_count++;
                    if (
                        $task->status == 'Completed' ||
                        $task->status == 'Archived'
                    ) {
                        $task_completed++;
                    }
                }

                $tasks_status[$project->id] = [
                    'total' => $tasks_count,
                    'completed' => $task_completed,
                ];

                $staffs = User::all()
                    ->keyBy('id')
                    ->all();

                \view('projects_view', [
                    'project' => $project,
                    'has_tasks' => $has_tasks,
                    'tasks_status' => $tasks_status,
                    'staffs' => $staffs,
                ]);
            }
        }

        break;

    case 'invoices':
        $project_id = route(2);
        $project = Project::find($project_id);
        if ($project) {
            $invoices = Invoice::where('pid', $project_id)->get();
            $contacts = Contact::get()
                ->keyBy('id')
                ->all();
            \view('projects_invoices', [
                'invoices' => $invoices,
                'project' => $project,
                'contacts' => $contacts,
            ]);
        }
        break;

    case 'delete':
        if (!has_access($user->roleid, 'transactions', 'delete')) {
            permissionDenied();
        }
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);
            if ($project) {
                $project->delete();
                r2(U . 'projects/');
            }
        }

        break;

    case 'tasks':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $mdate = date('Y-m-d');
                $ui->assign('mdate', $mdate);

                $contacts = Contact::select(['id', 'account'])
                    ->get()
                    ->groupBy('id')
                    ->all();
                $tickets = Ticket::select(['id', 'tid'])
                    ->get()
                    ->groupBy('id')
                    ->all();

                $tasks_not_started = ORM::for_table('sys_tasks')
                    ->where('pid', $project->id)
                    ->select('title')
                    ->select('aid')
                    ->select('cid')
                    ->select('tid')
                    ->select('priority')
                    ->where('status', 'Not Started')
                    ->select('id')
                    ->select('created_at')
                    ->select('due_date')
                    ->select('created_by')
                    ->order_by_desc('id')
                    ->find_array();
                $ui->assign('tasks_not_started', $tasks_not_started);

                $tasks_in_progress = ORM::for_table('sys_tasks')
                    ->where('pid', $project->id)
                    ->select('title')
                    ->select('aid')
                    ->select('cid')
                    ->select('tid')
                    ->select('priority')
                    ->where('status', 'In Progress')
                    ->select('id')
                    ->select('created_at')
                    ->select('due_date')
                    ->select('created_by')
                    ->order_by_desc('id')
                    ->find_array();
                $ui->assign('tasks_in_progress', $tasks_in_progress);

                $tasks_completed = ORM::for_table('sys_tasks')
                    ->where('pid', $project->id)
                    ->select('title')
                    ->select('aid')
                    ->select('cid')
                    ->select('tid')
                    ->select('priority')
                    ->where('status', 'Completed')
                    ->select('id')
                    ->select('created_at')
                    ->select('due_date')
                    ->select('created_by')
                    ->order_by_desc('id')
                    ->find_array();
                $ui->assign('tasks_completed', $tasks_completed);

                $tasks_deferred = ORM::for_table('sys_tasks')
                    ->where('pid', $project->id)
                    ->select('title')
                    ->select('aid')
                    ->select('cid')
                    ->select('tid')
                    ->select('priority')
                    ->where('status', 'Deferred')
                    ->select('id')
                    ->select('created_at')
                    ->select('due_date')
                    ->select('created_by')
                    ->order_by_desc('id')
                    ->find_array();

                $ui->assign('tasks_deferred', $tasks_deferred);

                $tasks_waiting = ORM::for_table('sys_tasks')
                    ->where('pid', $project->id)
                    ->select('title')
                    ->select('aid')
                    ->select('cid')
                    ->select('tid')
                    ->select('priority')
                    ->where('status', 'Waiting')
                    ->select('id')
                    ->select('created_at')
                    ->select('due_date')
                    ->select('created_by')
                    ->order_by_desc('id')
                    ->find_array();
                $ui->assign('tasks_waiting', $tasks_waiting);

                \view('projects_tasks', [
                    'project' => $project,
                ]);
            }
        }

        break;

    case 'files':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $files = Document::getByType('project', $project->id);

                \view('projects_files', [
                    'project' => $project,
                    'files' => $files,
                ]);
            }
        }

        break;

    case 'expenses':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $expenses = Transaction::where(
                    'project_id',
                    $project->id
                )->get();

                $accounts = Account::all()
                    ->keyBy('id')
                    ->all();

                \view('projects_expenses', [
                    'project' => $project,
                    'expenses' => $expenses,
                    'accounts' => $accounts,
                ]);
            }
        }

        break;

    case 'expense':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $accounts = Account::all();
                $categories = TransactionCategory::where('type', 'Expense')
                    ->orderBy('sorder', 'asc')
                    ->get();
                $payees = $contacts = Contact::select([
                    'id',
                    'account',
                    'email',
                ])
                    ->get()
                    ->keyBy('id')
                    ->all();

                $currencies = Currency::all();
                $currencies_all = Currency::getAllCurrencies();

                \view('projects_expense', [
                    'project' => $project,
                    'accounts' => $accounts,
                    'currencies' => $currencies,
                    'currencies_all' => $currencies_all,
                    'companies' => Company::all(),
                    'staffs' => User::all(),
                    'categories' => $categories,
                    'payees' => $payees,
                    'methods' => [],
                ]);
            }
        }

        break;

    case 'save-expense':
        $validator = new Validator();
        $data = $request->all();
        $validation = $validator->validate($data, [
            'account_id' => 'required',
            'description' => 'required',
            'amount' => 'required',
        ]);

        if ($validation->fails()) {
            $message = '';
            foreach ($validation->errors()->all() as $key => $value) {
                $message .= $value . ' <br> ';
            }
            // validation failed
            responseWithError($message);
        } else {
            $project = Project::find($data['project_id']);

            if ($project) {
                $amount = $data['amount'];
                $currency_iso_code =
                    $data['currency'] ??
                    ($project->currency_iso_code ??
                        ($config['home_currency'] ?? 'USD'));
                $amount = createFromCurrency($amount, $currency_iso_code);

                $transaction = new Transaction();

                $account_name = '';
                $account = Account::find($data['account_id']);

                if ($account) {
                    $transaction->account = $account->account;
                }

                $transaction->account_id = $data['account_id'];

                $transaction->project_id = $project->id;
                $transaction->type = 'Expense';
                $transaction->sub_type = $data['sub_type'] ?? null;

                $transaction->category = $data['category'] ?? '';
                $transaction->amount = $amount;

                $transaction->method = $data['method'] ?? '';
                $transaction->ref = $data['ref'] ?? '';
                $transaction->status = $data['status'] ?? 'Cleared';
                $transaction->description = $data['description'];

                $transaction->date = $data['date'] ?? date('Y-m-d');
                $transaction->company_id = $data['company_id'];
                $transaction->payee = $data['payee'];

                $transaction->currency_iso_code =
                    $data['currency'] ?? $project->currency_iso_code;

                $transaction->staff_id = $data['staff_id'] ?? 0;

                $transaction->code = $data['code'];

                $transaction->dr = $amount;
                $transaction->cr = '0.00';

                $transaction->save();

                update_option(
                    'expense_code_current_number',
                    current_number_would_be($data['code'])
                );
            }
        }

        break;

    case 'stream':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                \view('projects_stream', [
                    'project' => $project,
                ]);
            }
        }

        break;

    case 'gantt-chart':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $tasks = Task::where('pid', $project->id)->get();

                \view('projects_gantt_chart', [
                    'project' => $project,
                    'tasks' => $tasks,
                ]);
            }
        }

        break;

    case 'timelog':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                \view('projects_timelog', [
                    'project' => $project,
                    'mdate' => date('Y-m-d'),
                ]);
            }
        }

        break;

    case 'workload':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                \view('projects_workload', [
                    'project' => $project,
                ]);
            }
        }

        break;

    case 'analytics':
        $id = route(2, false);

        if ($id) {
            $project = Project::find($id);

            if ($project) {
                $last_7_days = [];
                $task_counts = [];

                for ($i = 0; $i < 7; $i++) {
                    $time = strtotime('-' . $i . ' days');
                    $last_7_days[] = date('l', $time);

                    $task_counts[] = Task::where('pid', $project->id)
                        ->where('status', 'Completed')
                        ->where('date_finished', date('Y-m-d', $time))
                        ->count();
                }

                $last_7_days = array_reverse($last_7_days);
                $task_counts = array_reverse($task_counts);
                $task_status_counts = [
                    'not_started' => Task::where('status', 'Not Started')
                        ->where('pid', $project->id)
                        ->count(),
                    'completed' => Task::where('status', 'Completed')
                        ->where('pid', $project->id)
                        ->count(),
                    'in_progress' => Task::where('status', 'In Progress')
                        ->where('pid', $project->id)
                        ->count(),
                    'deferred' => Task::where('status', 'Deferred')
                        ->where('pid', $project->id)
                        ->count(),
                    'waiting' => Task::where('status', 'Waiting')
                        ->where('pid', $project->id)
                        ->count(),
                ];

                \view('projects_analytics', [
                    'project' => $project,
                    'last_7_days' => $last_7_days,
                    'task_counts' => $task_counts,
                    'task_status_counts' => $task_status_counts,
                ]);
            }
        }

        break;
}
