<?php
echo "
<html>
<head>
	<title>
		Rules
	</title>
</head>
<style>
	div.rule-general
	{
		position: absolute;
		margin-left: 100px;
		margin-top: 50px;
		width: 800px;
	}
	div.rule-text
	{
		position: absolute;
		margin-left: 350px;
		margin-top: 0px;
		font-size: 40;
		font-family: cursive;
		color : #BC4564;
	}
	div.rule-description
	{
		margin-left: 120px;
		margin-top: -20px;
		font-size: 18;
	}
	h2
	{
		font-family: cursive;
		color: #AB7845;
	}
	h4
	{
		font-family: cursive;
		color: #BC4564
	}
	div.rule-button
	{
		position : absolute;
		margin-left : 300px;
		margin-top : 600px;
	}
	input.rule-input-general-button
	{
		width: 150px;
		height: 50px;
		margin-left: 210px;
		border-radius: 30px;
		background-color: #01777D;
		color: #FFFFFF;
		font-size: 22;
	}
</style>
<body bgcolor='#33F5D1'>
	<div class='rule-text'>
		Rules
	</div>
	<div class='rule-general'>
		<div class='rule-num'>	
			<h2>
				1.
			</h2>
		</div>
		<div class='rule-description'>
			<h4>
				You are allowed to use internet or mobile.But do not discuss answers with other teams.
			</h4>
		</div>
		<div class='rule-num'>	
			<h2>
				2.
			</h2>
		</div>
		<div class='rule-description'>
			<h4>
				For each question,you will get one point for its correct answer.
			</h4>
		</div>
		<div class='rule-num'>	
			<h2>
				3.</h2>
		</div>
		<div class='rule-description'>
			<h4>
				Note carefully,<br>
				give an answer in two words(not more than two or not less than two).
			</h4>
		</div>
		<div class='rule-num'>	
			<h2>
				4.
			</h2>
		</div>
		<div class='rule-description'>
			<h4>
				Don't use any special characters or digits(only use alphabets). 
			</h4>
		</div>
		<div class='rule-num'>	
			<h2>
				5.
			</h2>
		</div>
		<div class='rule-description'>
			<h4>
			Time duration for this event is 1.5 hours.
			</h4>
		</div>
	</div>
	<form action='starttimer.php'>
		<div class='rule-button'>	
				<input class='rule-input-general-button' type='submit' 
					value='Start Test'/>		
		</div>
	<form>
</body>
</html>
";
?>