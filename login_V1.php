<?php
ob_start();
session_start();
	
	$error = NULL;

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		require 'musicdatabase_database_mysqli.php';
		//username and password sent from form
		$myusername = mysqli_real_escape_string($conn, $_POST['username']);
		$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
		
		$query1 = "SELECT User FROM Admin WHERE User = '".$myusername."' and Password = '".$mypassword."'";
		$query2 = "SELECT User FROM User WHERE User = '".$myusername."' and Password = '".$mypassword."'";

		$result1 = mysqli_query($conn, $query1);
		$result2 = mysqli_query($conn, $query2);

		$count1 = mysqli_num_rows($result1);
		$count2 = mysqli_num_rows($result2);

		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count1 == 1 and $myusername !== '' and $mypassword !== '') {
			$_SESSION['login_user'] = $myusername;
			$_SESSION['user_type'] = 'user';
			header("location: homepage_for_admin.php");
		} else if($count2 == 1 and $myusername !== '' and $mypassword !== '') {
			$_SESSION['login_user'] = $myusername;
			$_SESSION['user_type'] = 'admin';
			header("location: homepage.php");
		} else if($myusername !== '' and $mypassword !== '') {
			$error = "Your username or password is incorrect";
		}
	}
ob_end_flush();
?>

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
		<div class="content"><!-- Holds the main page content -->
			<p>Welcome to Music MP3</p>
			<h3><form method = "post" id = "01_login">
			<input id="us" type = "text" name = "username" placeholder="User name"/><br />
			<input id="pa" type = 'password' name = 'password' placeholder="Password"/><br />
			<input  id="login" type = "submit" value = "login"/><br />
			<a href = "Update_user.php">Forgot your password?</a>
			</form></h3>
		</div>
		<div class="img_2">
			<img src = "images/img2.jpg">
		</div>
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
