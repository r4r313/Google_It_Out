<?php
echo "
<html>
<head>
	<title>
			Login to Rock..
	</title>
	<style>
		div.details
		{
			position: absolute;
			margin-left: 300px;
			margin-top: 200px;
			width: 400px;
			height: 400px;
			float: left;
		}
		div.general
		{
			margin-top: 15px;
			height: 40px;
		}
		input.input-general
		{
			position  : absolute;
			margin-top : -400px;
			margin-left : 700px;
			width: 300px;
			height: 40px;
			border-radius: 10px;
			font-size: 20px;
			font-family: monospace;
			font-weight: 300;
			box-shadow: none;
			z-index:100;
		}
		input.input-general-button
		{
			width: 90px;
			height: 50px;
			margin-top : -400px;
			margin-left : 900px;
			border-radius: 30px;
			background-color: #14592E;
			color: #FFFFFF;
			font-size: 22;
			z-index:100;
		}
		img.logo-img
		{
			margin-top : -210px;
			margin-left : -310px;
			width : 1350px;
			height : 670px;
		}
		div.footer
		{
			width : 800px;
			height : 100px;
			z-index : 1000;
			position : absolute;
			margin-top : 650px;
			margin-left : 400px;
		}
	</style>
	<script>
		function authenticate (username,password) 
		{
			if(username.value.match('IET'))
			{
				if(password.value.match('Bitotsav15'))
				{
					document.getElementById('myForm').reset();
					return true;
				}
				else
				{
					document.getElementById('myForm').reset();
					return false;
				}
			}
			else
			{
				document.getElementById('myForm').reset();
				return false;
			}
		}
	</script>
	
</head>
<body bgcolor='#828EB3'>
	<div class='details'>
		<img src='Images/logo.jpg' class='logo-img'>
		
			<form  action='register.php' id='myForm' method='POST' onSubmit='return authenticate(Username,Password);'>
				<div class='general'>

					<input class='input-general' type='text' 
							placeholder='Username' name='Username' />

				</div>
				<div class='general'>

					<input class='input-general' type='password'
							placeholder='Password' name='Password'/>

				</div>
				<div class='general'>
						
					<input class='input-general-button' type='submit' 
						value='Log in'/>
						
				</div>
			</form>
		</img>
	</div>
	;"
	?>
	<div class="footer">
		<p>
		Copyright ©
		Created by Sourabh Suman and Rohit Nandani
		</p>  
		<h5>   
			CSE 2K12 Batch,BIT, Mesra.
		</h5>
	</div>
	
</body>
</html>
