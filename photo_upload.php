<?php
	require_once('includes/database.php');
	require_once('includes/photograph.php');
	require_once('includes/session.php');
	require_once('includes/functions.php');
	

if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<?php
	$max_file_size = 1048576;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB

	
	if(isset($_POST['submit'])) {
		$photo = new Photograph();
		$photo->caption = $_POST['caption'];
		$photo->attach_file($_FILES['file_upload']);
		if($photo->save()) {
			// Success
			$message ="File has been uploaded";
			$session->message("Photograph uploaded successfully.");
			redirect_to('gallery_images.php');
		} else {
			// Failure
      $message = join("<br />", $photo->errors);
		}
	}
	
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Photo Upload</title>	

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
	<h2>Photo Upload</h2>

		<?php echo $message; ?>
		  <form id="upload" action="photo_upload.php" enctype="multipart/form-data" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
			<p><input type="file" name="file_upload" /></p>
			<p>Caption: <input type="text" name="caption" value="" /></p>
			<input type="submit" name="submit" value="Upload" />
		  </form>
	  

		<footer>
			school site 2015
		</footer>
		
		
	</div>
</body>
		

</html>