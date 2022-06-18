<?php 
	include "connection.php";

	$email = $_POST['email'];
	$password = $_POST['password'];


	$sql ="INSERT INTO user(email,password) VALUES ('$email','$password')";

	if(mysqli_query($con,$sql))
	{
		echo "success";
	}
	else
	{
		echo "error";
	}

?>