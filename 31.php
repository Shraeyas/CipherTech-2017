<?php

	include('connect.php');
	echo '<br><h3><br>The Third Question Part One</h3><hr style="margin-top:5vh;height:2px;border:none;color:#333;background-color:#333;" />';

	if(isset($_POST['submit']))
	{
		$query = "SELECT a1 FROM ans WHERE qname = '$q'";
		$row = mysqli_query($link, $query);
		
		$result = mysqli_fetch_array($row);
		
		if($result['a1'] == $_POST['ans'])
		{
			
			$user = $_COOKIE['teamname'];
			$query = "UPDATE ques SET q31=5, timestamp=-".time()." WHERE user = '$user'";
			
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
    <label for="exampleTextarea">There was a death on Treebark Ln. The victim was identified as Mark Oswalt, who recently was married. The police went to the crime scene and they reported the death as a suicide.
<br><br>
Later that day, after the police left, a private detective, hired by the victim's friend who thought it was a murder, searched the crime scene and found a note the police missed.
<br>
It read,<br><br> 

<h3><br><b>"4,3: 8,1:_: 9,1: 2,1: 7,4:_: 6,1:9,3:_: 9,1: 4,3: 3,3: 3,2: "</b> </h3><br><br>

The detective took out his cell phone and started dialing the police to tell them about his findings. Once the detective opened the phone to dial, he immediately screamed out, "I SOLVED IT!"

<br>Who was the murderer and how did the detective find out?</label><br><br>
    <input type="text" name="ans" placeholder="Write your answer here" style="width:70vh">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>