<?php
	require_once('includes/database.php');
	require_once('includes/events.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');

	$event = new Events();

if (!$session->is_logged_in()) { redirect_to("index.php"); }


	$message = "";
	
	if(isset($_POST['submit'])) {
		
		$acc_type = $_POST['acc_type'];
		$cause = $_POST['cause'];
		$car_type = $_POST['car_type'];
		$car_name = $_POST['car_name'];
		$location = $_POST['location'];
		$location_description = $_POST['location_description'];
		$season = $_POST['season'];
		$day_time = $_POST['day_time'];
		$acc_date = $_POST['acc_date'];
		$Total_Death = $_POST['Total_Death'];
		$Below_12 = $_POST['Below_12'];
		$Twelve_To_19 = $_POST['Twelve_To_19'];
		
		$Above_19 = $_POST['Above_19'];
		$driver_name = $_POST['driver_name'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		
		
		$event->add_event($acc_type, $cause, $car_type, $car_name, $location, $location_description, $season, $day_time, $acc_date, $Total_Death, $Below_12, $Twelve_To_19, $Above_19, $driver_name, $gender, $age);

	} 
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>Edit Page</title>
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
	
			<?php echo $message; ?>
		<div id="page">
			
			
			<h2>Add Accident Trip Event</h2>
			<form  id="edit_page_form" action="add_event.php" method="POST">
            <table>
													
				<tr>
                <td><label>Accident type:</label></td>
				<td><input type="text" size="150px" name="acc_type" value="" autofocus/></td>
                </tr>
               <tr>
               <td><label>Cause:</label></td>
				<td><textarea id="textarea" name="cause" rows="1" cols="45"></textarea></td>
                </tr>
                <tr>				
				<td><label>Car Type:</label></td>
				<td><input type="text" size="50px" name="car_type" /></td>
                </tr>
                <tr>
                <td><label>Car Name:</label></td>
				<td><input type="text" size="50px" name="car_name" /></td>
                </tr>
                <tr>
                <td><label>Location:</label></td>
				<td><input type="text"  size="50px" name="location" /></td>
                </tr>
                <tr>
               <td> <label>Location Description:</label></td>
				<td><input type="text" size="50px" name="location_description" /></td>
                </tr>
				<tr>
                <td><label>Season:</label></td>
				<td><input type="text" size="50px" name="season" /></td>
                </tr>
                <tr>
                <td><label>Day Time:</label></td>
				<td><input type="text" size="50px" name="day_time" /></td>
                </tr>
                <tr>
				<td><label>Accident Date:</label></td>
				<td><input type="text" size="50px" name="acc_date" /></td>
                </tr>
                <tr>
                <td><label>Total Death:</label></td>
				<td><input type="text" size="50px" name="Total_Death" /></td>
				</tr>
                <tr>
                <td><label>Below_12:</label></td>
                				<td><input type="text" size="50px" name="Below_12" /></td>
                                </tr>
                   <tr>             
                <td><label>Twelve_To_19:</label></td>
				<td><input type="text" size="50px" name="Twelve_To_19" /></td>
				</tr>
                <tr>
                <td><label>Above_19:</label></td>
				<td><input type="text" size="50px" name="Above_19" /></td>
                </tr>
                <tr>
                <td><label>driver_name:</label></td>
				<td><input type="text" size="50px" name="driver_name" /></td>
                </tr>
                <tr>
                <td><label>Gender:</label></td>
				<td><input type="text" size="50px" name="gender" /></td>
                </tr>
                <tr>
                <td><label>Driver age:</label></td>
				<td><input type="text" size="50px" name="age" /></td>
                </tr>
                </table>					
				<input id="submit" type="submit" name="submit" value="Save Accident Event" />
			</form>		
			
			
		</div>
		<footer>
			Trip Cara @2017
		</footer>
	</div>
</body>


</html>
<?php if(isset($database)) { $database->close_connection(); } ?>

