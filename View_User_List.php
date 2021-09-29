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
		<title>View User List</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "Music database"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		<!--Connected to css -->
		<link rel ="stylesheet" href = "style3.css"> 
		
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
		<div class="content" style="padding-top:200px;;"><!-- Holds the User table : Username and Password  -->
			<user1>USERS</user1>
			<password1>PASSWORD</password1>
			<h4><section1>
			<?php
			//conect.php (tells where to connect servername, password, dbaseName)
			require "musicdatabase_database_mysqli.php";
						
			//create a variable to store sql code for the 'display all users' query
			$query = ("SELECT * FROM User");
						
			//run the query
			$result = mysqli_query($conn,$query);
						
			while ($output = mysqli_fetch_array($result))
				{
				echo "<user2>" . $output['User'] . "</user2><br>";
				//close the while loop
				}
			?>
			</section1></h4>
			<h4><section2>
			<?php
				//run the query
				$result = mysqli_query($conn,$query);
						
				while ($output = mysqli_fetch_array($result))
					{
					echo "<user2>" . $output['Password'] . "</user2><br>";
					//close the loop
					}
			?>
			</section2></h4>
		</div>
		<!--Footer for the music database -->
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
