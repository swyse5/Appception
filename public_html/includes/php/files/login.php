<?php
    require_once 'includes/php/scripts/connect.php';

    // Check if the user is currently logged in
    if ($user -> is_loggedin()) {
        // Redirect if the user is logged in
        $user -> redirect('/home.php');
    }

    // Check if the form data has been submitted
    if (isset($_POST['submit'])) {
        // Store the posted email and password data in appropriate variables
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        // Check if the user can successfully log in
        if ($user -> login($email, $password)) {
            // Redirect if true
            $user -> redirect('/home.php');
        } else {
            // Echo back if the credentials are wrong
            $error = "Wrong credentials!";
        }
    }
?>
