<?php
	require_once('includes/database.php');
	require_once('includes/user.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');
	
	
	$user = new User();
	
	$teachers = $user->find_all_teachers();
?>
<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>Teachers Admin</title>	

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
		
		<h1>Teachers Admin<?php ?> </h1>
		
		<div>
			<p><?php// echo $_SESSION['message']; ?></p>
		</div>
		
		<div id="adminul">
			<ul>
				<li><a href="menu.php">Back to Admin menu</a></li>
				<li><a href="addTeacher.php">+Add Teacher</a></li>
			</ul>
		</div>
		
		<div id="teacherInfo">
		<?php while($teacher = mysqli_fetch_assoc($teachers)){ ?>
			<h3>Teacher Name: <?php echo $teacher['name'] ." ". $teacher['surname'];  ?></h3>
			<p>TeacherID: <?php echo $teacher['teacherID'];  ?></p>
			<p>Email: <?php echo $teacher['Email'];  ?></p>
			<p>Cell: <?php echo $teacher['contact_details'];  ?></p>
			<p>About Teacher: <?php echo $teacher['description'];  ?></p>
			
		<?php } ?>
		</div>
		
		
		<footer>
			school site Admin 2015
		</footer>
		
		
	</div>
</body>
		

</html>
