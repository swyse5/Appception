<?php
    include_once 'includes/php/scripts/connect.php';

    // Check if the user is not logged in
    if(!$user -> is_loggedin()) {
        // Redirect to index if not logged in
        $user -> redirect('index.php');

    }
    // Store current session in the id variable
    $id = $_SESSION['user_session'];

    /*
        Create a request to check if any row in the database has the id equal to
        the current sessions id
     */
    $stmt = $connection -> prepare("SELECT * FROM users WHERE id = :A_id");
    // Set the parameter :id equal to the session id
    $stmt -> execute(array(":A_id" => $id));
    // Fetch the corresponding rows element
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" charset="UTF-8">
        <title>Practice</title>
    </head>
    <body>
        <div class="wrapper">
            <h1>Welcome <?php print($row['First_name']); ?> </h1>
            <a href="logout.php?logout=true">Logout</a>
			<a href= "index.php">Home</a>
        </div>
    </body>
</html>
