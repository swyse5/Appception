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
<title>Review Form</title>
    <style type="text/css">
        <!--
        #reviewForm {
            text-align: center;
            font-size: 35;
            margin: 10%;
            border: 2px;
            border-style: solid;
            color: white;
        }
        
        #reviewDisplay {
            text-align: left;
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
    <div id ="reviewForm">
        <h2>Submit a Review</h2>
        <form action="review.php" method="post">
        <p>
            How do you rate this game ?: <br>
            <select name="rating">
                <option>&#9733&#9734&#9734&#9734&#9734</option>
                <option>&#9733&#9733&#9734&#9734&#9734</option>
                <option>&#9733&#9733&#9733&#9734&#9734</option>
                <option>&#9733&#9733&#9733&#9733&#9734</option>
                <option>&#9733&#9733&#9733&#9733&#9733</option>
            </select><br><br>
            <script>
                <?php $rating = $_POST['rating']; ?>
            </script>
            Enter a title for your review:<br>
            <input type="text" name="title"/><br><br>
            <script> 
                <?php $title = $_POST['title']; ?>
            </script>
            Write a review:<br>
            <textarea name="freeans" row="12" cols="50"></textarea><br>
            <input type="submit" value="Submit"/>
            <input type="reset" value="Reset"/><br>
            <script>
                <?php $freeans = $_POST['freeans']; ?>
            </script>
            </p>
        </form>
    </div> 
    <div id="reviewDisplay">
        <h2>Reviews</h2>
        <p>
<br>
        <?php 
               echo "<b>Title: </b>". $title. "<br />";
               echo "<b>Rating: </b>". $rating. "<br />";
               echo "<b>Description: </b>". $freeans; 
            ?><br>
        </p>
    </div>
</body>
</html>