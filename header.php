<style>

	nav
	{
		font-weight:bold;
		font-size:15px;
		 font-family: "Comic Sans MS", "Comic Sans", cursive;
	}

</style>


<nav class="navbar navbar-toggleable-md navbar-inverse" style="background-color:#4A148C;font-weight:bold;color:white">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <script src="jquery.min.js"></script>
  <a class="navbar-brand" href="#">
    <img src="back.jpg" width="50" height="50" class="d-inline-block align-top" alt="">
    <span style="font-size:5vh">CipherTech<!--C1P5eRTE8H--></span>
  </a>

  <div class="auto navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
		<a class="nav-link" href="index.php"><button type="button" class="btn btn-outline-warning" style="font-weight:bold;border-color:#4A148C;color:white;">LogIn</button></a>
      </li>
	  <li class="nav-item active">
		<a class="nav-link" href="prachi.php"><button type="button" class="btn btn-outline-warning" style="font-weight:bold;border-color:#4A148C;color:white;">SignUp</button></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="board.php"><button type="button" class="btn btn-outline-success" style="font-weight:bold;border-color:#4A148C;color:white;">Leaderboard</button></a>
      </li>
	
	<li class="nav-item active">
        <a class="nav-link" href="game.php?1"><button type="button" class="btn btn-outline-primary" style="font-weight:bold;border-color:#4A148C;color:white;">Play</button></a>
      </li>
	  			
		
	
    </ul>
	
	<?php
	
		if($_COOKIE['teamname']!='')
		{
			
			echo '<form class="form-inline my-2 my-lg-0">
			  <span style="color:yellow">Welcome '.$_COOKIE["teamname"].' </span><a href="logout.php"><button type="button" class="btn btn-secondary" style="font-weight:bold;color:black;margin-left:5vh">LogOut!</button></a>
			</form>';
		   
		}
	
	?>
	
	<!--
        <form class="form-inline my-2 my-lg-0" style="margin-left:3vh">Time Left : <span id = "pg"> </span> sec
		
		<script>
			
			var auto_refresh = setInterval(
			   function ()
			   {
					$('#pg').load('timer.php');
			   }, 1000);		
		</script>

		</form>
    -->
  </div>
</nav>