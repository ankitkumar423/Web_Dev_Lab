<?php 
include 'connection.php';

$sql = "CREATE DATABASE exam";

if(mysqli_query($con,$sql)){
	echo "Database Craeted";
}
else
{
	echo "error";
}

?>