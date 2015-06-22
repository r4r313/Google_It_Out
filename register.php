<?php

include_once("utility.php");

echo"<html>
<head>
	<title>
		Registration Portal
	</title>
	<style>
		div.reg-title
		{
			position: absolute;
			margin-left: 200px;
			margin-top: 40px;
			font-size: 24px;
			font-family: monospace;
		}
		div.reg-master
		{
			position: absolute;
			margin-left: 300px;
			margin-top: 100px;
		}
		div.reg-general
		{
			margin-top: 30px;
			height: 40px;
		}
		input.reg-input-general
		{
			width: 300px;
			height: 40px;
			border-radius: 10px;
			font-size: 20px;
			font-family: monospace;
			font-weight: 300;
			box-shadow: none;
			background-color: #FFFFFF;
		}
		div.reg-general
		{
			margin-top: 15px;
			height: 40px;
		}
		input.reg-input-general-button
		{
			width: 90px;
			height: 50px;
			margin-left: 210px;
			border-radius: 30px;
			background-color: #01777D;
			color: #FFFFFF;
			font-size: 22;
		}
	</style>
</head>
<body bgcolor='#33F5D1'>
	<div class='reg-title'>
		<h2>
			Registration:
		</h2>
	</div>
	<div class='reg-master'>
		<form action='insert_db.php' method='POST'>

			<div class='reg-general'>
				<input type='text' name='username' placeholder='Name' 
					class='reg-input-general' required/>
			</div>
			<div class='reg-general'>
				<input type='text' name='teamname' placeholder='Team Name' 
					class='reg-input-general' required/>
			</div>
			<div class='reg-general'>
				<input type='text' name='contact' placeholder='Contact no.'
					class='reg-input-general' required/>
			</div>
			<div class='reg-general'>
				<input type='Email' name='email' placeholder='Email-id'
					class='reg-input-general' required/>
			</div>
			<div class='reg-general'>
				<input type='text' name='roll' placeholder='Roll-No(If bit)'
					class='reg-input-general'/>
			</div>
			<div class='reg-general'>
							<input class='reg-input-general-button' 
								type='submit' value='Submit'/>
			</div>
		</form>
	</div>
</body>
</html>";
?>