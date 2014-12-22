<?php 
	session_start();

	session_regenerate_id();

	sleep(5);

	echo 'Session ID: ' . session_id();
?>