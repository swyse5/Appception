<!----
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
                  <li class="current-menu-item">
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
                  <li>
                     <a href="requestForm.php">Request New Game</a>
                  </li>
                  <li>
                     <a href="#">Contact Us</a>
                  </li>
               </ul>
            </nav>
         </div>
   
   
   ------------------>
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
      <script language="javascript" type="text/javascript">
         var slideimages = new Array(); // create new array to preload images
         slideimages[0] = new Image(); // create new instance of image object
         slideimages[0].src = "images/game1.jpg"; // set image src property to image path, preloading image in the process
         slideimages[1] = new Image();
         slideimages[1].src = "images/game2.jpg";
         slideimages[2] = new Image();
         slideimages[2].src = "images/game3.jpg";
         slideimages[3] = new Image();
         slideimages[3].src = "images/game4.gif";
         slideimages[4] = new Image();
         slideimages[4].src = "images/game5.gif";
      </script>
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
                        <a href="action_role-playing.php">Action role-playing</a>
                     </li>
                     <li>
                        <a href="sports.php">Sports</a>
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
               <li>
                  <a href="requestForm.php">Request New Game</a>
               </li>
               <li>
                  <a href="#">Contact Us</a>
               </li>
            </ul>
         </nav>
      </div>
      <div>
         <form action='./game-search.php' method='get'>
            <input type='text'name='x' placeholder="Search Game" size='25'  />
            <input type='submit' value="Search" />
         </form>
      </div>
      </section>
      </div>
      </div>
      <?php 
         $conn = mysql_connect("localhost","root","root");
         
         
         // if that fails, try to connect to project database.
         if (!mysql_select_db("Games"))
         {
         echo 'project database';
         mysql_select_db("Games");
         }					// x is variable to users input
         		$x = isset($_GET['x']) ? $_GET['x']: ' ';
         		//break up input into characters
         $terms= explode(" ", $x);
         
         $query ="SELECT * FROM GAME WHERE ";
         $i=0;
         foreach ($terms as $each)
         {
         	$query .= "Name LIKE '%$each%' OR Genre LIKE '%$each%' ";
         }
         
         
         $query1 = mysql_query($query);
         $numrows = mysql_num_rows($query1);
         $check = 1;
         if($query) {
         while($row = mysql_fetch_assoc($query1)){
         		$check = 0;
         		$Name = $row['Name'];
         		$Company=$row['Company'];
         		$Genre = $row['Genre'];
         		$Platform=$row['Platform'];
         		$Description = $row['Description'];
         		echo "<br><hr>";
         		print "<h2>$Name</h2><center><b>Company:</b>  $Company  &nbsp;&nbsp;&nbsp;<b>Genre:</b> $Genre &nbsp;&nbsp;&nbsp;<b>Platform:</b> $Platform </center><br><b>Description:</b> $Description<br />";
         }
         }
         if($check != 0) {
         	echo "<br>Results for \"<b>$x</b>\" were not found";
         }
         
         //disconnect
         mysql_close();
         ?> 
   </body>
</html>