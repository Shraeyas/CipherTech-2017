<?php

	include('connect.php');
	
	$query = "SELECT * FROM users";
	$res = mysqli_query($link, $query);
	
	while($row = mysqli_fetch_array($res))
	{
		$user = $row['user'];
		$query = "SELECT * FROM ques WHERE user = '$user'";
		$chk = mysqli_query($link, $query);
		
		if(mysqli_num_rows($chk) == 0)
		{
			$query = "INSERT INTO ques (user) VALUES ('$user')";
			mysqli_query($link, $query);
		}
	}
	
	echo "<h3><b><br>Successfully Added. ^_^<br></b></h3>";
?>