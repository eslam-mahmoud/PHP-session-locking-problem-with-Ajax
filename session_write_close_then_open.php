<?php 
	session_start();
	echo 'Session ID: ' . session_id().'------------';
	$_SESSION['foo1'] = 'bar1';
	session_write_close();

	session_start();
	echo 'Session ID: ' . session_id().'------------';
	$_SESSION['foo2'] = 'bar2';
	session_write_close();

	sleep(5);
	print_r($_SESSION);
?>