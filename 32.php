<?php

	include('connect.php');
	echo '<h3><br>The Third Question Part Two</h3><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a2 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a2'] == $_POST['ans'])
		{
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q32=12, timestamp=-".time()." WHERE user = '$user'";
			
			if(mysqli_query($link, $query))
			{				
				echo '<style>form{visibility:hidden;}</style><div class="alert alert-success" role="alert">
				<strong>Correct Answer! You Solved the Third Question. Congrats<a href="game.php?4" ><button>Click Here</button></a> to go to next question</strong>
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
    <label for="exampleTextarea"><h6>The graph below shows some important statistical data regarding the <b>decline</b> and <b>increase</b> of a company's market shares. The Name of the company is alphabet.</h6>
	<br>
	
	<h5>Figure out what you can infer from the <b>depths</b> and <b>rises</b> on the graph.</h5>
	
	<br><b>PS : Remember, the key which opens the lock also closes it. :)</b>
	
	</label><br>
	
	
	
<div class='shr' style='width:150vh;margin-top:10vh'>
		<h3><b>Graph</b></h3>
			<script src='Chart.min.js'></script>
			<canvas id='myChart'>

			<script>

			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
			  type: 'line',
			  data: {
				labels: ['Old', ,,, ,'New'],
				datasets: [{
				  label: 'Alphabet',
				  data: [2,12,4,12,2],
				  backgroundColor: 'rgba(153,255,51,0.4)'
				}]
			  }
			});



			</script>
			</canvas>
</div>
		
		
	


	
	
    <input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  
  
		

  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<small>Your Previous Response : itwasmywife</small>