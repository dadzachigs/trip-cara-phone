<?php

	require_once('includes/events.php');
	

?>

<?php
	$event = new Events();
	$id= $_GET['event_id'];
	$event->delete_event($id);
?>