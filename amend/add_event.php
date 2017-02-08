<?php
	require_once('includes/database.php');
	require_once('includes/events.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');

	$event = new Events();

if (!$session->is_logged_in()) { redirect_to("index.php"); }


	$message = "";
	
	if(isset($_POST['submit'])) {
		
		$car_type = $_POST['car_type'];
		$car_name = $_POST['car_name'];
		$reg_number = $_POST['reg_number'];
		$insurance = $_POST['insurance'];
		$status = $_POST['status'];
		$date_checked = $_POST['date_checked'];
		
		
		$event->add_event($car_type, $car_name, $reg_number, $insurance, $status, $date_checked);

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
				<td><label>Car Type:</label></td>
				<td><input type="text" size="50px" name="car_type" /></td>
                </tr>
                <tr>
                <td><label>Car Name:</label></td>
				<td><input type="text" size="50px" name="car_name" /></td>
                </tr>
                <tr>
                <td><label>Registration No:</label></td>
				<td><input type="text"  size="50px" name="reg_number" /></td>
                </tr>
                <tr>
               <td> <label>Insurannce:</label></td>
				<td><input type="text" size="50px" name="insurance" /></td>
                </tr>
				<tr>
                <td><label>Status:</label></td>
				<td><input type="text" size="50px" name="status" /></td>
                </tr>
                <tr>
                <td><label>Date Checked:</label></td>
				<td><input type="text" size="50px" name="date_checked" /></td>
                </tr>
                </table>					
				<input id="submit" type="submit" name="submit" value="Save Vehicle Information" />
			</form>		
			
			
		</div>
		<footer>
			Trip Cara @2017
		</footer>
	</div>
</body>


</html>
<?php if(isset($database)) { $database->close_connection(); } ?>

