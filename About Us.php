<?php

	require_once('includes/pages.php');
	
	
	$page = new Pages();
	$page_id = $_GET['page'];
	$page_info = $page->find_pages_by_id($page_id);
?>

<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>About Us</title>	

<link rel="stylesheet" type="text/css" href="css/style.css" />

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
		
		<div id="nav">
			<?php echo $page->page_navi(); ?>
		</div>
		
		<div id="clearfix">
		
		</div>
		
		
	<div id="wrapper2">
		
		<div id="article">
			
				<h1>Children Road Safety Tips</h1>
			<div id="">
				<p><strong>Zebra Crossing </strong><br>
				  <strong><img src="About Us_clip_image002.jpg" alt="" width="222" height="167"></strong><br>
			  <strong>You should only cross  the road where there is a zebra crossing slowly and after checking if both  sides are safe.  </strong><br>
			  <strong>Wait for cars to stop  and then cross.</strong></p>
			  <p><br>
				  <strong>Traffic lights</strong><br>
				  <strong><img src="About Us_clip_image004.jpg" alt="" width="320" height="152"></strong></p>
                <p><strong>These are red, amber and green lights which  controls the movement and flow of people and cars when crossing</strong></p>
                <p><strong>the intersections </strong><strong>&nbsp;</strong></p>
                <p><strong>&nbsp;</strong></p>
                <p><strong>Red Light</strong><br>
                  <strong><img src="About Us_clip_image006.jpg" alt="" width="227" height="222"></strong><br>
              <strong>This light means STOP. Never cross the road  when you are facing a red robot </strong></p>
                <p><strong>Amber Light</strong><br>
                  <strong><img src="About Us_clip_image008.jpg" alt="" width="225" height="225"></strong><br>
                  <strong>This light means that proceed slowly and be  ready to stop. </strong></p>
              <p><strong>&nbsp;</strong></p>
                <p><strong>&nbsp;</strong><strong>Green Light </strong><br>
                  <strong><img src="About Us_clip_image010.jpg" alt="" width="267" height="189"></strong><br>
                <strong>This light Means GO. You should cross the  road if you are facing a green light </strong></p>
                <p><strong>SLL Rule</strong><br>
              <strong><img src="About Us_clip_image011.jpg" alt="" width="181" height="257"></strong></p>
                <p><strong>&nbsp;</strong><strong>&nbsp;</strong></p>
                <p><strong>Driving Tips (</strong><a href="http://www.wikihow.com/Be-a-Better-Driver/27"><strong>http://www.wikihow.com/Be-a-Better-Driver/27</strong></a><strong> January 2016 -8:18am)</strong><br>
              <strong><img src="About Us_clip_image013.jpg" alt="" width="272" height="204" border="0"></strong></p>
                <p><br>
              <strong>1-Residential areas are common grounds for children to  run spontaneously into the streets without looking for oncoming cars.</strong> </p>
              <p>Their  minds focus on retrieving their ball in the street or catching up to friends by  suddenly crossing roads on bikes, for instance. </p>
              <p>When driving through  residential streets, be wary of unpredictable objects and people in the  streets.</p>
                <p><br>
                  <img src="About Us_clip_image015.jpg" alt="" width="308" height="230" border="0"><br>
              <strong>2- Focus.</strong> Paying attention to the  traffic around you, frequently surveying your mirrors, and anticipating what  other drivers are going </p>
              <p>to do is the most important step to becoming a  courteous and safe driver.</p>
                <p><br>
                  <img src="About Us_clip_image017.jpg" alt="" width="328" height="246" border="0"><br>
              3- <strong>Use your turn signals, and use them at the right time.</strong> Notify other drivers of your intent to turn or to change lanes early enough  that</p>
                <p> they are able to take appropriate action. Sitting at a red light is NOT  the right time to turn on your blinker; if you had done so earlier, </p>
                <p>the person  behind you would have been able to change lanes and avoid sitting behind you  when the light turns green.</p>
                <p><br>
                  <img src="About Us_clip_image019.jpg" alt="" width="305" height="229" border="0"></p>
                <p><br>
                  4-<strong>If you are signaled to stop by the police, be nice to  the officer and they may let you go despite violating a traffic law.</strong> </p>
                <p>It  will depend on what you did and the traffic conditions as to the offense. Not  all officers are out to write tickets.</p>
              <p>&nbsp;</p>
              <p><img src="About Us_clip_image021.jpg" alt="" width="362" height="272" border="0"></p>
                <p><br>
              5- <strong>NEVER try to &quot;beat the light.</strong>&quot; If the  light turns yellow and you have enough space to stop safely, then stop.  Cyclists, pedestrians, </p>
                <p>and even other drivers expect you to be completely  stopped by the time the light turns red. You endanger yourself and others by  running </p>
                <p>yellow lights, only to save a minute or two, it simply isn't worth it.<strong></strong></p>
<h2>&nbsp;</h2>
			</div>
			
		</div>
		
		<footer>
			Trip Cara @2017
		</footer>
	</div>
		
	</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		

</body>
		

</html>
