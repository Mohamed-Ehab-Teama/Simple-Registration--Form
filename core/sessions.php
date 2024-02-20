<?php


function sessionStore($key, $value)
{
    $_SESSION[$key] = $value;
}

function sessionGetKey($key)
{
    return $_SESSION[$key] ?? [];    // Use The NULL operator --Nice Usage--
}

function sessionRemove($key)
{
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}
