<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Update User</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "Music database"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		<!--Connected to css -->
		<link rel ="stylesheet" href = "style7.css"> 
		
	</head>
<body>
	<!--Set for grid system for the page -->
	<div class ="grid-container">
		<!-- The div for nav and in the div it contain the logo and a function to called the nav -->
		<div class="navigation">
			<!-- Set a div that contain logo for the music database -->
			<div class="logo">
				<a href = "01_login_real.php"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<?php
				//Pulls the links from the nav_login.php page and places them in the navigation div
				require 'nav_login.php'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<div class="content"><!-- Holds the Update User form -->
			<p>Update User</p>
			<h3><form method = "post">
			<input id="us" type = "text" name = "username" placeholder="User name"/><br />
			<input id="pa" type = 'password' name = 'password' placeholder="New Password"/><br />
			<input  id="login" type = "submit" value = "Insert"/><br />
				<?php
				//Connect.php (tells where to connect servername, username, password, dbaseName)
				require "musicdatabase_database_mysqli.php";
							
				if(isset($_POST['username']) and isset($_POST['password'])) {
					$User_ID = $_POST['username'];
					$New_Password = $_POST['password'];

				//Update query use to update the password
				$updatequery = "UPDATE User SET Password = '".$New_Password."' WHERE User = '".$User_ID."'";
				if (mysqli_query($conn,$updatequery))
					{
					echo "<p class = 'Connected'>Record inserted:</p>";
					}
				else
					{
					echo "<p class = 'error'>Error inserting record:</p>";
					}
				}
				?>
			</form></h3>
		</div>
		<!--Div for the image -->
		<div class="img_2">
			<img src = "images/img2.jpg">
		</div>
		<!--Footer for the music database -->
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
