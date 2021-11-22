<?php
require 'base.php';
$data = posted_data(true);
$data_for_password = posted_data();
$fullname = $data['fullname'] ?? '';
$email = $data['email'] ?? '';
$password = trim($_POST['password']) ?? '';
$confirm_password = trim($_POST['confirm_password']) ?? '';

if ($fullname == '' || $email == '' || $password == '') {
    exit('All fields are required');
}

if ($password != $confirm_password) {
    exit('Password does not match');
}

$password = password_hash($password, PASSWORD_DEFAULT);

require '../system/config.php';

$dbh = new pdo(
    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
    DB_USER,
    DB_PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// Change only if current username is demo@example.com

$stmt = $dbh->query(
    "SELECT *FROM sys_users where username = 'demo@example.com' LIMIT 1"
);
$stmt->execute();
if ($stmt->rowCount() === 1) {
    $sql = "UPDATE sys_users SET fullname='$fullname', username='$email', password='$password' WHERE id=1";

    $stmt = $dbh->prepare($sql);

    $stmt->execute();
} else {
    echo 'Username and password was already changed.';
    exit();
}

if (!empty($_SESSION['purchase_key'])) {
    $purchase_key = $_SESSION['purchase_key'];
    $stmt = $dbh->query(
        "SELECT *FROM sys_appconfig where setting = 'purchase_key' LIMIT 1"
    );
    $stmt->execute();
    if ($stmt->rowCount() === 1) {
        $sql = "UPDATE `sys_appconfig` SET `value` = '$purchase_key' WHERE `setting` = 'purchase_key'";

        $stmt = $dbh->prepare($sql);

        $stmt->execute();
    }
}

echo '1';
