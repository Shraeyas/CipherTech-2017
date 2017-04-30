<?php

	include('connect.php');
	echo '<br><h3><br>The Fourth Question Part One</h1><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a1 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a1'] == $_POST['ans'])
		{
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q41=5, timestamp=-".time()." WHERE user = '$user'";
			
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
    <label for="exampleTextarea"><br><img src = "p1.jpg"> <br><br><h3>What is his <b>Problem</b>?<br></h3> </label><br>
    <input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>