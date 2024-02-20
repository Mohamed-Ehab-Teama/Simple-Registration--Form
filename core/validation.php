<?php

function requiredInput($input)
{
    if (empty($input)) {
        return TRUE;
    }
    return FALSE;
}

function minInput($input, $length)
{
    if (strlen($input) < $length) {
        return TRUE;
    }
    return FALSE;
}

function maxInput($input, $length)
{
    if (strlen($input) > $length) {
        return TRUE;
    }
    return FALSE;
}

function emailInput($email){
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return TRUE;
    }
    return FALSE;
}

function samePass($value1,$value2){

    if ($value1 != $value2){
        return TRUE;
    }
    return FALSE;

}