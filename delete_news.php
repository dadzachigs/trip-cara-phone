<?php

	require_once('includes/news.php');
	

?>

<?php
	$newss = new News();
	$id= $_GET['news_id'];
	$newss->delete_event($id);
?>