<?php
	require_once('includes/database.php');
	require_once('includes/session.php');
	require_once('includes/user.php');
	require_once('includes/functions.php');
	require_once('includes/pages.php');
	
//if(!$session->is_logged_in()) {
//  redirect_to("index.php");
//}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  // Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);
	
  if ($found_user) {
    $session->login($found_user);
		//log_action('Login', "{$found_user->username} logged in.");
		redirect_to("menu.php");
  } else {
    // username/password combo was not found in the database
    $message = "Username/password combination incorrect.";
  }
  
} else { // Form has not been submitted.
  $username = "";
  $password = "";
  $message = "";
}

	$page = new Pages();
	$page_id = 1;
	$page_info = $page->find_pages_by_id($page_id);
?>



<!DOCTYPE Html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<title>Home</title>	

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />

</head>
<body>
	<div id="wrapper">
		<div id="logo"> 
			<img src="images/school_logo.png" alt="" height="36" />
		</div>		
		<div id="search">
			<form id="form_search">
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
				<li><a href="school_events.php">My Trip</a></li>
				<li><a href="latest_new.php">My Transporter</a></li>
				<li><a href="contact.php">Emergence Call Us</a></li>
			</ul>
		</nav>
		
		<div id="clearfix">
		
		</div>
		
		
	<div id="wrapper2">
		<div id="slider1_container" class="container" >

        
        <!-- Slides Container -->
			<div u="slides" style="cursor: move; left: 0px; top: 0px; width:1400px; height:400px;
				overflow: hidden;">
				<div>
					<a u=image href="#"><img src="images/111.jpg" /></a>
				   
				</div>
				<div>
					<a u=image href="#"><img src="images/222.jpg" /></a>
					
				</div>
				<div>
					<a u=image href="#"><img src="images/333.jpg" /></a>
				   
				</div>
				<div>
					<a u=image href="#"><img src="images/444.jpg" /></a>
					
				</div>
			</div>
		
			<!-- bullet navigator container -->
			<div u="navigator" class="jssorb01" id="bullet1">
				<!-- bullet navigator item prototype -->
				<div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;" ></div>
			</div>
			<!-- Bullet Navigator Skin End -->

			<!-- Arrow Left -->
			<span u="arrowleft" class="jssora05l" id="arrowleft">
			</span>
			<!-- Arrow Right -->
			<span u="arrowright" class="jssora05r" id="arrowright">
			</span>
			<!-- Arrow Navigator Skin End -->
		</div>
    <!-- Jssor Slider End -->
	
		<div id="article">
			
		
			<div id="welcome">
				<h1>Welcome</h1>
				<p> 
					<?php echo $page_info['content'];  ?>
				</p>
			</div>
			
			<div id="admin">
				<h1>Members</h1>
				<?php echo $message; ?>
				<form action="index.php" method="post">
					<label>Member ID:</label>
					<input type="text" name="username" value=""/> <br/>
					<label>Password:</label>
					<input type="password" name="password" value="" /><br/>
					<input type="submit" name="submit" value="Sign In" />
				</form>
			</div>
		</div>
		
		<footer>
			Trip Cara @ 2017
		</footer>
	</div>
		
	</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jssor.js"></script>
		<script type="text/javascript" src="js/jssor.slider.js"></script>		
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/p_drop.js"></script>

</body>
		

</html>
