<?php

authenticate_admin();
require 'apps/chat/models/AppChat.php';

$user = User::find($_SESSION['uid']);

$action = route(2);

switch ($action) {
    case 'list':


        view('app_wrapper', [
            '_include' => 'list', # This is the template file without extension inside views folder

        ]);

        break;

    case 'chats':

        $messages= [];


        $users= User::all();
        $clients = Contact::all();

        $selected_user = false;
        $selected_client = false;

        $to = route(3);

        if($to === 'user')
        {
            $user_id = route(4);
            if($user_id){
                $selected_user = User::find($user_id);

                if($selected_user){
                    $messages = AppChat::where('type','Admin')
                        ->where(function ($query) use($user,$selected_user) {
                            $query->where('to_id',$selected_user->id)
                                ->orWhere('from_id', $selected_user->id);
                        })
                        ->where(function ($query) use($user,$selected_user) {
                            $query->where('to_id',$user->id)
                                ->orWhere('from_id', $user->id);
                        })


                        ->get();
                }



            }

        }
        elseif ($to === 'client'){
            $client_id = route(4);
            if($client_id){
                $selected_client = Contact::find($client_id);
                if($selected_client){
                    $messages = AppChat::where('type','Client')
                        ->where(function ($query) use($user,$selected_client) {
                            $query->where('to_id',$selected_client->id)
                                ->orWhere('from_id', $selected_client->id);
                        })
                        ->where(function ($query) use($user,$selected_client) {
                            $query->where('to_id',$user->id)
                                ->orWhere('from_id', $user->id);
                        })


                        ->get();
                }

            }
        }

        $current_time_plus_five_minutes = time() + (5*60);


        view('app_wrapper', [
            '_include' => 'chats', # This is the template file without extension inside views folder
            'users'=> $users,
            'clients'=> $clients,
            'selected_user' => $selected_user,
            'selected_client'=> $selected_client,
            'messages'=> $messages,
            'to' => $to,
            'current_time_plus_five_minutes' => $current_time_plus_five_minutes,
        ]);

        break;

    case 'send-message':
        $message = _post('message');
        $to_id = _post('user_id');


        $messages = new AppChat();

        $messages->message = $message;
        $messages->type = _post('type');
        $messages->from_id = $user->id;
        $messages->to_id = $to_id;

        $messages->save();

        break;

    case 'save':
        // This route will handle form post for adding new notes and editing existing notes

        $title = _post('title');
        $contents = _post('contents');
        $id = _post('id');

        if ($title === '' || $contents === '') {
            r2(U . 'notes/app/add', 'e', 'All fields are required.');
        }

        // Check the id exist, if id not exist we assume we are creating new note
        if ($id === '') {
            // Create New Note
            $note = new AppNote();
        } else {
            // Find the Note by Id
            $note = AppNote::find($id);

            // If note not exist We will redirect the user back to the list

            if (!$note) {
                r2(U . 'notes/app/list', 'e', 'Notes not found.'); # r2 is a helper function to redirect to another page
            }
        }

        // Now save the note

        $note->title = $title;
        $note->contents = $contents;
        $note->save();

        r2(U . 'notes/app/list', 's', 'Notes created successfully.');

        break;

    case 'view':
        $id = route(3);

        $note = AppNote::find($id);

        view('app_wrapper', [
            '_include' => 'view', # This is the template file without extension inside views folder
            'note' => $note,
        ]);

        break;

    case 'edit':
        $id = route(3);

        $note = AppNote::find($id);

        view('app_wrapper', [
            '_include' => 'edit', # This is the template file without extension inside views folder
            'note' => $note,
        ]);

        break;

    case 'delete':
        $id = route(3);

        // Find the Note
        $note = AppNote::find($id);

        // If found, delete the note
        if ($note) {
            $note->delete();
        }

        // Redirect to the list with success message
        r2(U . 'notes/app/list', 's', 'Deleted successfully');

        break;
}
