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
		<title>Sort By Genre</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "Music database"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		<!--Connected to css -->
		<link rel ="stylesheet" href = "test12.css"> 
		
	</head>
<body>
	<!--Set for grid system for the page -->
	<div class ="grid-container">
		<!-- The div for nav and in the div it contain the logo and a function to called the nav -->
		<div class="navigation">
			<div class="logo">
				<!-- Set a div that contain logo for the music database -->
				<a href = "#"><img src = "images/logo8.png" height = "100"></a>
			</div>
			<?php
				//Pulls the links from the nav_admin.php page and places them in the navigation div
				require 'nav_admin.php'; //'require' is 100% needed for the site to run 
			?>
		</div>
		<!-- Div that holds the banner -->
		<div class="img_1">
			<img src = "images/music-1106439_1280.jpg">
		</div>
		<div class="content_2">
			<img src = "images/ab.jpg">
		</div>
		<div class="content_1"><!-- Hold the total duration -->
			<div class="section3">
				<?php
				// Called up the query for it to display the total duration of all song.
				require "musicdatabase_database_mysqli.php";
					
				$query = ("SELECT SEC_TO_TIME(SUM(s.`Duration`)) AS 'Total time'
				FROM `Song` AS s");
				$result = mysqli_query($conn,$query);
					
				while($output = mysqli_fetch_array($result))
					{
				?>
				<h1>All the song upload in this playlist.Total duration of playlist:<?php echo $output['Total time'];?></h1>
				<?php
				// Closes the output while loop
				}
				?>
			</div>
		</div>
		<!-- Column that contain the name of what is display -->
		<div class="content_3">
			<Space></Space>
			<h3>Title</h3>
			<h3>Album</h3>
			<h3>Artist</h3>
			<h3>Genre</h3>
			<h3>Duration</h3>
			<h3>Size</h3>
		</div>
		<div class="content_4">
			<?php
				//Called up all data to display in the page and information of each column is place underneath their title
				require "musicdatabase_database_mysqli.php";
					
				$query = ("SELECT s.`Title`, GROUP_CONCAT(DISTINCT g.`Genre`  SEPARATOR ', ') AS 'Genre',
				GROUP_CONCAT(DISTINCT a.`Artist` SEPARATOR ', ') AS 'Artist',
				GROUP_CONCAT(DISTINCT al.`Album` SEPARATOR ', ') AS 'Album', s.`Duration`, s.`Size`
				FROM `Song` AS s
				JOIN Album AS al ON al.`Album_ID` = s.`Album_ID`
				JOIN Song_to_Genre AS stg ON stg.`Song_ID` = s.`Song_ID`
				JOIN Genre AS g ON g.`Genre_ID` = stg.`Genre_ID`
				JOIN Song_to_Artist AS sta ON sta.`Song_ID` = s.`Song_ID`
				JOIN Artist AS a ON a.`Artist_ID` = sta.`Artist_ID`
				GROUP BY s.Title, s.Duration, s.Size
				ORDER BY Genre ASC, Artist ASC");
				$result = mysqli_query($conn,$query);
					
				while($output = mysqli_fetch_array($result))
					{
				?>
				<Space></Space>
				<h3> <p class="white"><?php echo $output['Title'];?></p></h3>
				<h3><p class="white"><?php echo $output['Album']; ?></p></h3>
				<h3><p class="white"><?php echo $output['Artist']; ?></p></h3>
				<h3><p class="white"><?php echo $output['Genre']; ?></p></h3>
				<h3> <p class="white"><?php echo $output['Duration'];?></p></h3>
				<h3> <p class="white"><?php echo $output['Size'];?></p></h3>
				<?php
				// Closes the output while loop
				}
				?>
		</div>
		<!--Footer for the music database -->
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
