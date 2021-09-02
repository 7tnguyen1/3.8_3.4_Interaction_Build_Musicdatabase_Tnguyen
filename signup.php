<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>SignUp</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "style8.css"> 
		
	</head>
<body>
	<div class ="grid-container">
		<div class="navigation">
			<div class="logo">
				<a href = "01_login_real.php"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<nav>
				<ul>
					<li><a href = "homepage.php">Home</a></li>
					<li><a href = "musicplayer.php">Music Play</a>
						<ul>
							<li><a href= "Query1.php">Query1</a></li>
							<li><a href= "Query2.php">Query2</a></li>
						</ul>
					</li>
					<li><a href = "login.php">Contact</a></li>
					<li><a href = "login.php">Login</a></li>
					<li><a href = "signup.php">SignUp</a></li>
				</ul>
			</nav>
		</div>
		<div class="content"><!-- Holds the main page content -->
			<p>Welcome to Music MP3</p>
			<h3><form method = "post" id = "01_login">
			<input id="us" type = "text" name = "username" placeholder="User name"/><br />
			<input id="pa" type = 'password' name = 'password' placeholder="Password"/><br />
			<input  id="login" type = "submit" value = "SignUp"/><br />
			</form></h3>
				<?php
				//Connect.php (tells where to connect servername, username, password, dbaseName)
				require "musicdatabase_database_mysqli.php";
							
				if(isset($_POST['username']) and isset($_POST['password'])) {
					$User_ID = $_POST['username'];
					$Password = $_POST['password'];

				//create a variable to store sql code for the ''And Users' query
				$insertquery = "INSERT INTO User(User_ID, Password) VALUES ('".$User_ID."', '".$Password."')";
				if (mysqli_query($conn,$insertquery))
					{
					echo "<p class = 'error'>Record inserted:</p>";
					}
				else
					{
					echo "<p id = 'error'>Error inserting record:</p>";
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
