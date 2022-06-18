<?php
	session_start();
	echo "Welcome to the home page <br>";
	echo "Your Email is : ".$_SESSION['email'];
	echo "<br />";
	echo "Your Pass is : ".$_SESSION['password'];

?>