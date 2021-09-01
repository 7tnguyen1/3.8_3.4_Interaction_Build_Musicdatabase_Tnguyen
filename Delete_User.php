<?php
		// Deliver to login page if access to this page with out login
		session_start();
		if(!isset($_SESSION['login_user'])){
				header("location:login.php");
				}
		else{
			$User = $_SESSION['login_user'];
		}
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Delete User</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "Music database"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		<!--Connected to css -->
		<link rel ="stylesheet" href = "style.css"> 
		
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
				//Pulls the links from the nav_admin.php page and places them in the navigation div
				require 'nav_admin.php'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<div class="content"><!-- Holds the delete user form -->
			<p>Delete User</p>
			<h3><form method = "post">
			<input id="us" type = "text" name = "Username" placeholder="User name"/><br />
			<input id="login" type= "submit" value="Delete"/>
			</form></h3>
			<?php
			//Connect.php (tells where to connect servername, username, password, dbaseName)
				require "musicdatabase_database_mysqli.php";
							
				if(isset($_POST['Username'])){
								
				$UserID = $_POST['Username'];
				// Delete query use to delelte user account
				$deletequery = "DELETE FROM User WHERE `User` = '$UserID'";

				if (mysqli_query($conn,$deletequery))
					{
					echo "<p class = 'Connected'>Record deleted:</p>";
					}
				else
					{
					echo "<p class = 'error'>Error deleting record:</p>";
					}
				}
			?>
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
