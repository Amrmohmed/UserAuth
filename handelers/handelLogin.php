<?php
session_start();
include '../core/functions.php';
include '../core/validations.php';



$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (!strlen($email) || !strlen($password)) {
    die('Please enter a username and password');
}

$success = false;

$handle = fopen("../data/users.csv", "r");

while (($data = fgetcsv($handle)) !== FALSE) {
    if ($data[1] == $email && $data[2] == $password) {
        $success = true;
        break;
    }
}

fclose($handle);

if ($success) {
    redirect('../index.php');
} else {
    redirect('../login.php');
}
