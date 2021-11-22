<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

$action = route(1);
switch ($request_method) {
    case 'GET':
        switch ($action) {
            case '':
            case 'list':
                authenticate_admin();
                $tab = 'active';
                $plans = SubscriptionPlan::limit(100)->get();
                $subscriptions = Subscription::all();

                \view('subscriptions', [
                    'selected_navigation' => 'subscriptions',
                    'tab' => $tab,
                    'subscriptions' => $subscriptions,
                    'plans' => $plans,
                ]);

                break;

            case 'subscription':
                break;

            case 'add':
            case 'edit':
                authenticate_admin();
                $id = (int) route(2, false);
                $subscription = false;
                if ($id) {
                    $subscription = Subscription::find($id);
                }
                $plans = SubscriptionPlan::limit(100)->get();
                $contacts = Contact::all();
                \view('subscription', [
                    'selected_navigation' => 'subscriptions',
                    'subscription' => $subscription,
                    'contacts' => $contacts,
                    'plans' => $plans,
                ]);
                break;

            case 'plans':
                authenticate_admin();
                $plans = SubscriptionPlan::limit(100)->get();
                \view('subscription_plans', [
                    'selected_navigation' => 'subscriptions',
                    'plans' => $plans,
                ]);
                break;

            case 'plan':
                authenticate_admin();

                $plan = false;
                $id = (int) route(2, false);
                if ($id) {
                    $plan = SubscriptionPlan::find($id);
                }

                \view('subscription_plan', [
                    'selected_navigation' => 'subscriptions',
                    'plan' => $plan,
                ]);
                break;

            case 'delete-plan':
                authenticate_admin();
                $plan = false;
                $id = (int) route(2, false);
                if ($id) {
                    $plan = SubscriptionPlan::find($id);
                    if ($plan) {
                        $plan->delete();
                    }
                }
                redirect_to('subscriptions/plans');
                break;

            case 'summary':
                authenticate_admin();
                \view('subscriptions_summary', [
                    'selected_navigation' => 'subscriptions',
                ]);
                break;
        }
        break;

    case 'POST':
        switch ($action) {
            case 'plan':
                authenticate_admin();
                $data = $request->all();

                $validation = Validation::init($config['language']);
                $validator = $validation->make($data, [
                    'title' => 'required|string|max:150',
                    'slug' => 'required|string|max:150',
                    'button_text' => 'required|string|max:150',
                    'stripe_pricing_id' => 'nullable|string|max:150',
                    'description' => 'nullable|string|max:65000',
                    'features' => 'nullable|array',
                    'id' => 'nullable|integer',
                ]);

                if ($validator->fails()) {
                    responseWithError($validator->errors());
                }

                $subscription_plan = null;

                if (!empty($data['id'])) {
                    $subscription_plan = SubscriptionPlan::find($data['id']);
                }

                if (!$subscription_plan) {
                    $subscription_plan = new SubscriptionPlan();
                }

                $subscription_plan->title = $data['title'];
                $subscription_plan->slug = $data['slug'];
                $subscription_plan->button_text = $data['button_text'];
                $subscription_plan->stripe_pricing_id =
                    $data['stripe_pricing_id'] ?? null;
                $subscription_plan->description = $data['description'] ?? null;

                $features = [];

                if (!empty($data['features'])) {
                    foreach ($data['features'] as $feature) {
                        if ($feature) {
                            $features[] = $feature;
                        }
                    }
                }
                $subscription_plan->features = json_encode($features);
                $subscription_plan->save();

                api_response([
                    'id' => $subscription_plan->id,
                ]);

                break;

            case 'subscription':
                authenticate_admin();
                $data = $request->all();

                $validation = Validation::init($config['language']);
                $validator = $validation->make($data, [
                    'contact_id' => 'required|integer',
                    'plan_id' => 'required|integer',
                ]);

                if ($validator->fails()) {
                    responseWithError($validator->errors());
                }

                $subscription = null;

                if (!empty($data['id'])) {
                    $subscription = Subscription::find($data['id']);
                }

                if (!$subscription_plan) {
                    $subscription_plan = new SubscriptionPlan();
                }
                break;
        }
        break;
}
