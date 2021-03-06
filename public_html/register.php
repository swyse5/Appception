<?php
    require_once 'includes/php/files/register.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>AppCeption</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signUp.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/min/jquery-2.1.4.min.js"></script>
    <script src="js/min/functions-min"></script>
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
               <li class="current-menu-item">
                  <a href="register.php">Sign Up</a>
               </li>
               <li>
                  <a href="login.php">Login</a>
               </li>
               <li>
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

    <div class="wrapper">
        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <div class="alert-header">
                    <h4>Error:</h4>
                </div>
                <div class="alert-info">
                    <?php foreach ($errors as $e): ?>
                        <p><?php echo $e; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php elseif (isset($_GET['joined'])): ?>
            <div class="alert alert-notice">
                <div class="alert-header">
                    <h4>Success!</h4>
                </div>
                <div class="alert-info">
                    <p>You've successfully registered.</p>
                    <p><a href="login.php">Login now</a></p>
                </div>
            </div>
        <?php endif; ?>
<center>
        <div class="form-container">
            <form id="form" method="post" action="register.php">
                <fieldset> <legend><h2><u>Sign Up</u></h2> </legend>
                    <input type="text" name="fname" placeholder="First Name"> <br><br>
                    <input type="text" name="lname" placeholder="Last Name"> <br><br>
                    <input type="email" name="email" placeholder="Email">  <br><br>
                    <input type="password" name="password" placeholder="Password"> <br><br>
                    <input type="submit" name="submit" value="Sign Up"> <br>
                </fieldset>
            </form>
        </div>
     </center>
    </div>
  </body>
</html>
