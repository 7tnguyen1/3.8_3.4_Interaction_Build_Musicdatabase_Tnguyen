<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Layout1Login</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "style5.css"> 
		
	</head>
<body>
	<div class ="grid-container">
		<div class="img_1">
			<img src = "images/img.png">
		</div>
		<div class="navigation">
			<nav>
				<ul>
					<li><a href = "index.html">Home</a></li>
					<li><a href = "index.html">Music Play</a></li>
					<li><a href = "index.html">Contact</a></li>
					<li><a href = "01_login_real.php">Account</a></li>
				</ul>
			</nav>
		</div>
		<div class="content"><!-- Holds the main page content -->
			<div class="section3">
				<p>Welcome to Music MP3</p>
				<h3><form method = "post" id = "01_login">
				<input id="us" type = "text" name = "username" placeholder="User name"/><br />
				<input id="pa" type = 'password' name = 'password' placeholder="Password"/><br />
				<input  id="login" type = "submit" value = "login"/><br />
				</form></h3>
			</div>
		</div>
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
