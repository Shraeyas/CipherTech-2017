<?php

	include('connect.php');
	
	
	$user = $_COOKIE['teamname'];
	
	$query = "SELECT * FROM ques WHERE user = '$user'";
	$row = mysqli_query($link, $query);
	
	$result = mysqli_fetch_array($row);
	
	if($result['q'.$q.'1'] == 0)
	{
		include($q.'1.php');
	}
	
	else if($result['q'.$q.'2'] == 0)
	{
		include($q.'2.php');
	}
	
	else
	{
		include('done.php');
	}

?>