<?php

	$link = mysqli_connect("localhost", "root", "", "game");
	if(mysqli_connect_error())
	{
		die("<marquee>You hurt me always! Goodbye! Forever!</marquee>");
	}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Parakram 2k17</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<style>
	
		#pg
		{
			font-weight:bold;
			color:white;
			
		}
		
		.container
		{
			width:80vw;
			margin-top:5vh;
			margin-bottom:5vh;
		}
		
		.container1
		{
			float:left;
			width:35vw;
		}
		
		.container2
		{
			float:right;
			width:35vw;
		}
		
	
	</style>
	
  </head>
  <body>
   

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
				<div class="container1">
					
					<?php include("player.php")?>
				
				</div>
  
				<div class="container2">
					
					
					<form method="post">
					  <div class="col-10">
					  <h1><strong>Submit Your Bid</strong></h1>
						<input class="form-control" name="bid" type="text" value="" id="example-text-input" style="margin-top:5vh" placeholder="Enter your bid">
						<small id="emailHelp" class="form-text text-muted">Your bid should be greater than the current rate of the player.</small>
  
						<button type="submit" name="submit" style="margin-top:2.5vh" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				
				</div>
  
				
				</div>
  
  </body>
</html>