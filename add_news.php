<?php
	require_once('includes/database.php');
	require_once('includes/news.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');
	

	if (!$session->is_logged_in()) { redirect_to("index.php"); }
	
	if(isset($_POST['submit'])) {
		
		$news_title = $_POST['driver_name'];
		$news = $_POST['age'];
		$visible = $_POST['visible'];
		$news_date = $_POST['licence_class'];
		$news_title = $_POST['licence_number'];
		$news = $_POST['issue_date'];
		$visible = $_POST['retested'];
		$news_date = $_POST['city'];
		
		$newss = new News();
		
		$newss->add_news($driver_name, $age, $visible, $licence_class, $licence_number, $issue_date, $retested, $retested);
	
	}

?>
<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Driver Information</title>	

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
		
		<h1>Add Driver Information</h1>
		<div id="adminul">
			<ul>
				<li><a class="aTag" href="latest_news.php">Back to Latest Driver Infor</a></li>
			</ul>
		</div>
		<form  id="edit_page_form" action="add_news.php" method="POST">
				<label>Driver Name:</label>
				<input type="text" name="driver_name" value="" autofocus/><br/>
			
				<label>Age:</label><br />
				<textarea id="textarea" name="age" rows="2" cols="12"></textarea>
				
				<label>Show Driver:</label>
				<input type="radio" name="visible" value="1"/> Yes
				<input type="radio" name="visible" value="0"/> No <br/>
				
				
				<label>Licence Class:</label>
				<input type="text" name="licence_class" /><br/>
				<label>Licence Number:</label>
				<input type="text" name="licence_number" /><br/>
				<label>Issue Date:</label>
				<input type="date" name="issue_date" /><br/>
				<label>Driver Retested:</label>
				<input type="text" name="retested" /><br/>
				<label>City:</label>
				<input type="text" name="city" /><br/>
				
				<input id="submit" type="submit" name="submit" value="Add Driver" />
		</form>
		
		<footer>
			Trip Cara @2017
		</footer>
		
		
	</div>
</body>
		

</html>
