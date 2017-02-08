<?php
	
	require_once('includes/database.php');
	require_once('includes/news.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');
	
	
	if (!$session->is_logged_in()) { redirect_to("index.php"); }

	$news = new News();
	
	$latest = $news->find_all_news();

?>
<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Latest News</title>	

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
		
		<h1>Driver Information</h1>
		<div id="adminul">
			<ul>
				<li><a class="aTag" href="manage_site.php">Back to manage site</a></li>
			</ul>
		</div>
		
				<div id="gallery">
			<table border="9" cellpadding="10" cellspacing="5">
			  <tr>
				<th>Diver Name</th>
				<th>age</th>
				<th>News visibility</th>
				<th>Licence Class</th>
				<th></th>
			  </tr>
			<?php while($newss = mysqli_fetch_assoc($latest)) { ?>
			  <tr>
				<td><?php echo $newss['driver_name']; ?></td>
				<td><?php echo $newss['age']; ?></td>
				<td><?php if($newss['visible'] == 1) { echo "Yes"; } else { echo "No"; } ?></td>
				<td><?php echo $newss['licence_class']; ?></td>
				
				<td><a href="delete_news.php?news_id=<?php echo $newss['id']; ?>">Delete</a></td>
			  </tr>
			<?php } ?>
			</table>
		</div>
			<br />
		<div id="clearfix">
		</div>
		<a class ="aTag" href="add_news.php">Add news</a>
		<footer>
			Trip Cara @2017
		</footer>
		
		
	</div>
</body>
		

</html>