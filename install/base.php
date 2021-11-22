<?php
require 'CloudOnexInstaller.php';

session_start();

$app_name = 'CloudOnex Business Suite';
$app_url = 'www.cloudonex.com';
$author_name = 'CloudOnex';
$support_url = 'https://www.cloudonex.com/';

$installer_base_url = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$http = @$_SERVER["HTTPS"] === "on" ? "https://" : "http://";
$installer_base_url = $http . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$installer_base_url = str_replace(
    '/install/step3.php',
    '',
    $installer_base_url
);
$installer_base_url = str_replace(
    '/install/index.php',
    '',
    $installer_base_url
);
$installer_base_url = str_replace(
    '/install/step2.php',
    '',
    $installer_base_url
);
$installer_base_url = str_replace('?_error=1', '', $installer_base_url);
$installer_base_url = str_replace('?_error=2', '', $installer_base_url);
$installer_base_url = str_replace('?_error=3', '', $installer_base_url);
$installer_base_url = str_replace('?_error=4', '', $installer_base_url);
$installer_base_url = str_replace('?_error=5', '', $installer_base_url);

$installer_base_url = str_replace('/install/', '', $installer_base_url);
$installer_base_url = str_replace('/install', '', $installer_base_url);
$installer_base_url = str_replace('/install', '', $installer_base_url);

$installer_base_url = rtrim($installer_base_url, "/");

function inSession($key, $def = '')
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }

    return $def;
}

if (!function_exists('posted_data')) {
    function posted_data($string_only = false)
    {
        $data = [];
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                if ($string_only) {
                    $value = filter_var($value, FILTER_SANITIZE_STRING);
                }
                $data[$key] = trim($value);
            }
        }

        return $data;
    }
}
