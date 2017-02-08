<?php
	require_once('includes/database.php');
	require_once('includes/events.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');

	if (!$session->is_logged_in()) { redirect_to("login.php"); }
	
	$events = Events::find_all_events();

?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>School Events</title>	

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />

</head>
<body>
	<div id="wrapper">
		<div id="logo"> 
			<img src="images/school_logo.png" alt="" />
		</div>
		<div id="clearfix">
		</div>
		
		<h1>Accident Trip Events Statiscs</h1>
		<div id="adminul">
			<ul>
				<li><a class="aTag" href="manage_site.php">Back to manage site</a></li>
			</ul>
		</div>
		
		<div id="gallery">
			<table border="9" cellpadding="10" cellspacing="5">
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
			<?php while($event = mysqli_fetch_assoc($events)) { ?>
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
				
				<td><a href="delete_event.php?event_id=<?php echo $event['id']; ?>">Delete</a></td>
			  </tr>
			<?php } ?>
			</table>
		</div><br />
		
		
	
		<div id="clearfix">
		</div>
		<a class ="aTag" href="add_event.php">Add Accident  Event</a>
		<footer>
			Trip Cara @2017	</footer>
		
		
	</div>
</body>
		

</html>