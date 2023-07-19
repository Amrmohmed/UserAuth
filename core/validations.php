<?php

function requiredVal($input)
{
    if (empty($input)) {
        return false;
    }
    return true;
}

function minedVal($input, $lenth)
{
    if (strlen($input) < $lenth) {
        return false;
    }
    return true;
}

function maxVal($input, $lenth)
{
    if (strlen($input) > $lenth) {
        return false;
    }
    return true;
}
function emailVar($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}
