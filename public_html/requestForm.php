<!DOCTYPE html>
<html>
<head>

    <script src="jquery-1.11.3.min.js">
    </script>
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <!--<meta charset=“UTF-8” />-->
    <title>AppCeption</title>
    <style type="text/css">
        <!--
            #section {
            text-align: center;
            font-size: 35;
            margin: 10%;
            border: 2px;
            border-style: solid;
            
            color: white;
        }
        
        -->
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
    <!--***************************HEAD/DROPDOWN/SEARCH END***************************-->
    <div id="section">
        <h2>Submit Request</h2>
        <form action="request.php" method="post">
            <p>Name of the game:<br>
            <input name="gamename" type="text"><br>
            <br>
            Name of developer:<br>
            <input name="developername" type="text"><br>
            <br>
            Genre:<br>
            <select name="genre">
                <option>
                    First-person shooter
                </option>
                <option>
                    Action role-playing
                </option>
                <option>
                    Sports
                </option>
            </select><br>
            <br>
            Platform:<br>
            <select name="platform">
                <option>
                    Xbox
                </option>
                <option>
                    PlayStation
                </option>
                <option>
                    PC
                </option>
            </select><br>
            <br>
            Image link:<br>
            <input name="image" type="text"><br>
            <br>

            Description:<br>
            <textarea cols="40" name="freeans"></textarea><br>
            <input type="submit" value="Submit"> 
            <input type="reset" value="Reset">
            <br></p>
        </form>
    </div>
</body>
</html>