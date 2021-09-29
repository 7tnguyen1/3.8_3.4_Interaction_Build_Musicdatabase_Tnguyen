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
		<title>Add User</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "Music database"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		<!--Connected to css -->
		<link rel ="stylesheet" href = "Add_user.css"> 
		
	</head>
<body>
	<!--Set for grid system for the page -->
	<div class ="grid-container">
		<!-- The div for nav and in the div it contain the logo and a function to called the nav -->
		<div class="navigation">
			<!-- Set a div that contain logo for the music database -->
			<div class="logo">
				<a href = "#"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<?php
				//Pulls the links from the nav_admin.php page and places them in the navigation div
				require 'nav_admin.php'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<div class="content"><!-- Holds the Add user form -->
			<p>Add User</p>
			<h3><form method = "post">
			<input id="us" type = "text" name = "username" placeholder="User name"/><br />
			<input id="pa" type = 'password' name = 'password' placeholder="Password"/><br />
			<input  id="login" type = "submit" value = "Insert"/><br />
			</form></h3>
				<?php
				//Connect.php (tells where to connect servername, username, password, dbaseName)
				require "musicdatabase_database_mysqli.php";
							
				if(isset($_POST['username']) and isset($_POST['password'])) {
					$User_ID = $_POST['username'];
					$Password = $_POST['password'];

				//create a variable to store sql code for the ''Add Users' query
				$insertquery = "INSERT INTO User(User, Password) VALUES ('".$User_ID."', '".$Password."')";
				if (mysqli_query($conn,$insertquery))
					{
					echo "<p class = 'Connected'>Record inserted:</p>";
					}
				else
					{
					echo "<p class = 'error'>Error inserting record:</p>";
					}
				}
				?>
		</div>
		<!--Div for the image -->
		<div class="img_2">
			<img src = "images/music-1106439_1280.jpg">
		</div>
		<!--Footer for the music database -->
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
