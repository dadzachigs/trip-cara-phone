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
				<th>Car Type</th>
                <th>Car Name</th>
				<th>Registration No</th>
				<th>Insurance</th>
				<th>Status</th>
				<th>Date_checked </th>
								<th></th>
			  </tr>
			<?php while($event = mysqli_fetch_assoc($events)) { ?>
			  <tr>
				<td><?php echo $event['car_type']; ?></td>
                <td><?php echo $event['car_name']; ?></td>
				<td><?php echo $event['reg_number']; ?></td>
				<td><?php echo $event['insurance']; ?></td>
                <td><?php echo $event['status']; ?></td>				
				<td><?php echo $event['date_checked']; ?></td>
				
				<td><a href="delete_event.php?event_id=<?php echo $event['id']; ?>">Delete</a></td>
			  </tr>
			<?php } ?>
			</table>
		</div><br />
		
		
	
		<div id="clearfix">
		</div>
		<a class ="aTag" href="add_event.php">Add Vehicle Information</a>
		<footer>
			Trip Cara @2017	</footer>
		
		
	</div>
</body>
		

</html>