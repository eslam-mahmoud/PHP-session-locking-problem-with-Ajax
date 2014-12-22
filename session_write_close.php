<?php 
	session_start();

	session_write_close();

	sleep(5);

	echo 'Session ID: ' . session_id();
?>