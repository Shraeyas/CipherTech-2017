<?php

	include('connect.php');
	echo '<br><h3><br>The Fourth Question Part Two</h1><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a3 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a3'] == $_POST['ans'])
		{
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q42=12, timestamp=-".time()." WHERE user = '$user'";
			
			if(mysqli_query($link, $query))
			{				
				echo '<style>form{visibility:hidden;}</style><div class="alert alert-success" role="alert">
				<strong>Correct Answer! You Solved the Fourth Question. Congrats<a href="game.php?5" ><button>Click Here</button></a> to go to next question</strong></div>';
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

<style>

	#phpf
	{
		visibility:hidden;
	}

</style>


<div id="jscript">


	<div class="form-group">
		<label for="exampleTextarea"><h5>What is a Computer's Enemy?</h5></label><br>
		<input id="prac" type="text" placeholder="Write your answer here" style="width:70vh">
	</div>
	<button  onClick ="check()" class="btn btn-primary">Submit</button>


</div>

<script>

		function check()
		{
			var an = document.getElementById("prac").value;
			
			if(an!='virus')
			alert('Wrong Answer');
		
			else
			{
				document.getElementById("jscript").style.visibility = "hidden";
				document.getElementById("phpf").style.visibility = "visible";
			}
		}

</script>

<div id ="phpf">
<form method="post">
  <div class="form-group">
    
	
	<div class="alert alert-success" role="alert"><strong>Perfect! But it's not that easy :p</strong></div>
	
	<h6><b>Now Answer the following <b>Multiple Choice Questions</b> to get a score for this part.</b><br><br>
	You need to answer <b>all</b> the questions correctly to score<br><b>PS : </b>If your answer is <b>a, b, c and d respectively</b> then input <b>abcd</b> in the submit box.</h6>
	
	<br>
	
	<p>
	
	<b>Qa. What is “Trend Micro”?</b><br>

	a. It is anti-virus software<br>
	b. It is just a program<br>
	c. It is virus program<br>
	d. None of the above<br><br>
	
	</p>
	
	<p>
	
	<b>Qd. How does a Le-Hard virus come into existence?</b><br>

	a. Hardware<br>
	b. Software<br>
	c. FRIDAY 13<br>
	d. Command.Com<br>
	<br>
	</p>
	
	<p>
	
	
    <b>Qa. What is the first boot sector virus?</b><br>

	a. Brain<br>
	b. Mind<br>
	c. ELK cloner<br>
	d. None of the above.<br>
	<br>
	
	</p>
	
	<p>
	
		<b>Qc. The difference between a virus and a self-replicating program which is like a virus is that rather than creating copies of itself on only one system it propagate through computer network. What is the self replicating program called?</b><br>

		a. Keylogger<br>
		b. Cracker<br>
		c. Worm<br>
		d. All of the above<br>
	<br>
	
	</p>
	
    <input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<small>Your Previous Response : iamsurroundedbyenemy</small>
</div>

