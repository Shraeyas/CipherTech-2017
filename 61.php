<?php

	include('connect.php');
	echo '<h3><br>The Sixth Question Part One</h3><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a1 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a1'] == $_POST['ans'])
		{
			
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q61=5, timestamp=-".time()." WHERE user = '$user'";
			
			if(mysqli_query($link, $query))
			{
				echo '<style>form{visibility:hidden;}</style><div class="alert alert-success" role="alert">
				<strong>Correct Answer! <a href="game.php?'.$q.'" ><button>Click Here</button></a> to go to part 2 </strong>
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
    <label for="exampleTextarea"><br><h5>Let your toe up and head be down!!!!!!!</h5><br><h3><b>edocecruosfodneehtniseilterceseht</b></h3><br></label><br>
    <input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>