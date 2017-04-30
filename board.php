<?php

	include('connect.php');
	
	if($_COOKIE['teamname']!='')
	{
		;
	}
			
	else
		echo '<div class="alert alert-danger" role="alert">
		  <strong>You are not yet Logged in!</strong>
			</div>';
				
	
echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<!-- 3rd March 2017 3:07P.M. -->
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Leaderboard | CipherTech</title>
	<link rel="shortcut icon" type="image/x-icon" href="back.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
	
  
	
	<style>
	
	html 
		{
			
			 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	
		body
		{
			background:none;
		}

		
		.container
		{
			font-weight:bold;
			margin-top: 5vh;
			width:85vw;
			color:black;
		}
		
		#forms
		{
			margin-top: 2vh;
		}
		
		h1
		{
			font-size: 5vh;
		}
		
		.nav-link
		{
			color:white;
		}
		
		#tabsh
		{
			font-size:1.65vw;
			margin-top:4vh;
		}
		
		#tabsd
		{
			font-size:1.5vw;
			
		}
			
		
	</style>
	
	
		';
		
		include('header.php');
		
		echo '
				
		<div class="container">
			<h1><strong>Leaderboard</strong></h1>
			
			<table class="table" id="tabsh">
				  <thead class="thead-inverse">
					<tr>
					  <th>#</th>
					  <th>Team</th>
					  <th>Score</th>
					  <th>Time</th>
					  
					</tr>
				  </thead>
				  <tbody>
			
			';


	
	
	$query = "SELECT * FROM ques";

	$row = mysqli_query($link, $query);
	
	while($result = mysqli_fetch_array($row))
	{
		$total = $result['q11'] + $result['q12'] + $result['q21'] + $result['q22'] + $result['q31'] + $result['q32'] + $result['q41'] + $result['q42'] + $result['q51'] + $result['q52'] + $result['q61'] + $result['q62'];
		
		$user = $result['user'];
		
		$query = "UPDATE ques SET score = '$total' WHERE user = '$user'";
		mysqli_query($link, $query);
	}
	
	
	$query = "SELECT * FROM ques ORDER BY score DESC";
	$row = mysqli_query($link, $query);
	
	$sn=0;
	//$shr = mysqli_fetch_array($row);
	while($result = mysqli_fetch_array($row))
	{
		//print_r($result);
		
		$name = $result['user'];
		$score = $result['score'];
		$time = $result['time'];
		
		$sn++;
		
		if($sn == 1)
		echo "
				
				  <tr id='tabsd' style='color:black; background:Green'>
					
					  <td>".($sn)."</td>
					  <td>".($name)."</td>
					  
					  <td>".$score."</td>
					  
					  <td>".$time."</td>
					 
					</tr>";
		
		else			
		echo "
				
				  <tr id='tabsd'>
					
					  <td>".($sn)."</td>
					  <td>".($name)."</td>
					  
					  <td>".$score."</td>
					  
					  <td>".$time."</td>
					 
					</tr>";
						
	}
	
	echo "</tbody>
		</table>
			
		</body>
		</html>";


?>