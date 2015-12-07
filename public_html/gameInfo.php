<?php
   require_once 'includes/php/scripts/connect.php';
   require_once 'includes/php/validations/validations.php';
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Game Info</title>
      <link href="css/header.css" rel="stylesheet" type="text/css">
      <style>
         #title{
         width:100%;
         text-align:center;
         font-size:x-large;         
         margin-top: 5%;
         border:2px;
         border-style:solid;
         }
         
         #gameImage {
         float:left;
         width:44%;
         text-align:center;
         background-color:#274E69;
         border:2px;
         border-style:solid;
         max-height:100%;
         max-width:100%;
         }
         
         .ballz {
         width:70%;
         height:70%;

         }
         
         #details {
         width:54%;
         float:left;
         text-align:left;
         font-size: large;
         margin-right:0px;
         margin-top:auto;
         padding-bottom:auto;
         border:2px;
         border-style:solid;
         background-color:maroon;

         }
         #gameSummary {
         width:100%;
         float:left;
         text-align:center;
         border:2px;
         border-style:solid;
         padding-bottom:auto;
         margin-top:2%;
         background-color:maroon;
         }
         #reviews {
         float:left;
         width:100%;
         text-align:center;
         margin-left:auto;
         margin-top:2%;
         margin-bottom:10%;
         padding-bottom:auto;
         border:2px;
         border-style:solid;
         background-color:maroon;

         }
      </style>
   </head>
   <body>
      <!--***************************HEAD/DROPDOWN/SEARCH***************************-->
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
      <div id="title">
         <h2><?php     
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname = 'GAMES';
            $game_id=$_GET['gameId'];

            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT Name, Company, Genre, Description, Platform, Picture FROM Game WHERE ID=$game_id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            $game_id=$_GET['gameId'];
            echo "<br>" . $row["Name"]. "<br>"; ?></h2>
      </div>
      <div id="gameImage">
         <h1><?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname = 'GAMES';
            
            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM Game WHERE ID=$game_id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            print '<tr>
            <td>
            <img class="ballz" name="myimage" src="'.$row["Picture"].'" alt="'.$row["Name"].'" />
            </td>
            </tr>';
            ?></h1>
      </div>
      <div id="details">
         <h1>
            <center>Details</center>
         </h1>
         <div id="lists">
            <div style="margin-left: 2em">
               <h4><?php     
                  $servername = 'localhost';
                  $username = 'root';
                  $password = 'root';
                  $dbname = 'GAMES';
                  
                  //create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $sql = "SELECT Name, Company, Genre, Description, Platform, Picture FROM Game WHERE ID=$game_id";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                              echo "<br> Company: " . $row["Company"]. "<br>"; ?></h4>
               <h4><?php     
                  $servername = 'localhost';
                  $username = 'root';
                  $password = 'root';
                  $dbname = 'GAMES';
                  
                  //create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $sql = "SELECT Name, Company, Genre, Description, Platform, Picture FROM Game WHERE ID=$game_id";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                              echo "<br> Platform: " . $row["Platform"]. "<br>"; ?></h4>
               <h4><?php     
                  $servername = 'localhost';
                  $username = 'root';
                  $password = 'root';
                  $dbname = 'GAMES';
                  
                  //create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $sql = "SELECT Name, Company, Genre, Description, Platform, Picture FROM Game WHERE ID=$game_id";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                              echo "<br> Genre: " . $row["Genre"]. "<br>"; ?></h4>
            </div>
         </div>
      </div>
      <div id="gameSummary">
         <h1>Game Summary</h1>
         <h4><?php     
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname = 'GAMES';
            
            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT Name, Company, Genre, Description, Platform, Picture FROM Game WHERE ID=$game_id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo "<br>" . $row["Description"]. "<br>"; ?></h4>
      </div>
      <div id="reviews">
         <h1>Reviews</h1>
         <h4><?php     
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbname = 'GAMES';
            
            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM Review WHERE Game_id=$game_id";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            	echo '<hr>';
            	echo "<h3>". $row["Title"]. "</h3>";
            	echo "<h3>". $row["Stars"]. "/5</h3>";
            	echo "<h4>".$row["Review"]. "</h4>";}
            ?> 
         </h4>
      </div>
   </body>
</html>