<?php
	require_once('includes/database.php');
	require_once('includes/photograph.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');
	

if (!$session->is_logged_in()) { redirect_to("index.php"); }

	$photos = Photograph::find_all();
?>
<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gallery Images</title>	

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
		
		<h1>Images In your Gallery</h1>
		<div id="adminul">
			<ul>
				<li><a class="aTag" href="manage_site.php">Back to manage site</a></li>
			</ul>
		</div>
		<div id="gallery">
			<table class="bordered">
			  <tr>
				<th>Image</th>
				<th>Filename</th>
				<th>Caption</th>
				<th>Size</th>
				<th>Type</th>
				<th></th>
				
			  </tr>
			<?php foreach($photos as $photo): ?>
			  <tr>
				<td><img src="<?php echo $photo->image_path(); ?>" width="100" /></td>
				<td><?php echo $photo->filename; ?></td>
				<td><?php echo $photo->caption; ?></td>
				<td><?php echo $photo->size_as_text(); ?></td>
				<td><?php echo $photo->type; ?></td>
				<td><a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a></td>
				
			  </tr>
			<?php endforeach; ?>
			</table>
			</div>
			<br />
			
		
		<div id="clearfix">
		</div>
		<a class ="aTag" href="photo_upload.php">Upload a new photograph</a>
		<footer>
			school site 2015
		</footer>
		
		
	</div>
</body>
		

</html>
