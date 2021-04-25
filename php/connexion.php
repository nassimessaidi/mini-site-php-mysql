<?php

$dbServername = "localhost"; // nom du serveur dans notre cas localhost
$dbUsername = "root"; 	// nom d'utilisateur de mysql ou phpmyadmin dans notre cas
$dbPassword = "";		// le mot de passe de mysql par défaut dans XAMPP est vide
$dbName = "testing";	// le nom de la base de données

$connect=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// juste une petite instruction if pour vérifier s'il y a une erreur lors de la connexion à la base de données
if(!$connect){
	die("Connection failed: ".mysqli_connect_error());
}