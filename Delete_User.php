<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Delete User</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "Delete_User.css"> 
		
	</head>
<body>
	<div class ="grid-container">
		<div class="navigation">
			<div class="logo">
				<a href = "01_login_real.php"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<?php
				//Pulls the links from the nav.php page and places them in the navigation div
				require 'nav_admin.php'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<div class="content"><!-- Holds the main page content -->
			<p>Delete User</p>
			<h3><form method = "post" id = "01_login">
			<input id="us" type = "text" name = "Username" placeholder="User name"/><br />
			<input id="login" type= "submit" value="Delete"/>
			</form></h3>
			<?php
				require "musicdatabase_database_mysqli.php";
				print "<p class = 'a'>Connected to server</p>";
							
				if(isset($_POST['Username'])){
								
				$UserID = $_POST['Username'];
				$deletequery = "DELETE FROM User WHERE `User` = '$UserID'";

				if (mysqli_query($conn,$deletequery))
					{
					echo "<p class = '#'>Record inserted:</p>";
					}
				else
					{
					echo "<p class = '#'>Error inserting record:</p>";
					}
				}
			?>
		</div>
		<div class="img_2">
			<img src = "images/img2.jpg">
		</div>
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
