<?php
	include('connect.php');
	include('header.php');
	
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$query = "SELECT user FROM users WHERE user = '".mysqli_real_escape_string($link, $user)."'";
		//$query = "SELECT user FROM users WHERE user = '$user'";
	
		if(mysqli_num_rows(mysqli_query($link, $query)) == 0)
		{
			$query = "INSERT INTO users SET user = '".mysqli_real_escape_string($link, $user)."'";
			mysqli_query($link, $query);
			include('admin.php');
			
			
			setcookie("teamname", $user, time() + 60*60*24);
			header("Location: index.php");
		}
		
		else
		{
			echo "<h3><b><br>Username exists, try a different one.<br></b></h3>";
		}
	}
	
				

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CipherTech | SignUp</title>

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
			margin-top:5vh;
		}
		
	
	</style>
	
  </head>
  <body>
   

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
	<div class="container">
				
				<div class="container1" style="float:right;width:30vw;">
				
				
				
				<form method="post">
				  <div class="form-group">
					
					<label for="example-text-input" class="col-2 col-form-label"><h1><strong>SignUp</strong></h1></label>
					  <div class="col-10">
						<input class="form-control" name="user" type="text" value="" id="example-text-input" style="margin-top:5vh;width:300px" placeholder="Enter Team Name">
						<button type="submit" name="login" class="btn btn-primary" style="margin-top:2.5vh">SignUp</button>
					  </div>
					
				  </div>
				  
	
				
				</div>
				
				<div class="container2" style="float:left;width:30vw;">
				
				
				<h3><b>Instructions</b></h3><br>
				<ul>
				
				
				<li>The Time Limit for this contest is 1.5 hours.</li>
				<li>Write your TeamName below to LogIn. </li>
				<li>Every Question has 2 parts, first one is to decipher the code, and the second is about it's technical part.</li>
				<li>You may ask for a paper and a pen for doing rough calculations, but use of any other electronic gadget (eg, Mobile Phones) is strictly prohibited.</li>
				<li>You can use any programming language to write codes (if required).</li>
				<li>Taking help from the Internet is strictly not allowed.</li>
				<li>Anyone found indulging in any inappropriate activity will be disqualified.</li>
				
				<li>The Answer to every question will be <b>textual <b>(lower case letters only)</b></b> or may contain <b>numbers</b>, it will <b>not</b> contain any <b>spaces</b> or <b>special characters</b></li>
				
				</ul>
				</div>
  </div>
  
  </body>
</html>