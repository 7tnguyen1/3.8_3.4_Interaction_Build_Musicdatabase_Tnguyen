<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Login</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "index.css"> 
		
	</head>
<body>
	<div class ="grid-container">
		<div class="navigation">
			<div class="logo">
				<a href = "#"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<nav>
				<ul>
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
			<input  id="login" type = "submit" value = "login"/><br />
			<p class = "error" id="er"><?php echo $error; ?></p>
			</form></h3>
		</div>
		<div class="img_2">
			<img src = "images/img2.jpg">
		</div>
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
