<?php

// Get method
function getRequestType(){
    return $_SERVER['REQUEST_METHOD'];
}

//chack if the method post or not
function postMethod(){

    if (getRequestType() == 'POST'){
        return TRUE;
    }

    return FALSE;
}

function sanitizeInput($value){

    return trim(htmlspecialchars(htmlentities($value)));

}