<?php


function checkRequestMethod($method)
{
    if ($_SERVER['REQUEST_METHOD'] == $method) {

        return true;
    }
    return false;
}

function checkPostInput($input)
{

    if (isset($_POST[$input])) {
        return true;
    }
    return false;
}

function sanitizeInput($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}



function redirect($path)
{
    header("location:$path");
}

function login($email, $password)
{
    $file = '../data/users.csv';

    // Check if the file exists
    if (!file_exists($file)) {
        die("User database not found.");
    }
}
