<?php

require_once '../core/request.php';
require_once '../core/validation.php';
require_once '../core/sessions.php';

session_start();
$errors = [];

if (postMethod()) {


    foreach ($_POST as $key => $value) {

        $$key = sanitizeInput($value);
    }

    // Validate User Name
    if (requiredInput($name)) {
        $errors[] = "Name Cannot be Empty ";
    } elseif (minInput($name, 2)) {
        $errors[] = "Name Cannot be less than 3 characters ";
    } elseif (maxInput($name, 25)) {
        $errors[] = "Name Cannot be so long ";
    }

    // Validate Email
    if (requiredInput($email)) {
        $errors[] = " Email cannot be empty ";
    } elseif (emailInput($email)) {
        $errors[] = "Please Enter a valid email ";
    }


    // Validate Password
    if (requiredInput($password)) {
        $errors[] = "Password Cannot be Empty ";
    } elseif (minInput($password, 6)) {
        $errors[] = "Password Cannot be less than 6 characters ";
    } elseif (maxInput($password, 16)) {
        $errors[] = "Password Cannot be more than 16 characters ";
    }

    // Validate Confirm Passwors
    if (requiredInput($confirm_password)) {
        $errors[] = "You must confirm your password ";
    } elseif (samePass($password, $confirm_password)) {
        $errors[] = "Password and Confirm password must be identical ";
    }


    if (empty($errors)) {

        $user = [
            'name' => $name,
            'email' => $email
        ];

        sessionStore('user', $user);
        header("location:../profile.php");

    } else {
        sessionStore('errors', $errors);
        header("location:../register.php");
    }


    // If the method is not post!
} else {
    echo "Not Allowed Method";
}
