<?php
	require_once('includes/database.php');
	require_once('includes/pages.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');

	$page = new pages();

if (!$session->is_logged_in()) { redirect_to("index.php"); }
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>Manage Site</title>	

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
		
		<h1>Admin Manage Site</h1>
		<div id="nav">
			<?php echo $page->page_navigation(); ?>
		</div>
		
		<div id="page">
			<h1>Manage Content</h1>
		<div id="adminul">
			<ul>
				<li><a class="aTag" href="menu.php">Back to Main Menu</a></li>
			</ul>
		</div>
			<?php if($page_id = $page->selected_page()) { ?>
					<?php $current_page = $page->find_pages_by_id($page_id); ?>
					<h2><?php echo $current_page['page_name'] . " page"; ?></h2>
					<a class="aTag" href="edit_page.php?page=<?php echo $current_page['id']; ?>">Edit page</a> 
					<?php if($current_page['page_name'] === 'Treasure Center') {  ?>
								<a class="aTag" href="gallery_images.php?page=<?php echo $current_page['id']; ?>">Treasure Center</a> 
					<?php } ?>
					
					<?php if($current_page['page_name'] === 'My Trip') {  ?>
								<a class="aTag" href="school_event.php?page=<?php echo $current_page['id']; ?>">My Trip</a> 
					<?php } ?>
					
					<?php if($current_page['page_name'] === 'My Transporter') {  ?>
								<a class="aTag" href="latest_news.php?page=<?php echo $current_page['id']; ?>">My Transporter</a> 
					<?php } ?>
					
			<?php } ?>			
		</div>
		
		<div id="clearfix">
		
		</div>
		
		
	
		
			
		
			
		
		<footer>
			Trip Cara @2017
		</footer>

		
	</div>
		

</body>
		

</html>
