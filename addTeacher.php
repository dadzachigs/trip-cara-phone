<?php
	require_once('includes/database.php');
	require_once('includes/user.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');
	
	$user = new User();
	
	if(isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$contact = $_POST['contact'];
		$description = $_POST['description'];
		$email = $_POST['email'];
		$teacherID = $_POST['teacherID'];
		$password = $_POST['password'];
		$user->add_teacher($teacherID, $password, $description, $name, $surname, $email, $contact);
	
	}
?>
<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Teacher</title>	

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
		
		<h1>Enter Details for Teacher</h1>
		<div id="adminul">
			<ul>
				<li><a href="view_teachers.php">Back to view Teachers</a></li>
			</ul>
		</div>
		<form id="add_teacher" action="addTeacher.php" method="POST">
			<label>Name:</label>
			<input type="text" name="name" value="" /><br/>
			
			<label>Surname:</label>
			<input type="text" name="surname" value="" /><br/>
			
			<label>Cell Number:</label>
			<input type="text" name="contact" value="" /><br/>
			
			<label>Description:</label>
			<textarea id="textarea2" cols="30" rows="10" name="description"></textarea><br/>
			
			<label>Email:</label>
			<input type="email" name="email" value="" /><br/>
			
			<label>Teacher ID</label>
			<input type="text" name="teacherID" value="" placeholder="T" /><br/>
			
			<label>Password:</label>
			<input type="password" name="password" value="" />
			
			<input type="submit" name="submit" value="Submit" /> 
			
			<a href="cancel.php">Cancel</a>
		</form>
		<footer>
			Trip Cara @2017		</footer>
		
		
	</div>
</body>
		

</html>
