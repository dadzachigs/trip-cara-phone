<?php
	
	require_once('includes/events.php');
	require_once('includes/pages.php');
	
	
	$page = new Pages();
	$page_id = 5;
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
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.php">Children Corner</a></li>
				<li><a href="tour.php">My Vehicle</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="school_events.php">My Trip</a></li>
				<li><a href="latest_new.php">My Driver</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		
		<div id="clearfix">
		
		</div>
		
		<div id="eventInfo">
				<h1>Accident Trip Information</h1>
				<p><?php echo $page_info['content'];  ?></p>
		</div>
		
		<div id="clearfix">
		</div>
		
		<div id="wrapper2">
	
		<h1>Accident Events</h1>
		<h2>Up coming Trip Tips</h2>
	
		<div id="calender">
		
			<table border="0" cellpadding="10" cellspacing="5">
			  <tr>
				<th>Accident Type</th>
				<th>Cause</th>
				<th>Car Type</th>
                <th>Car Name</th>
				<th>Location</th>
				<th>Description</th>
				<th>Season</th>
				<th>Day Time</th>
				<th>Accident Date</th>
				<th>Total Death</th>
				<th>Below 12</th>
				<th>Twelve To 19</th>
				<th>Above 19</th>
				<th>Driver Name</th>
				<th>Gender</th>
				<th>Age</th>
				
				<th></th>
			  </tr>
				<?php while($event = mysqli_fetch_assoc($new_event)) {?>
			  <tr>
				<td><?php echo $event['acc_type']; ?></td>
				<td><?php echo $event['cause']; ?></td>
				<td><?php echo $event['car_type']; ?></td>
                <td><?php echo $event['car_name']; ?></td>
				<td><?php echo $event['location']; ?></td>
				<td><?php echo $event['location_description']; ?></td>
                <td><?php echo $event['season']; ?></td>				
				<td><?php echo $event['day_time']; ?></td>
				<td><?php echo $event['acc_date']; ?></td>
				<td><?php echo $event['Total_Death']; ?></td>
				<td><?php echo $event['Below_12']; ?></td>
				<td><?php echo $event['Twelve_To_19']; ?></td>
				<td><?php echo $event['Above_19']; ?></td>
				<td><?php echo $event['driver_name']; ?></td>
				<td><?php echo $event['gender']; ?></td>
				<td><?php echo $event['age']; ?></td>
			</tr>
			<?php } ?>
			</table>
			
		</div>	
		
		
		
	
		
		<footer>
			Trip Cara @2017
		</footer>
	</div>
		
	</div>
		

</body>
</html>
