<?php

	include('connect.php');
	echo '<h3><br>The Second Question Part Two</h3><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a2 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a2'] == $_POST['ans'])
		{
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q22=12, timestamp=-".time()." WHERE user = '$user'";
			
			if(mysqli_query($link, $query))
			{				
				echo '<style>form{visibility:hidden;}</style><div class="alert alert-success" role="alert">
				<strong>Correct Answer! You Solved the Second Question. Congrats<a href="game.php?3" ><button>Click Here</button></a> to go to next question</strong>
				</div>';
			}
		}
		
		else
		{
			echo '<div class="alert alert-danger" role="alert">
		  <strong>Wrong Answer!</strong>
			</div>';
		}
	}
	
?>


<form method="post">
  
  <div class="form-group">
    <label for="exampleTextarea"><h5>I am on your hand,<br>I am in front of you <br>I am in your pocket<br><br>My state is like a substance which is constituted by <br></h5><h3><b>hijklmno</b></h3><h5><br><br>What am I?</h5></label><br>
    <input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<small>Your Previous Response : 32degreefahrenheitatwhichwaterfreezes</small>