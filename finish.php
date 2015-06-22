<?php
	
	session_start();
	session_destroy();
	echo "	
			<html>
			<head>
				<title>
					Thank you
				</title>
			</head>
			<style>
				h2
				{
					color: #96279C;
				}
				div.ty
				{
					position : absolute;
					margin-left : 100px;
					margin-top : 100px;

				}
				div.ps
				{
					position : absolute;
					margin-left : 900px;
					margin-top : 500px;
					color : #B8EB4B;
				}
				div.scb
				{
					position : absolute;
					margin-left : 900px;
					margin-top : 530px;
					color : #B8EB4B;
				}
			</style>
			<body bgcolor='#000000'>
				<div class='ty'>
					<h2>
						Thank you for participating in Google it out.
						<br>Winners will be contacted for  prize distribution later by event co-ordinator.
					</h2>
				</div>
				<div class='ps'>
					Problem setter : Yash Kaushal & Sagar Baver 
				</div>
				<div class='scb'>
					Site created by : Sourabh Suman & Rohit Nandani
			 	</div>
			</body>
			</html>
";
?>