<?php
session_start();
require_once 'core/sessions.php';

if (!isset($_SESSION['user'])) {
    header("location:register.php");
    die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>

    <div class="container">

        <h1>Personal Data</h1>

        <h2>
            Name : <?php echo sessionGetKey('user')['name'] ?? '' ?>
        </h2>
        <h2>
            Email : <?php echo $_SESSION['user']['email'] ?? '' ?>
        </h2>

    </div>

</body>

</html>