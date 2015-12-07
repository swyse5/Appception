<?php
    include_once 'includes/php/scripts/connect.php';
    // Call the logout function for the current user
    $user -> logout()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" charset="UTF-8">
        <title>Appception</title>
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <h1>Goodbye!</h1>
            <a href="index.html">Home</a>
        </div>
    </body>
</html>
