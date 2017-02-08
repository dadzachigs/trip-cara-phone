<?php
	
	require_once('includes/events.php');
	require_once('includes/pages.php');
	
	
	$page = new Pages();
	$page_id = $_GET['page'];
	$page_info = $page->find_pages_by_id($page_id);
	
	$event = new Events();
	$new_event = $event->find_all_events();
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
	
		<h1>Vehicle Information View</h1>
		<h2>Always travel with safe vehicles </h2>
		
		<div id="calender">
		<?php while($events = mysqli_fetch_assoc($new_event)) {?>
			
			<div id="Date">
				<p>Car Type</p>
				<p><?php echo $events['car_type']; ?></p>
			</div>
            <div id="eventA">
				<p>Car Name</p>
				<p><?php echo $events['car_name']; ?></p>
			</div>
			
			<div id="eventB">
				<p>Registration no</p>
				<p><?php echo $events['reg_number']; ?></p>
			</div>
		
			<div id="DateC">
				<p>Insurance</p>
				<p><?php echo $events['insurance']; ?></p>
			</div>
			<div id="eventD">
				<p>status</p>
				<p><?php echo $events['status']; ?></p>
			</div>
			
			<div id="eventE">
				<p>Date Checked</p>
				<p><?php echo $events['date_checked']; ?></p>
			</div>
		
			
			<div id="clearfix">
			</div>
		<?php  }  ?>
			
			
		</div>
		<div id="eventInfo">
				<h1>Event Information</h1>
				<p><?php echo $page_info['content'];  ?></p>
			</div>
		
		
		<footer>
			Trip Cara @2017
		</footer>
	</div>
		
	</div>
		

</body>
</html>
