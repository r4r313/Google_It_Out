<?php

	include_once("connect_to_database.php");

	$username = mysql_real_escape_string($_POST["username"]);
	$teamname = mysql_real_escape_string($_POST["teamname"]);
	$contact = mysql_real_escape_string($_POST["contact"]);
	$email = mysql_real_escape_string($_POST["email"]);
	$roll = mysql_real_escape_string($_POST["roll"]);
	
	$query = "INSERT INTO registration (username,teamname,contact,email,roll) VALUES ('$username','$teamname','$contact','$email','$roll') ";
	
	$result = mysql_query($query) or die(mysql_error());


	$query ="SELECT * FROM registration where username= '$username' ";

	$result = mysql_query($query) or die(mysql_error());

	$id=0;
	
	while($row = mysql_fetch_array($result))
	{
		extract($row);
		$id = $teamid;
	}

	session_start();

	$_SESSION["teamid"] = $id;

	//echo 'successful registartion';

	header('Location: rules.php');


?>
