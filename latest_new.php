<?php
	
	require_once('includes/news.php');
	require_once('includes/pages.php');
	
	
	$page = new Pages();
	$page_id = 6;
	$page_info = $page->find_pages_by_id($page_id);
	
	$news = new News();
	$latest = $news->find_all_news();
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>My Trip</title>	

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style3.css" />

</head>
<body>
	<div id="wrapper">
		<div id="logo"> 
			<img src="images/school_logo.png" alt="" />
		</div>
		
		<div id="search">
			<form>
				<label>Search:</label>
				<input type="text" />
				<input type="button" value="Search" />
			</form>
		</div>
		
		<div id="clearfix">
		
		</div>
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.php">Children Corner</a></li>
				<li><a href="tour.php">Vehicle Investigator</a></li>
				<li><a href="gallery.php">Tresure Center</a></li>
				<li><a href="school_events.php">My Trip</a></li>
				<li><a href="latest_new.php">My Transporter</a></li>
				<li><a href="contact.php">Emergency Call Us</a></li>
			</ul>
		</nav>
		
		<div id="clearfix">
		
		</div>
		
		<div id="wrapper2">
	
		<h1>Driver Information:</h1>
		<img src="images/students3.jpg" width="100%"/>
		<?php while($newss = mysqli_fetch_assoc($latest)) { ?>
			<?php if($newss['visible'] == 1) { ?>
				
				
				<div id="calender">
					<h2><?php echo $newss['driver_name'];  ?></h2><br/>
					<h3>Posted on: <?php echo $newss['age'];  ?></h3>
					<p><?php echo $newss['licence_class'];  ?> </p>
				</div><br />
			<?php } ?>
		<?php  } ?>
				<div id="eventInfo">
						<h1>Driver Infor</h1>
						<p><?php echo $page_info['content'];  ?></p>
					</div>
		
		
		<footer>
			Trip Cara @2017	</footer>
	</div>
		
	</div>
		

</body>
</html>
