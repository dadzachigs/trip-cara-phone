<?php
	
	require_once('includes/photograph.php');
	require_once('includes/pages.php');
	$photos = Photograph::find_all();
	
	$page = new Pages();
	$page_id = 4;
	$page_info = $page->find_pages_by_id($page_id);
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>Gallery</title>	

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style3.css" />

</head>
<body>
	<div id="wrapper">
		<div id="logo"> 
			<img src="images/school_logo.png" alt="" />
		</div>
		
		<div id="search">
			<form>
				<label>Search:</label>
				<input type="text" />
				<input type="button" value="Search" />
			</form>
		</div>
		
		<div id="clearfix">
		
		</div>
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.php">Children Corner</a></li>
				<li><a href="tour.php">My Vehicle</a></li>
				<li><a href="gallery.php">Treasure Center</a></li>
				<li><a href="school_events.php">My Trips</a></li>
				<li><a href="latest_new.php">My driver</a></li>
				<li><a href="contact.php">Emergency Call Us</a></li>
			</ul>
		</nav>
		
		<div id="clearfix">
		
		</div>
		
		
	<div id="wrapper2">
	
		<h1>Gallery</h1>
	<div id="gallery">
		<div id="slider1_container" class="container" >


        <!-- Slides Container -->
        <div u="slides" class="slides" >
		<?php foreach($photos as $photo): ?>
            <div>
                <img u="image" src="<?php echo $photo->image_path(); ?>" />
                <img u="thumb" src="<?php echo $photo->image_path(); ?>" width="72" height="72" />
            </div>
		<?php endforeach; ?>
		</div>
    
	
	 <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" id="arrowl" >
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" id="arrowR">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01"  id="thumb" >
            <!-- Thumbnail Item Skin Begin -->

			
			
			
		<div u="slides" class="s">
                <div u="prototype" class="p" id="p">
                    <div class=w><div u="thumbnailtemplate" id="w"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
    </div>
    <!-- Jssor Slider End -->
	
	<div id="caption">
	<?php foreach($photos as $photo): ?>
		<p><?php echo $photo->caption; ?></p>
	<?php endforeach; ?>
	</div>
	
</div>
		<div id="article">
			
		
			
		</div>
		
		<footer>
			Trip Cara @2017
		</footer>
	</div>
		
	</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jssor.js"></script>
		<script type="text/javascript" src="js/jssor.slider.js"></script>		
		<script type="text/javascript" src="js/gallery.js"></script>

</body>
</html>
