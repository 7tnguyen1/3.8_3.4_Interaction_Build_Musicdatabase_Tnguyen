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
		<title>Homepage</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "Music database"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		<!--Connected to css -->
		<link rel ="stylesheet" href = "homepage.css">
		
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
				//Pulls the links from the nav_normal.php page and places them in the navigation div
				require 'nav_normal.php'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<!-- Div that holds the banner -->
		<div class="img_1">
			<img src = "images/music-1106439_1280.jpg">
		</div>
		<div class="content_1"><!-- Holds the main page content -->
			<h1>Welcome to MUSIC MP3</h1>
			<p>MUSIC MP3 is a free music player application. With a high-quality music store, you will have a great music experience.</p>
			<p >Digital music service with millions of high quality copyrighted songs , helping you listen to music, download music, upload and sync my music store on multiple devices.</p>
		</div>
		<!-- Holds the Imges which all be the link to other special playlist-->
		<div class="content_4">
			<Space></Space>
			<div class="images1">
				<a href = "Query8.php"><img src = "images/Indie2.jpg" class="image1"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query8.php">Indie</a></div>
  				</div>
			</div>
			<div class="images2">
				<a href = "Query7.php"><img src = "images/RandB2.jpg" class="image2"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query7.php">R and B</a></div>
  				</div>
			</div>
			<div class="images3">
				<a href = "Query6.php"><img src = "images/Pop2.png" class="image3"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query6.php">Pop</a></div>
  				</div>
			</div>
			<div class="images4">
				<a href = "Query10.php"><img src = "images/rock2.png" class="image4"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query10.php">Rock</a></div>
  				</div>
			</div>
			<Space></Space>
			<div class="images5">
				<a href = "Query9.php"><img src = "images/5.jpg" class="image5"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query9.php">Easy Listen</a></div>
  				</div>
			</div>
			<div class="images6">
				<a href = "Query3.php"><img src = "images/6.jpg" class="image6"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query3.php">Country</a></div>
  				</div>
			</div>
			<div class="images7">
				<a href = "Query4.php"><img src = "images/jazz2.jpg" class="image7"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query4.php">Jazz</a></div>
  				</div>
			</div>
			<div class="images8">
				<a href = "Query5.php"><img src = "images/dance muisc3.png" class="image8"></a>
				<!--Div for overlay techniques so that when the user hover it hide the images and display text -->
				<div class="overlay">
    				<div class="text"><a href = "Query5.php">Dance</a></div>
  				</div>
			</div>
		</div>
		<!--Footer for the music database -->
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
