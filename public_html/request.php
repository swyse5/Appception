<?php
   require_once 'includes/php/scripts/connect.php';
   require_once 'includes/php/validations/validations.php';
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>AppCeption</title>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <link href="css/indexStyle.css" rel="stylesheet" type="text/css">
      <link href="css/header.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id="header">
         <h1>APPCEPTION</h1>
      </div>
      <div id="drop_down">
         <nav id="primary_nav_wrap">
            <ul>
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <a href="xbox.php">Xbox</a>
               </li>
               <li>
                  <a href="playstation.php">PlayStation</a>
               </li>
               <li>
                  <a href="pc.php">PC</a>
               </li>
               <li>
                  <a href="#">Genre</a>
                  <ul>
                     <li>
                        <a href="first-person_shooter.php">First-person shooter</a>
                     </li>
                     <li>
                        <a href="action_role-playing.php">Sports</a>
                     </li>
                     <li>
                        <a href="sports.php">Action role-playing</a>
                     </li>
                  </ul>
               </li>
               <li style="list-style: none; display: inline">
               </li>
               <li>
                  <a href="register.php">Sign Up</a>
               </li>
               <li>
                  <a href="login.php">Login</a>
               </li>
               <li class="current-menu-item">
                  <a href="requestForm.php">Request New Game</a>
               </li>
               <li>
                  <a href="contactUs.php">Contact Us</a>
               </li>
            </ul>
         </nav>
      </div>
 	<div>
        <form action='./game-search.php' method='get'>
			<input type='text'name='x' placeholder="Search Games" size='25'  />
			<input type='submit' value="Search" />
		</form>
	</div>

<?php
	$servername = 'localhost';
    $username = 'root';
	$password = 'root';
    $dbname = 'GAMES';	
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
						
	$name = $_POST['gamename'];
	$developer = $_POST['developername'];
	$genre = $_POST['genre'];
	$platform = $_POST['platform'];
	$description = $_POST['freeans'];
	$image = $_POST['image'];
	
	$sql = "INSERT INTO GAME VALUES (NULL, '$name', '$developer', '$genre',
		CURDATE(), '$platform', '$image', '$description', 1)";
			
	mysqli_query($conn, $sql);
	
	echo '<BR>&nbsp;<BR>';
	echo $name; 
	echo " has been succesfully submitted!";
?>