<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Layout1Musicplay</title>
		<meta chrset="utf-8"/>
		<meta name="Keywords" content = "html5, layout, CSS Grid System"/>
		<meta name = "Author" content = "Tony Nguyen"/>
		<meta name = "Description" content = "CSS Grid System Layout Tutorial"/>
		<meta name = "viewport" content = "width=device-width. initial-scale=1"/>
		
		<link rel ="stylesheet" href = "Musicplayer.css"> 
		
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
		<div class="content_1"><!-- Holds the main page content -->
			<div class="section3"><!-- Holds the main page connect -->
				<h1>All the song upload in this playlist.Total duration of playlist:</h1>
			</div>
		</div>
		<div class="content_2">
			<h1>PlayList</h1>
		</div>
		<div class="content_3">
			<Space></Space>
			<h3>Title</h3>
			<h3>Album</h3>
			<h3>Artist</h3>
			<h3>Genre</h3>
			<h3>Duration</h3>
			<h3>Size</h3>				
			<?php
				require "musicdatabase_database_mysqli.php";
					
				$query = ("SELECT s.`Title`, GROUP_CONCAT(DISTINCT a.`Artist` 
				ORDER BY a.`Artist` ASC SEPARATOR ', ') AS 'Artist',
				GROUP_CONCAT(DISTINCT g.`Genre` SEPARATOR ', ') AS 'Genre',
				GROUP_CONCAT(DISTINCT al.`Album` SEPARATOR ', ') AS 'Album', s.`Duration`, s.`Size`
				FROM `Song` AS s
				JOIN Album AS al ON al.`Album_ID` = s.`Album_ID`
				JOIN Song_to_Genre AS stg ON stg.`Song_ID` = s.`Song_ID`
				JOIN Genre AS g ON g.`Genre_ID` = stg.`Genre_ID`
				JOIN Song_to_Artist AS sta ON sta.`Song_ID` = s.`Song_ID`
				JOIN Artist AS a ON a.`Artist_ID` = sta.`Artist_ID`
				GROUP BY s.Title, s.Duration, s.Size
				ORDER BY s.`Title` ASC");
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
		<div class = "footer">&copy; Copyright Tony Nguyen 2021</div>
	</div>
</body>
</html>
