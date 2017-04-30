<?php

	include('connect.php');
	echo '<br><h3><br>The Fifth Question Part Two</h1><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a2 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a2'] == $_POST['ans'])
		{
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q52=12, timestamp=-".time()." WHERE user = '$user'";
			
			if(mysqli_query($link, $query))
			{				
				echo '<style>form{visibility:hidden;}</style><div class="alert alert-success" role="alert">
				<strong>Correct Answer! You Solved the fifth Question. Congrats<a href="game.php?6" ><button>Click Here</button></a> to go to next question</strong></div>';
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
    <label for="exampleTextarea"><h5><br><b>You know what you have to do!</b><h5></label><small></small><br><br>
	
	<iframe src="prachi.txt" width="1000px" height="1000px" frameborder="0" style="border: 1px solid #c0c0c0; overflow-x: hidden;"></iframe><p></p>
    <br><input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<small>Your Previous Response : youcannotshakehandswithaclenchedfist</small>