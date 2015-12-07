<?php

    session_start();

    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "GAMES";

    try {
         $connection = new PDO("mysql:host={$host};dbname={$database}",$user,$password);
         $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
         echo $e -> getMessage();
    }


    include_once 'Class.User.php';

    $user = new USER($connection);

?>
