<?php 
	include 'connection.php';

	$sql = "CREATE TABLE user (email varchar(50),password varchar(30))";

	if(mysqli_query($con,$sql))
	{
		echo 'success';
	}
	else
	{
		echo 'error';
	}


?>