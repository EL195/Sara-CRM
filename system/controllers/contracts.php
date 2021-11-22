<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

$action = route(1);
switch ($request_method) {
    case 'GET':
        switch ($action) {
            case 'view':
                $id = (int) route(2, false);
                $uuid = route(3, false);

                if (!$id || !$uuid) {
                    abort(404);
                }

                $contract = Contract::where('id', $id)
                    ->where('uuid', $uuid)
                    ->first();

                if ($contract) {
                    $contract_types = Contract::availableContractTypes();

                    \view('contracts_view', [
                        'contract' => $contract,
                        'contract_types' => $contract_types,
                        '_title' => __('Contracts'),
                    ]);
                }

                break;

            case 'download':
                $id = (int) route(2, false);
                $uuid = route(3, false);

                if (!$id || !$uuid) {
                    abort(404);
                }

                $contract = Contract::where('id', $id)
                    ->where('uuid', $uuid)
                    ->first();

                if ($contract) {
                    $contact = false;
                    if ($contract->contact_id) {
                        $contact = Contact::find($contract->contact_id);
                    }
                    $html = view_render('contract_pdf', [
                        'contract' => $contract,
                        'contact' => $contact,
                    ]);
                    $file_name =
                        Str::slug($contract->title) .
                        '-' .
                        $contact->id .
                        '.pdf';
                    exportPdf($html, $file_name, true);
                }

                break;
            case '':
            case 'list':
                $user = authenticate_admin();
                $contracts = Contract::select([
                    'id',
                    'uuid',
                    'title',
                    'user_id',
                    'owner_id',
                    'contact_id',
                    'project_id',
                    'type',
                    'start_date',
                    'expiration_date',
                    'currency',
                    'amount',
                    'party_two_signed',
                    'created_at',
                    'updated_at',
                ])
                    ->orderBy('id', 'desc')
                    ->get();

                $contacts = Contact::all()
                    ->keyBy('id')
                    ->all();

                $contract_types = Contract::availableContractTypes();

                \view('contracts_list', [
                    'selected_navigation' => 'contracts',
                    'contracts' => $contracts,
                    'contacts' => $contacts,
                    'contract_types' => $contract_types,
                    '_title' => __('Contracts'),
                ]);

                break;
            case 'add':
            case 'edit':
                $user = authenticate_admin();
                if (!has_access($user->roleid, 'contracts')) {
                    permissionDenied();
                }
                $contract = false;

                $id = route(2, false);

                if ($id) {
                    $contract = Contract::find($id);
                }

                $contacts = Contact::all();
                $staffs = User::all();
                $currencies_all = Currency::getAllCurrencies();
                $currencies = Currency::all();
                $contract_types = Contract::availableContractTypes();

                \view('contract', [
                    'contract' => $contract,
                    'contacts' => $contacts,
                    'staffs' => $staffs,
                    'currencies' => $currencies,
                    'currencies_all' => $currencies_all,
                    'contract_types' => $contract_types,
                    'selected_navigation' => 'contracts',
                ]);
                break;
            case 'delete':
                $user = authenticate_admin();

                if (!has_access($user->roleid, 'contracts')) {
                    permissionDenied();
                }
                $contract = false;

                $id = route(2, false);

                if ($id) {
                    $contract = Contract::find($id);
                    if ($contract) {
                        $contract->delete();
                    }
                }
                redirect_to('contracts');
                break;
            case 'summary':
                $user = authenticate_admin();
                \view('contracts_summary', [
                    'selected_navigation' => 'contracts',
                ]);
                break;
        }

        break;

    case 'POST':
        switch ($action) {
            case 'contract':
                $data = $request->all();
                $validator = new Validator();
                $validation = $validator->validate($data, [
                    'title' => 'required|max:161',
                ]);

                if ($validation->fails()) {
                    $errors = $validation->errors();
                    responseWithError($errors->firstOfAll());
                } else {
                    $contract = false;

                    if (!empty($data['id'])) {
                        $contract = Contract::find($data['id']);
                    }

                    if (!$contract) {
                        $contract = new Contract();
                        $contract->uuid = Str::uuid();
                    }
                    $contract->contact_id = $data['contact_id'] ?? 0;
                    $contract->owner_id = $data['owner_id'] ?? 0;
                    $contract->title = $data['title'];
                    $contract->type = $data['type'];
                    $contract->start_date = $data['start_date'];
                    $contract->expiration_date = $data['expiration_date'];
                    $contract->currency = $data['currency'];
                    $contract->amount = createFromCurrency(
                        $data['amount'],
                        $data['currency']
                    );
                    $contract->description = $data['description'] ?? null;
                    $contract->save();
                }
                break;

            case 'save-signature':
                $id = (int) route(2, false);
                $uuid = route(3, false);

                if (!$id || !$uuid) {
                    abort(404);
                }

                $contract = Contract::where('id', $id)
                    ->where('uuid', $uuid)
                    ->first();

                if ($contract) {
                    $data = $request->all();
                    $contract->party_two_sign = $data['signData'];
                    $contract->party_two_signed = 1;
                    $contract->save();
                }
                break;
        }

        break;
}
