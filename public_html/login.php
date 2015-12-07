<?php
    require_once 'includes/php/files/login.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>AppCeption</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/signUp.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
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
               <li class="current-menu-item">
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
            <br>
        </form>
        <div class="wrapper">
            <?php if (isset($error)): ?>
                <div class="alert alert-error">
                    <div class="aler-header">
                        <h4>Error:</h4>
                    </div>
                    <div class="alert-info">
                        <p><?php echo $error ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <center>
            <div class="form-container">
                <form id="login-form" method="post" action="login.php">
                    <fieldset>
                        <legend>
                            <h2><u>Login</u></h2>
                        </legend>
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" name="submit" value="Sign In">
                    </fieldset>
                </form>
            </div>
        </div>
        </center>
        <script src="js/min/jquery-2.1.4.min.js"></script>
        <script src="js/min/functions-min.js"></script>
    </body>
</html>
