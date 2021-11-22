<?php
require 'apps/chat/models/AppChat.php';


$user = Contacts::details();

$action = route(2);

switch ($action) {


    case 'chats':
        $messages= [];

        $admins = User::all();
        $clients = Contact::all();
        $selected_user = false;

        $user_id = route(3);


        $selected_user = User::find($user_id);

        if($selected_user){
            $messages = AppChat::where('type','Client')
                ->where(function ($query) use($user,$selected_user) {
                    $query->where('to_id',$selected_user->id)
                        ->orWhere('from_id',$selected_user->id);
                })
                ->where(function ($query) use($user,$selected_user) {
                    $query->where('to_id',$user->id)
                        ->orWhere('from_id', $user->id);
                })


                ->get();
        }




        view('client_wrapper', [
            '_include' => 'client-chats', # This is the template file without extension inside views folder
            'user' => $user,
            'admins' => $admins,
            'selected_user' => $selected_user,
            'messages'=> $messages
        ]);

        break;

    case 'send-message':
        $message = _post('message');
        $to_id = _post('user_id');



        $messages = new AppChat();

        $messages->message = $message;

        $messages->type = 'Client';
        $messages->from_id = $user->id;
        $messages->to_id = $to_id;

        $messages->save();

        break;







    default:

        abort(404);

        break;

}
