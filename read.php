<?php 
	
	include('connection.php');

	$sql = "SELECT * FROM user";

	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "email : ";
			echo $row['email'];
			echo "password : ";
			echo $row['password'];
			echo "<br />";
		}
	}

?>