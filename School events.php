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
	
		<h1>Trip Accident View</h1>
		<h2>Up coming Road Tips</h2>
		
		<div id="calender">
		<?php while($events = mysqli_fetch_assoc($new_event)) {?>
			<div id="eventN">
				<p>Accident Type</p>
				<p><?php echo $events['acc_type']; ?></p>
			</div>
			
			<div id="eventD">
				<p>Cause</p>
				<p><?php echo $events['cause']; ?></p>
			</div>
		
			<div id="Date">
				<p>Car Type</p>
				<p><?php echo $events['car_type']; ?></p>
			</div>
            <div id="eventA">
				<p>Car Name</p>
				<p><?php echo $events['car_name']; ?></p>
			</div>
			
			<div id="eventB">
				<p>Location</p>
				<p><?php echo $events['location']; ?></p>
			</div>
		
			<div id="DateC">
				<p>Description</p>
				<p><?php echo $events['location_description']; ?></p>
			</div>
			<div id="eventD">
				<p>Season</p>
				<p><?php echo $events['season']; ?></p>
			</div>
			
			<div id="eventE">
				<p>Day Time</p>
				<p><?php echo $events['cause']; ?></p>
			</div>
		
			<div id="DateF">
				<p>Car Type</p>
				<p><?php echo $events['day_time']; ?></p>
			</div>
			<div id="eventG">
				<p>Accident Date</p>
				<p><?php echo $events['acc_date']; ?></p>
			</div>
			
			<div id="eventH">
				<p>Total Death</p>
				<p><?php echo $events['Total_Death']; ?></p>
			</div>
		
			<div id="DateI">
				<p>Below_12</p>
				<p><?php echo $events['Below_12']; ?></p>
			</div>
			<div id="eventJ">
				<p>Twelve To 19</p>
				<p><?php echo $events['Twelve_To_19']; ?></p>
			</div>
			
			<div id="eventK">
				<p>Above 19</p>
				<p><?php echo $events['Above_19']; ?></p>
			</div>
		
			<div id="DateL">
				<p>Driver Name</p>
				<p><?php echo $events['driver_name']; ?></p>
			</div>
			<div id="eventS">
				<p>Gender</p>
				<p><?php echo $events['gender']; ?></p>
			</div>
			
			<div id="eventT">
				<p>Age</p>
				<p><?php echo $events['age']; ?></p>
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
