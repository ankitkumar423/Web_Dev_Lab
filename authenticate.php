<?php 
	include 'connection.php';

	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM user where email = '$email' and password = '$password' ";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) > 0)
	{
		session_start();

		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		header('location:home.php');
	}
	else
		echo "error";

?>