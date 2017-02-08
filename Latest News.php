<?php
	
	require_once('includes/news.php');
	require_once('includes/pages.php');
	
	
	$page = new Pages();
	$page_id = $_GET['page'];
	$page_info = $page->find_pages_by_id($page_id);
	
	$news = new News();
	$latest = $news->find_all_news();
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>School Events</title>	

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
		
		<div id="nav">
			<?php echo $page->page_navi(); ?>
		</div>
		
		<div id="clearfix">
		
		</div>
		
		<div id="wrapper2">
	
		<h1>Transporter Information:</h1>
		<?php while($newss = mysqli_fetch_assoc($latest)) { ?>
			<?php if($newss['visible'] == 1) { ?>
				<h2><?php echo $newss['driver_name'];  ?></h2><br/>
				
				<div id="calender">
					<img src="images/students3.jpg" width="100%"/>
					<h3>Posted on: <?php echo $newss['age'];  ?></h3>
					<p><?php echo $newss['news'];  ?> </p>
				</div><br />
			<?php } ?>
		<?php  } ?>
				<div id="eventInfo">
						<h1>Licence Class</h1>
						<p><?php echo $page_info['content'];  ?></p>
					</div>
		
		
		<footer>
			Trip Cara @2017
		</footer>
	</div>
		
	</div>
		

</body>
</html>
