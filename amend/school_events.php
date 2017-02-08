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
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="tour.php">Chidren Corner</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="school_events.php">Accident Trip Events</a></li>
				<li><a href="latest_new.php">Latest Trip Tips</a></li>
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
	
		<h1>Vehicle Information </h1>
		<h2>Travel in a safe vehicle always</h2>
	
		<div id="calender">
		
			<table border="0" cellpadding="10" cellspacing="5">
			  <tr>
				<th>Car Type</th>
                <th>Car Name</th>
				<th>Registration No</th>
				<th>Insurance</th>
				<th>Status</th>
				<th>Date Checked</th>
				
				<th></th>
			  </tr>
				<?php while($event = mysqli_fetch_assoc($new_event)) {?>
			  <tr>
				<td><?php echo $event['car_type']; ?></td>
                <td><?php echo $event['car_name']; ?></td>
				<td><?php echo $event['reg_number']; ?></td>
				<td><?php echo $event['insurance']; ?></td>
                <td><?php echo $event['status']; ?></td>				
				<td><?php echo $event['date_checked']; ?></td>
				
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
