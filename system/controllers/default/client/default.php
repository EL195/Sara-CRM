<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

require 'system/controllers/default/client/init.php';

if ($frontend_theme) {
    \view("$frontend_theme/home", []);
} else {
    Contacts::isLogged();
    view('auth', [
        'type' => 'client_auth',
        'admin' => User::admin(),
    ]);
}
