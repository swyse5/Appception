<?php

    require_once 'includes/php/scripts/connect.php';
    require_once 'includes/php/validations/validations.php';
    $errors = [];

    if ($user -> is_loggedin()) {
        $user -> redirect('home.php');
    }

    if (isset($_POST['submit'])) {

        if (empty($_POST['fname']) || empty($_POST['lname'])) {
            $errors[] = "You must include your first and last name.";
        } elseif (!(valName($_POST['fname'])) || !(valName($_POST['fname']))) {
            $errors[] = "Your name should only include alpha-numerics and hyphens.";
        } else {
            $fname = test_input($_POST['fname']);
            $lname = test_input($_POST['lname']);
        }

        if ((empty($_POST['email'])) || !(valEmail($_POST['email']))) {
            $errors[] = "You must include a valid email.";
        } else {
            $email = test_input($_POST['email']);
        }
        if ((empty($_POST['password'])) || (strlen($_POST['password']) < 6)) {
            $errors[] = "You must provide a password with at least 6 characters.";
        } else {
            $password = $_POST['password'];

            try {
                $stmt = $connection -> prepare("SELECT email FROM account WHERE email = :uemail");
                $stmt -> execute(array(':uemail' => $email));
                $row = $stmt -> fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $errors[] = "Sorry, this email is already taken.";
                } else {
                    if ($user -> register($fname, $lname, $email, $password)) {
                        $user -> redirect('register.php?joined');
                    }
                }

            } catch (PDOException $e) {

                echo $e -> getMessage();

            }
        }

    }

?>
