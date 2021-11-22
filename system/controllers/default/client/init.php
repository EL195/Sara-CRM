<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

$ui->assign('languages', Localization::getLanguages());

$ui->assign('selected_navigation', 'invoices');
$ui->assign('_st', 'Invoices');
$ui->assign('_title', $config['CompanyName']);

$action = route(1, 'home');

Event::trigger('client', [$action]);

$frontend_theme = false;

if (!empty($config['frontend_theme'])) {
    $frontend_theme = '../frontend/' . $config['frontend_theme'];
}

$data = request()->all();
