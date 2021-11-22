<?php

/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/

if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

_auth();

$app->emit('admin_controller_started');

$ui->assign('_title', $_L['Dashboard'] . '- ' . $config['CompanyName']);
$user = User::_info();
$ui->assign('user', $user);
$ui->assign('selected_navigation', 'dashboard');

$action = route(1);

if ($action == '') {
    if (isset($config['dashboard'])) {
        $action = $config['dashboard'];
    } else {
        $action = 'canvas';
    }
}

switch ($action) {
    case 'canvas':
        $app->emit('dashboard');

        $all_data_access = false;

        if ($file_build != $config['build']) {
            r2(U . 'updating/schema/');
        }

        $all_items = [];
        $item_sold = [];

        if (!has_access($user->roleid, 'reports')) {
            view('welcome');
            ib_close();
        }

        $tasks = [];

        if (
            isset($config['dashboard_widgets_tasks']) &&
            $config['dashboard_widgets_tasks'] == 1
        ) {
            $tasks = Task::orderBy('id', 'desc')
                ->limit(5)
                ->get();
        }

        $dashboard_section_0 = '';

        $tbal = ORM::for_table('sys_accounts')->sum('balance');

        $tbal = number_format($tbal, '2', '.', '');
        $ui->assign('tbal', $tbal);

        $balances = getBalances($user);

        $net_worth = $balances['net_worth'];

        $home_currency = $balances['home_currency'];

        if ($net_worth == '') {
            $net_worth = 0;
        }
        $ui->assign('net_worth', $net_worth);
        $goal = $config['networth_goal'];
        $v_goal = number_format(
            $goal,
            2,
            $config['dec_point'],
            $config['thousands_sep']
        );
        if ($goal != '' and $goal != '0') {
            $division = $net_worth / $goal;
            $pg = $division * 100;
            $pg = number_format($pg, 2, '.', '');
        } else {
            $pg = '0';
        }
        $ui->assign('pg', $pg);
        if ($pg <= 100) {
            $pgb = $pg;
        } else {
            $pgb = '100';
        }
        $ui->assign('pgb', $pgb);
        if ($pgb < 49) {
            $ui->assign('pgc', 'danger');
        } elseif ($pgb < 69) {
            $ui->assign('pgc', 'warning');
        } else {
            $ui->assign('pgc', 'success');
        }

        $first_day_month = date('Y-m-01');
        $mdate = date('Y-m-d');

        if (has_access($user->roleid, 'transactions', 'all_data')) {
            $all_data_access = true;

            $mi = ORM::for_table('sys_transactions')
                ->where('type', 'Income')
                ->where_gte('date', $first_day_month)
                ->where_lte('date', $mdate)
                ->sum('cr');
            if ($mi == '') {
                $mi = '0.00';
            }
            $ui->assign('mi', $mi);
            $me = ORM::for_table('sys_transactions')
                ->where('type', 'Expense')
                ->where_gte('date', $first_day_month)
                ->where_lte('date', $mdate)
                ->sum('dr');
            if ($me == '') {
                $me = '0.00';
            }
            $ui->assign('me', $me);
            $m = ORM::for_table('sys_transactions')
                ->where('type', 'Income')
                ->where('date', $mdate)
                ->sum('amount');
            if ($m == '') {
                $m = '0.00';
            }
            $ui->assign('ti', $m);
            $m = ORM::for_table('sys_transactions')
                ->where('type', 'Expense')
                ->where('date', $mdate)
                ->sum('amount');
            if ($m == '') {
                $m = '0.00';
            }
            $ui->assign('te', $m);

            $customers_total = Contact::where(
                'type',
                'like',
                '%Customer%'
            )->count();

            if ($customers_total == '') {
                $customers_total = '0';
            }

            $ui->assign('customers_total', $customers_total);

            $companies_total = ORM::for_table('sys_companies')->count();

            if ($companies_total == '') {
                $companies_total = '0';
            }

            $ui->assign('companies_total', $companies_total);

            $leads_total = ORM::for_table('crm_leads')->count();

            if ($leads_total == '') {
                $leads_total = '0';
            }

            $ui->assign('leads_total', $leads_total);

            $invoices = ORM::for_table('sys_invoices')
                ->limit(5)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('invoices', $invoices);

            $d = ORM::for_table('sys_transactions')
                ->where('type', 'Expense')
                ->limit(5)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('exp', $d);

            $d = ORM::for_table('sys_transactions')
                ->where('type', 'Income')
                ->limit(5)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('inc', $d);

            $total_income = Transaction::where('type', 'Income')->sum('amount');
            $total_expense = Transaction::where('type', 'Expense')->sum(
                'amount'
            );
            $total_invoice_paid = Invoice::where('status', 'Paid')->sum(
                'total'
            );

            $expense_cats = TransactionCategory::where('type', 'Expense')
                ->orderBy('total_amount', 'desc')
                ->take(10)
                ->get();

            $all_invoice_items = InvoiceItem::where('itemcode', '!=', '')
                ->get()
                ->groupBy('itemcode')
                ->all();

            $all_items = Item::select('id', 'name', 'item_number')
                ->get()
                ->keyBy('item_number')
                ->all();

            foreach ($all_invoice_items as $key => $value) {
                $count = count($value);
                $amount = 0;
                $name = '';

                foreach ($value as $item) {
                    $amount += $item->amount * $item->qty;
                }

                if (isset($all_items[$key])) {
                    $name = $all_items[$key]->name;
                }

                $item_sold[] = [
                    'name' => $name,
                    'sold_count' => $count,
                    'total_amount' => $amount,
                ];
            }
            $weekFromDate = Carbon\Carbon::now()
                ->subDay()
                ->startOfWeek()
                ->toDateString();
            $today_date = date('Y-m-d');
            $weekly_total_invoice_amount = Invoice::whereBetween('date', [
                $weekFromDate,
                $today_date,
            ])->sum('total');
            $weekly_total_invoice_paid = Invoice::whereBetween('date', [
                $weekFromDate,
                $today_date,
            ])
                ->where('status', 'Paid')
                ->sum('total');
            $weekly_total_invoice_due = Invoice::whereBetween('date', [
                $weekFromDate,
                $today_date,
            ])
                ->where('status', 'Unpaid')
                ->sum('total');
            $monthFromDate = Carbon\Carbon::now()
                ->subDay()
                ->startOfMonth()
                ->toDateString();
            $monthly_total_invoice_amount = Invoice::whereBetween('date', [
                $monthFromDate,
                $today_date,
            ])->sum('total');
            $monthly_total_invoice_paid = Invoice::whereBetween('date', [
                $monthFromDate,
                $today_date,
            ])
                ->where('status', 'Paid')
                ->sum('total');
            $monthly_total_invoice_due = Invoice::whereBetween('date', [
                $monthFromDate,
                $today_date,
            ])
                ->where('status', 'Unpaid')
                ->sum('total');
            $accounts = $balances['banks'];
            $currencies = $balances['currencies'];
        } else {
            $mi = ORM::for_table('sys_transactions')
                ->where('type', 'Income')
                ->where_gte('date', $first_day_month)
                ->where_lte('date', $mdate)
                ->where('aid', $user->id)
                ->sum('cr');
            if ($mi == '') {
                $mi = '0.00';
            }
            $ui->assign('mi', $mi);
            $me = ORM::for_table('sys_transactions')
                ->where('type', 'Expense')
                ->where_gte('date', $first_day_month)
                ->where_lte('date', $mdate)
                ->where('aid', $user->id)
                ->sum('dr');
            if ($me == '') {
                $me = '0.00';
            }
            $ui->assign('me', $me);
            $m = ORM::for_table('sys_transactions')
                ->where('type', 'Income')
                ->where('date', $mdate)
                ->where('aid', $user->id)
                ->sum('cr');
            if ($m == '') {
                $m = '0.00';
            }
            $ui->assign('ti', $m);
            $m = ORM::for_table('sys_transactions')
                ->where('type', 'Expense')
                ->where('date', $mdate)
                ->where('aid', $user->id)
                ->sum('dr');
            if ($m == '') {
                $m = '0.00';
            }
            $ui->assign('te', $m);

            $customers_total = ORM::for_table('crm_accounts')
                ->where('o', $user->id)
                ->count();

            if ($customers_total == '') {
                $customers_total = '0';
            }

            $ui->assign('customers_total', $customers_total);

            $companies_total = ORM::for_table('sys_companies')
                ->where('aid', $user->id)
                ->count();

            if ($companies_total == '') {
                $companies_total = '0';
            }

            $ui->assign('companies_total', $companies_total);

            $leads_total = ORM::for_table('crm_leads')
                ->where('aid', $user->id)
                ->count();

            if ($leads_total == '') {
                $leads_total = '0';
            }

            $ui->assign('leads_total', $leads_total);

            $invoices = ORM::for_table('sys_invoices')
                ->where('aid', $user->id)
                ->limit(5)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('invoices', $invoices);

            $d = ORM::for_table('sys_transactions')
                ->where('aid', $user->id)
                ->where('type', 'Expense')
                ->limit(5)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('exp', $d);

            $d = ORM::for_table('sys_transactions')
                ->where('aid', $user->id)
                ->where('type', 'Income')
                ->limit(5)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('inc', $d);
            $total_income = Transaction::where('type', 'Income')
                ->where('aid', $user->id)
                ->sum('amount');
            $total_expense = Transaction::where('type', 'Expense')
                ->where('aid', $user->id)
                ->sum('amount');
            $total_invoice_paid = Invoice::where('status', 'Paid')
                ->where('aid', $user->id)
                ->sum('total');

            $expense_cats = TransactionCategory::where('type', 'Expense')
                ->orderBy('total_amount', 'desc')
                ->take(10)
                ->get();

            $item_sold = Item::select('name', 'sold_count', 'total_amount')
                ->orderBy('sold_count', 'desc')
                ->take(10)
                ->get();

            $weekFromDate = Carbon\Carbon::now()
                ->subDay()
                ->startOfWeek()
                ->toDateString();

            $today_date = date('Y-m-d');

            $weekly_total_invoice_amount = Invoice::whereBetween('date', [
                $weekFromDate,
                $today_date,
            ])
                ->where('aid', $user->id)
                ->sum('total');
            $weekly_total_invoice_paid = Invoice::whereBetween('date', [
                $weekFromDate,
                $today_date,
            ])
                ->where('aid', $user->id)
                ->where('status', 'Paid')
                ->sum('total');
            $weekly_total_invoice_due = Invoice::whereBetween('date', [
                $weekFromDate,
                $today_date,
            ])
                ->where('aid', $user->id)
                ->where('status', 'Unpaid')
                ->sum('total');
            $monthFromDate = Carbon\Carbon::now()
                ->subDay()
                ->startOfMonth()
                ->toDateString();
            $monthly_total_invoice_amount = Invoice::whereBetween('date', [
                $monthFromDate,
                $today_date,
            ])
                ->where('aid', $user->id)
                ->sum('total');
            $monthly_total_invoice_paid = Invoice::whereBetween('date', [
                $monthFromDate,
                $today_date,
            ])
                ->where('aid', $user->id)
                ->where('status', 'Paid')
                ->sum('total');
            $monthly_total_invoice_due = Invoice::whereBetween('date', [
                $monthFromDate,
                $today_date,
            ])
                ->where('aid', $user->id)
                ->where('status', 'Unpaid')
                ->sum('total');
            $accounts = Account::take(5)->get();
            $currencies = Currency::all();
        }

        $recent_projects = Project::orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $recent_customers = Contact::orderBy('id', 'desc')
            ->limit(5)
            ->get();

        view('dashboard_canvas', [
            'expense_cats' => $expense_cats,
            'total_income' => $total_income,
            'total_expense' => $total_expense,
            'total_invoice_paid' => $total_invoice_paid,
            'item_sold' => $item_sold,
            'weekly_total_invoice_amount' => $weekly_total_invoice_amount,
            'weekly_total_invoice_paid' => $weekly_total_invoice_paid,
            'weekly_total_invoice_due' => $weekly_total_invoice_due,
            'monthly_total_invoice_amount' => $monthly_total_invoice_amount,
            'monthly_total_invoice_paid' => $monthly_total_invoice_paid,
            'monthly_total_invoice_due' => $monthly_total_invoice_due,
            'accounts' => $accounts,
            'currencies' => $currencies,
            'home_currency' => $home_currency,
            'all_data_access' => $all_data_access,
            'balances' => $balances,
            'all_items' => $all_items,
            'tasks' => $tasks,
            'recent_projects' => $recent_projects,
            'recent_customers' => $recent_customers,
        ]);

        break;

    case 'render':
        jsonResponse(Dashboard::graphUpdate($user, $config));

        break;

    case 'json_income_vs_exp':
        header('Content-Type: application/json');

        $data = Dashboard::dataLastTwelveMonthsIncExp();

        echo json_encode($data);

        break;

    case 'json_d_inc_exp_month':
        header('Content-Type: application/json');

        $data = Dashboard::dataIncVsExp();

        echo json_encode($data);

        break;

    case 'json_d_chart_data':
        header('Content-Type: application/json');

        $data = Dashboard::dataIncExpD('dd');

        echo json_encode($data);

        break;

    case 'invoice_stats':
        $paid = ORM::for_table('sys_invoices')
            ->where('status', 'Paid')
            ->count();
        $unpaid = ORM::for_table('sys_invoices')
            ->where('status', 'Unpaid')
            ->count();
        $partially_paid = ORM::for_table('sys_invoices')
            ->where('status', 'Partially Paid')
            ->count();

        $arr = [
            'Paid' => $paid,
            'Unpaid' => $unpaid,
            'Partially Paid' => $partially_paid,
        ];

        $p = Misc::array_percentage($arr);

        //   api_response($p);

        echo '<table class="table table-bordered">

                        <tbody>


                            <tr>
                                <td width="200px;"> <a href="' .
            U .
            'invoices/list/filter/unpaid/">' .
            $_L['Unpaid'] .
            ' (' .
            $unpaid .
            ')</a> </td>
                                <td><div class="progress progress-small progress-thin" style="margin-bottom: 0;">
                                        <div style="width: ' .
            $p['Unpaid']['percentage'] .
            '%;" class="progress-bar progress-bar-danger"></div>
                                    </div></td>


                            </tr>
                            <tr>
                                <td width="200px;"><a href="' .
            U .
            'invoices/list/filter/partially_paid/">' .
            $_L['Partially Paid'] .
            ' (' .
            $partially_paid .
            ')</a></td>
                                <td><div class="progress progress-small progress-thin" style="margin-bottom: 0;">
                                        <div style="width: ' .
            $p['Partially Paid']['percentage'] .
            '%;" class="progress-bar progress-bar-success"></div>
                                    </div></td>


                            </tr>

                            <tr>
                                <td width="200px;"><a href="' .
            U .
            'invoices/list/filter/paid/">' .
            $_L['Paid'] .
            ' (' .
            $paid .
            ')</a></td>
                                <td><div class="progress progress-small progress-thin" style="margin-bottom: 0;">
                                        <div style="width: ' .
            $p['Paid']['percentage'] .
            '%;" class="progress-bar progress-bar-info"></div>
                                    </div></td>


                            </tr>




                        </tbody>
                    </table>';

        break;

    case 'invoice_stats_json':
        if (has_access($user->roleid, 'transactions', 'all_data')) {
            $paid = ORM::for_table('sys_invoices')
                ->where('status', 'Paid')
                ->count();
            $unpaid = ORM::for_table('sys_invoices')
                ->where('status', 'Unpaid')
                ->count();
            $partially_paid = ORM::for_table('sys_invoices')
                ->where('status', 'Partially Paid')
                ->count();
        } else {
            $paid = ORM::for_table('sys_invoices')
                ->where('status', 'Paid')
                ->where('aid', $user->id)
                ->count();
            $unpaid = ORM::for_table('sys_invoices')
                ->where('status', 'Unpaid')
                ->where('aid', $user->id)
                ->count();
            $partially_paid = ORM::for_table('sys_invoices')
                ->where('status', 'Partially Paid')
                ->where('aid', $user->id)
                ->count();
        }

        $arr = [
            'Paid' => $paid,
            'Unpaid' => $unpaid,
            'Partially Paid' => $partially_paid,
        ];

        $p = Misc::array_percentage($arr);

        api_response($p);

        break;

    case 'update_currency':
        $currencies = Currency::where(
            'cname',
            '!=',
            $config['home_currency']
        )->get();

        view('dashboard_update_currency', [
            'currencies' => $currencies,
        ]);

        break;

    case 'lan':
        echo '<li><a href="' .
            U .
            'settings/localisation/">' .
            $_L['Localisation'] .
            '</a></li>';

        break;

    case 'tickets':
        $tickets = [];

        $admins = [];

        $tickets_tasks = [];

        if (
            isset($config['dashboard_widgets_tickets']) &&
            $config['dashboard_widgets_tickets'] == 1
        ) {
            $tickets = Ticket::orderBy('id', 'desc')
                ->limit(20)
                ->get();

            $admins = User::select(['fullname', 'id'])
                ->get()
                ->keyBy('id')
                ->all();

            $tickets_ids = array_keys($tickets->keyBy('id')->all());

            $tickets_tasks = Task::whereIn('tid', $tickets_ids)
                ->get()
                ->keyBy('tid')
                ->all();
        }

        \view('dashboard_tickets', [
            'tickets' => $tickets,
            'admins' => $admins,
            'tickets_tasks' => $tickets_tasks,
        ]);

        break;

    case 'new':
        $blade = new Blade('ui/theme/default', 'storage/cache/theme');

        echo $blade
            ->make('hello', [
                'user' => $user,
                'config' => $config,
            ])
            ->render();

        break;
}
