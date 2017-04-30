<?php

	setcookie("teamname", "", time() - 60*60*24);
	header("Location: index.php");

?>