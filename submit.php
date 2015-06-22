<?php
	include_once("connect_to_database.php");
	session_start();
	if(!(isset($_SESSION['teamid']) ))
	{
		header("Location: login.php");
	}
	$teamid = $_SESSION["teamid"];
	$quesid = mysql_real_escape_string($_GET["quesid"]);
	$answer = mysql_real_escape_string($_POST["answer"]);
	$query = "SELECT * FROM user_response where teamid = $teamid and questionid = $quesid ";
	$result = mysql_query($query) or die(mysql_error());
	$nrows = mysql_num_rows($result);
	
	if($nrows==0)
	{
		$query = "INSERT INTO user_response (teamid,questionid,answer) VALUES($teamid,$quesid,'$answer')";
		$result = mysql_query($query) or die(mysql_error());
	}
	else
	{
		$query ="UPDATE user_response SET answer = '$answer' WHERE teamid = $teamid and questionid = $quesid";
		$result = mysql_query($query) or die(mysql_error());
	}
	header('Location: home.php');
	
?>