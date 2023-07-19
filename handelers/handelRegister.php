<?php

session_start();
include '../core/functions.php';
include '../core/validations.php';

$errors = [];

if (checkRequestMethod('POST')  && checkPostInput('name')) {

    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    // validation :
    //name => required , min:3 - max:25

    if (!requiredVal($name)) {
        $errors[] = "Name is required";
    } elseif (!minedVal($name, 3)) {
        $errors[] =  ' Name should be at least 3 chare ';
    } elseif (!maxVal($name, 25)) {
        $errors[] =  ' Name should be smaller than 25 chare';
    }


    //Email => required , a validate

    if (!requiredVal($email)) {
        $errors[] = "Email is required";
    } elseif (!emailVar($email)) {
        $errors[] =  ' Plaese type a valid Email ';
    }


    //password => required , min:6 - max:20

    if (!requiredVal($password)) {
        $errors[] = "password is required";
    } elseif (!minedVal($password, 3)) {
        $errors[] =  ' password should be at least 6 chare ';
    } elseif (!maxVal($password, 25)) {
        $errors[] =  ' password should be smaller than 20 chare';
    }

    if (empty($errors)) {

        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, $password];
        fputcsv($users_file, $data);

        //redirect .. 
        $_SESSION['auth'] = [$name, $email];
        redirect('../index.php');
        die;
    } else {
        $_SESSION['errors'] = $errors;
        redirect('../register.php');
        die;
    }
} else {
    echo "Not support method";
}
