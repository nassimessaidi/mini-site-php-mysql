<?php
	

	session_start();

	// we destroy the session then redirect the user to the login.php page
	session_destroy();
	header("location:login.php");