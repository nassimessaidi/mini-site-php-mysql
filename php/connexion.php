<?php

$dbServername = "localhost"; // server name in our case localhost
$dbUsername = "root"; 	// username of mysql or phpmyadmin in our case root
$dbPassword = "";		// default mysql password in XAMPP is empty
$dbName = "testing";	// the name of the database

$connect=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// just a little if statement to check if there is an error while connecting to the database
if(!$connect){
	die("Connection failed: ".mysqli_connect_error());
}