<?php
	$link = mysqli_connect("localhost", "Username", "Password", "Database name");
	
	if(mysqli_connect_error())
	{
		die("Cannnot Connect.");
	}	
	
?>
