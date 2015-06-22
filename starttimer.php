<?php
	
	session_start();
	if(!(isset($_SESSION['teamid']) ))
	{
		header("Location: login.php");
	}
	if(!(isset($_SESSION['TIMER'])))
	{
		$_SESSION['TIMER'] = (time() + 3600000);

	}
	header("Location: home.php");

?>