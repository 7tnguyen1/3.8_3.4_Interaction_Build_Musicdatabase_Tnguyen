<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Login</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "style7.css"> 
		
	</head>
<body>
	<div class ="grid-container">
		<div class="navigation">
			<div class="logo">
				<a href = "01_login_real.php"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<?php
				//Pulls the links from the nav.php page and places them in the navigation div
				require 'nav_login.css'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<div class="img_2">
			<img src = "images/img2.jpg">
		</div>
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
