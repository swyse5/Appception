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
               <li>
                  <a href="requestForm.php">Request New Game</a>
               </li>
               <li class="current-menu-item">
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
		<BR>&nbsp;<BR>
		   
      	<h1><center><u> Meet the Harlem Globetrotters </u></center></h1>
      	
      	<div id="contact">
      	<h2> Dane Winiesdorffer </h2>
      	<h3><center> Project Manager </center></h3>
      	<h3><center> Email: winiesdl@miamioh.edu </center></h3>
      	<IMG class="myimage" src="https://scontent-iad3-1.xx.fbcdn.net/hphotos-xat1/v/t1.0-9/11822569_10203047361703441_1819900238066482808_n.jpg?oh=786a1aa505414076417d064358be67d1&oe=56E69141" style="width:400px; height: 300px;" />
		<hr>
		
		<h2> Sam Horn </h2>
      	<h3><center> Technical Manager </center></h3>
      	<h3><center> Email: hornsl2@miamioh.edu </center></h3>
      	<IMG class="myimage" src="https://scontent-iad3-1.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11960209_985853988121202_2071178421142899127_n.jpg?oh=78b69694662089f2832437a21ccea8ba&oe=56F03459" style="width:400px; height: 400px;" />
		<hr>
		
		<h2> Yusuke Oritate </h2>
      	<h3><center> Developer </center></h3>
      	<h3><center> Email: oritaty@miamioh.edu </center></h3>
      	<IMG class="myimage" src="pic.jpg" style="width:340px; height: 400px;"/>
		<hr>		

		
		<h2> Meghan Styczynski </h2>
      	<h3><center> Developer </center></h3>
      	<h3><center> Email: styczymr@miamioh.edu </center></h3>
      	<IMG class="myimage" src="https://scontent-iad3-1.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/11173382_10207505173692549_7579977312869117191_n.jpg?oh=b4e19a7b6c95f904cfc232104c82ae0b&oe=56E68626" style="width:400px; height: 400px;"/>
		<hr>		

		<h2> Jason Wooten </h2>
      	<h3><center> Developer </center></h3>
      	<h3><center> Email: wootenjw@miamioh.edu </center></h3>
      	<IMG class="myimage" src="https://scontent-iad3-1.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/1384327_882048921813418_7144253324525081366_n.jpg?oh=72035ac0834f25a81b8c9dd49ba68a17&oe=56F4A220" style="width:400px; height: 400px;"/>
		<hr>


		<h2> Stuart Wyse </h2>
      	<h3><center> Developer </center></h3>
      	<h3><center> Email: wysesh@miamioh.edu </center></h3>
      	<IMG class="myimage" src="https://avatars0.githubusercontent.com/u/12645798?v=3&s=400" style="width:400px; height: 400px;"/>
		<hr>
		<br>
		<center><p style="color:black">Ballz</p></center>
      </div>
      
    
