<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Update User</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "Update_User_V6.css"> 
		
	</head>
<body>
	<div class ="grid-container">
		<div class="navigation">
			<div class="logo">
				<a href = "01_login_real.php"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<!--nav for login page -->
			<nav>
				<ul>
					<li><a href = "login.php">Login</a></li>
					<li><a href = "signup.php">SignUp</a></li>
				</ul>
			</nav>
		</div>
		<div class="content"><!-- Holds the main page content -->
			<p>Update User</p>
			<h3><form method = "post" id = "01_login">
			<input id="us" type = "text" name = "username" placeholder="User name"/><br />
			<input id="pa" type = 'password' name = 'password' placeholder="New Password"/><br />
			<input  id="login" type = "submit" value = "Insert"/><br />
			</form></h3>
			
		</div>
		<div class="img_2">
			<img src = "images/img2.jpg">
		</div>
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
