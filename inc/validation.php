<?php
// to remove spaces
function requiredInput($val)
{
    $str = trim($val);
    // required.
    if (strlen($str) > 0) {
        return true;
    } else {
        return false;
    }
}

// sanitize string input.
function sanStr($val)
{
    $str = filter_var($val, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    return $str;
}

// sanitize email input.
function sanEmail($val)
{
    $email = filter_var($val, FILTER_SANITIZE_EMAIL);
    return $email;
}

// min number.
function minNo($val, $min)
{
    if (strlen($val) < $min) {
        return false;
    } else {
        return true;
    }
}
// max number.
function maxNo($val, $max)
{
    if (strlen($val) > $max) {
        return false;
    } else {
        return true;
    }
}
// validate passwords.
function passConfirm($val, $value)
{
    if ($val !== $value) {
        return false;
    } else {
        return true;
    }
}
