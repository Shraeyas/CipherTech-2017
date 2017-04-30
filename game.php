<?php

	include('connect.php');
	
	$currentURL = $_SERVER["REQUEST_URI"];
	$per = explode('?',$currentURL);
	$q = $per[1];
	
	
	{
		
	if($_COOKIE['teamname']!='')
	{
		
			
			if(isset($_POST['q1']))
			{
				header("Location: game.php?1");
			}
			
			
			if(isset($_POST['q2']))
			{
				header("Location: game.php?2");
			}
			
			
			if(isset($_POST['q3']))
			{
				header("Location: game.php?3");
			}
			
			
			if(isset($_POST['q4']))
			{
				header("Location: game.php?4");
			}
			
			if(isset($_POST['q5']))
			{
				header("Location: game.php?5");
			}
			
			
			if(isset($_POST['q6']))
			{
				header("Location: game.php?6");
			}
			
			
	}	
			
			
	else
		header("Location: index.php");
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
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
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

			<?php include('header.php'); ?>
			
				</div></div>
				<div class='container'>
				<p style="margin-left:64vh"><b>Questions</b></p>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="margin-left:50vh;width:50vw">
					<form method="post">
					  <div class="btn-group mr-2" role="group" aria-label="First group">
						<button type="submit" name="q1" class="btn btn-secondary">1</button>
						<button type="submit" name="q2" class="btn btn-secondary">2</button>
						<button type="submit" name="q3" class="btn btn-secondary">3</button>
						<button type="submit" name="q4" class="btn btn-secondary">4</button>
						<button type="submit" name="q5" class="btn btn-secondary">5</button>
						<button type="submit" name="q6" class="btn btn-secondary">6</button>
					  </div>
					</form>
					
					
				</div>
				
				<?php include("deploy.php"); ?>
				
  
  </body>
</html>
