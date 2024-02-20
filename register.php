<?php
require_once 'core/sessions.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <form action="handelers/handleRegister.php" method="POST">
            <h1>Sign Up</h1>

            <?php foreach (sessionGetKey('errors') as $error) : ?>
                <div class="error-place">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
            <?php sessionRemove("errors") ?>

            <fieldset>
                <legend>User Name</legend>
                <label for="name">User Name</label>
                <input class="da" type="text" id="name" name="name" placeholder="Enter Your Name">
            </fieldset>
            <fieldset>
                <legend>Email</legend>
                <label for="email">User Name</label>
                <input class="da" type="text" id="email" name="email" placeholder="Enter Your Email">
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <label for="pass">Password</label>
                <input class="da" type="password" id="pass" name="password" placeholder="Enter a strong Password">
            </fieldset>
            <fieldset>
                <legend>Confirm Password</legend>
                <label for="pass">confirm Password</label>
                <input class="da" type="password" id="pass" name="confirm_password" placeholder="Enter a strong Password">
            </fieldset>
            <fieldset class="sub">
                <legend>Submit Data</legend>
                <input type="submit" value="Register">
            </fieldset>

        </form>

    </div>

</body>

</html>