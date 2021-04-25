<?php 

// the javascript script redirects to this page just if the users really wants to delete their account
// we take the value of the GET method that the javascript code sent us and use del_id which in our case represents the username
// note: we take the username just because it is unique but if it was not unique we can take the primary key of our database which is the username
require 'connexion.php';
$get=$_GET['del_id'];
$getusername="$get";
$sql="DELETE FROM utilisateurs WHERE login='$getusername'";
$query=mysqli_query($connect,$sql) or die($sql);
header("location:register.php");
exit();