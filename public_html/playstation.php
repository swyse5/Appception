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
               <li class="current-menu-item">
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
      <div id="full">
         <div class="games">
            <?php
               if (2==1) {
                   echo "no games";
               }
               else {
                echo "<h2>PlayStation Games</h2>";
                echo '<div id="game_name"><p> Name </p></div> <div id="game_genre"><p> Genre </p></div> <div id="game_platform"> Platform </div>';
                   $servername = 'localhost';
                   $username = 'root';
                   $password = 'root';
                   $dbname = 'GAMES';
               
                   //create connection
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   $sql = "SELECT * FROM Game WHERE platform = 'PlayStation' ORDER BY Name";
                   $result = $conn->query($sql);
                   
                   //display the results
					while($row = $result->fetch_assoc()) {
						echo '<div class="game1">';
            		echo "<a href='gameInfo.php?gameId=" . $row['ID'] . "'>";
             		echo '<div id="game_name"><p><font color="white">' . $row["Name"]. '</p></div><div id="game_genre"><p>' . $row["Genre"]. '</p></div> <div id="game_platform">' . $row["Platform"]. '</font></div>';
                		echo "</div>";
                		}               
               
//                    while($row = mysql_fetch_assoc($result)) {
//                        echo "<a href='index.php?gameInfo=" . ${row['ID']} . "'>" . $row['Name'] . 
//                        ". Genre: " . $row['Genre'] . ". Platform: " . $row['Platform'] . "<br/><br/>";
//                    }
//                    echo "<a href='index.php?getDetail=${key}'>" ${row['ID']} "</a><br /><br />";
                }
               ?>
         </div>
      <div class="slide_show">
         <section>
            <div id="gameImage">
               <h1><?php
                  $servername = 'localhost';
                  $username = 'root';
                  $password = 'root';
                  $dbname = 'GAMES';
                  
                  //create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $sql = "SELECT * FROM Game WHERE Name = 'Madden NFL 15'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  
                  print '<tr>
                  <td>
                  	<IMG class="myimage" src="'.$row["Picture"].'" alt="'.$row["Name"].'" align="middle" />
                  </td>
                  </tr>';
                  ?></h1>
         </section>
         </div>
            </section>
         </div>
      </div>
   </body>
</html>