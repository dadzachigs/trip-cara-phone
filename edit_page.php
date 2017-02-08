<?php
	require_once('includes/database.php');
	require_once('includes/pages.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');

	$page = new pages();

if (!$session->is_logged_in()) { redirect_to("index.php"); }


	$message = "";
	if(isset($_GET['page'])) {
		 $id = $_GET['page'];
	
		
	if(isset($_POST['submit'])) {
		
		$page_name = $_POST['page_name'];
		$content = $_POST['content'];
		
		
		$page->update_page_by_id($id, $page_name, $content);
	
	
	}
	
	} else {
		$message = "There is no id for the candidate";
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
	
		<div id="nav">
			<?php echo $page->page_navigation(); ?>
		</div>
		<div id="clearfix">
		
		</div>
		
		<div id="page">
			
			<?php $pages = $page->find_pages_by_id($page_id = $_GET['page']); ?>
			<h2>Manage page: <?php echo $pages['page_name']; ?></h2>
			<form  id="edit_page_form" action="edit_page.php?page=<?php echo $pages['id']; ?>" method="POST">
				<label>Menu name:</label>
				<input type="text" name="page_name" value="<?php echo htmlentities($pages['page_name']); ?>"/><br/>
				
				
				
				<label>Content:</label>
				<textarea id="textarea" name="content" rows="20" cols="60"><?php echo htmlentities($pages['content']); ?></textarea>
				
				<input id="submit" type="submit" name="submit" value="Edit page" />
			</form>
			
			
			
		</div>
		<footer>Trip Cara @2017</footer>
	</div>
</body>


</html>
<?php if(isset($database)) { $database->close_connection(); } ?>

