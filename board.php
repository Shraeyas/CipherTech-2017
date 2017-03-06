<?php

	$link = mysqli_connect("localhost", "root", "", "game");
	if(mysqli_connect_error())
	{
		die("<marquee>You hurt me always! Goodbye! Forever!</marquee>");
	}
	
	
echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<!-- 3rd March 2017 3:07P.M. -->
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Leaderboard | Databread</title>
	<link rel="shortcut icon" type="image/x-icon" href="back.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
	
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
	
	
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" id="pg">
				  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  
				  <a href="index.html"><img id="hungry" class="img-responsive2" src=""></a>
				  <a class="navbar-brand" href="#"><div style="font-size=2.5vh;"><strong>Parakram 2k17</strong></div></a>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					
					  
					  <form class="form-inline my-2 my-lg-0" style="float:right;">
					  
							<a class="nav-link" href="game.php" style="color:white"><strong>Play!</strong></a>
							<a class="nav-link" href="board.php" style="color:white"><strong>LeaderBoard</strong></a>
						
					  </form>
					<!--<form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="text" placeholder="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>-->
				  </div>
				  
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
					  </li>
					  </ul>
						<a class="nav-link" href="about.php" style="color:white"> <strong>About </strong><span class="sr-only">(current)</span></a>
					  
					  
				  </div>
				  
				</nav>
				
		<div class="container">
			<h1><strong>Leaderboard</strong></h1>
			
			<table class="table" id="tabsh">
				  <thead class="thead-inverse">
					<tr>
					  <th>#</th>
					  <th>Team</th>
					  <th>Balance</th>
					  <th>Score</th>
					  
					</tr>
				  </thead>
				  <tbody>
			
			';


	
	
	$GLOBALS['query'] = "SELECT * FROM score ORDER by star DESC LIMIT 28";

	$row = mysqli_query($link, $query);
		
	$sn=0;
	//$shr = mysqli_fetch_array($row);
	while($result = mysqli_fetch_array($row))
	{
		//print_r($result);
		
		$name = $result['name'];
		$balance = $result['balance'];
		$star = $result['star'];
		
		$sn++;
		
		if($sn == 1)
		echo "
				
				  <tr id='tabsd' style='color:black; background:Green'>
					
					  <td>".($sn)."</td>
					  <td>".($name)."</td>
					  
					  <td>".$balance."</td>
					  
					  <td>".$star."</td>
					 
					</tr>";
		
		else			
		echo "
				
				  <tr id='tabsd'>
					
					  <td>".($sn)."</td>
					  <td>".($name)."</td>
					  
					  <td>".$balance."</td>
					  
					  <td>".$star."</td>
					 
					</tr>";
						
	}
	
	echo "</tbody>
		</table>
			
		</body>
		</html>";


?>