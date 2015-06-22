<?php 
	
	include_once("connect_to_database.php");
	include_once("utility.php");
	session_start();
	if(!(isset($_SESSION['teamid']) ))
	{
		header("Location: login.php");
	}
	$teamid = $_SESSION["teamid"];
?>
<html>
<head>
	<title>
		Google it out.
	</title>
	
</head>
<style>
		
		.numbers 
		{
			text-align: center; 
			font-family: 'Arial', sans-serif;
			font-size:25px;
			color: #FFFFFF;       
		}

		.title 
		{       
			text-align: center; 
			font-family: Arial; 
			font-size: 20px;
			font-weight: 600;
			color: #C51F1F;
		}

		#table 
		{
			margin-left:auto; 
			margin-right:auto;
			height: 48px;
			border-style: none;
			/*background-color: transparent;*/
			z-index:100;   
		}

		#table td
		{
			padding:5px;
		}
		h1
		{
			font-family: cursive;
			color: #AB7845;
			font-size: 30;
		}
		a
		{
			text-decoration: none;
		}
		h3
		{
			font-size: 19;
		}
		div.home-add-question
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 300px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question1
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 100px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question5
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 100px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question6
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 140px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question9
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 100px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question10
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 200px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question12
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 150px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question13
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 150px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-add-question15
		{
			margin-left: 100px;
			margin-top: 50px;
			width: 750px;
			height: 150px;
			background-color: #FFFFFF;
			border-radius: 10px;
		}
		div.home-ques-num
		{
			float: left;
			margin-top: -1px;
			margin-left: -1px;
			width: 50px;
			height: 100px;
		}
		div.home-ques-text
		{
			margin-left: 50px;
			margin-top: -95px;
			float: left;
			width: 698px;
			height: auto;
		}
		div.home-header
		{
			margin-left: 300px;
		}
		div.home-right-side
		{

			position: fixed;
			height: 600px;
			width: 350px;
			border: 1px solid white;
			margin-left: 950px;
			margin-top: 10px;
		}
		div.home-ans
		{
			margin-left: 100px;
			margin-top: 20px;
			width: 750px;
			height: 30px;
		}
		div.class-timer
		{
			border: 3px solid yellow;
			background-color: white;
			color: red;
		}
		input.home-ans-text
		{
			margin-left: 100px;
			border-radius: 5px;
			margin-top: 25px;
			height: 35px;
			width: 450px;
			font-size:20;
		}
		input.home-ans-button
		{
			margin-left: 220px;
			margin-top: -30px;
			height: 30px;
			width: 80px;
			border-radius: 8px;
		}
		img.home-images
		{
			margin-left: 12px;
			margin-top: 10px;
			height: 50px;
			width: 50px;
			border : 1px solid red;
		}
		div.timer-details
		{
			position: absolute;
			position: fixed;
			margin-left: 950px;
			margin-top: -100px;
		}
		input.home-submit-button
		{
			width: 90px;
			height: 50px;
			margin-top:50px;
			margin-left: 50px;
			border-radius: 30px;
			background-color: #7AD6A2;
			color: #1D2BCC;
			font-size: 22;
		}
		img.general-details-image
		{
			float: left;
		}
		</style>


<body bgcolor='#000000'>
		<br>
		<div class='home-header'>
			<h1>
				Google it out !!!
			</h1>
		</div>
		<br>
		<br>
		<br>
		<div class='timer-details'>
				<table id='table'>
					<tr>
						<td align='center' colspan='6'><div class='numbers' id='count2' style='padding: 5px 0 0 0; '></div></td>
					</tr>
					<tr id='spacer1'>
						<td align='center' ><div class='numbers' ></div></td>
						<td align='center' ><div class='numbers' id='dday'></div></td>
						<td align='center' ><div class='numbers' id='dhour'></div></td>
						<td align='center' ><div class='numbers' id='dmin'></div></td>
						<td align='center' ><div class='numbers' id='dsec'></div></td>
						<td align='center' ><div class='numbers' ></div></td>
					</tr>
					<tr id='spacer2'>
						<td align='center' ><div class='title' ></div></td>
						<td align='center' ><div class='title' id='days'>Days</div></td>
						<td align='center' ><div class='title' id='hours'>Hours</div></td>
						<td align='center' ><div class='title' id='minutes'>Minutes</div></td>
						<td align='center' ><div class='title' id='seconds'>Seconds</div></td>
						<td align='center' ><div class='title' ></div></td>
					</tr>
				</table>
		</div>

		<div class='home-right-side'>

			<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
			<script type='text/javascript' src='timer.js'></script>
			<script> window.onload = function(){countdown(year,month,day,hour,minute);}; </script>
			<?php
				$attempted = get_attempted($teamid);
				$quesid = 0;
				
				for($quesid=1;$quesid<=15;$quesid = $quesid+1)
				{

					$goid='p';
					if(in_array($quesid,$attempted))
					{
						$goid=$goid.$quesid;
						$quesid = $quesid.'_1'.'.jpg';
						
						echo"
							<a href='#$goid'>
							<img class='home-images' src='Images/$quesid'></img>
							</a>
						";
					}
					else
					{
						$goid=$goid.$quesid;
						$quesid = $quesid.'.jpg';
						echo"
							<a href='#$goid'>
							<img class='home-images' src='Images/$quesid'></img>
							</a>
						";
					}
				}
			?>
			<div class='home-submit-button-div'>
				<form action='finish.php'>
					<input class='home-submit-button' type='submit' 
						value='Finish'/>
				</form>
			</div>
		</div>

		<br>

		<div class='home-add-question1' id='p1'>
			<div class='home-ques-num'>	
				<h2>
					1.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					It was very harsh time for him when the prestigious fighter was regarded a public enemy and arrested on a lone dark night. This threw his life out of equilibrium.
				</h3>
			</div>
		</div>

			<form action='submit.php?quesid=1' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>


		<div class='home-add-question' id='p2'>
			<div class='home-ques-num'>	
				<h2>
					2.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/que2.png' width='350' height='250'>
					</img>
					This pioneer changed the way things used to work in his field.
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=2' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>


		<div class='home-add-question' id='p3'>
			<div class='home-ques-num'>	
				<h2>
					3.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/que3.jpg' width='550' height='250'>
					</img>
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=3' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>
		

		<div class='home-add-question' id='p4'>
			<div class='home-ques-num'>	
				<h2>
					4.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/ques4.gif' width='550' height='250'>
					</img>
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=4' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question5' id='p5'>
			<div class='home-ques-num'>	
				<h2>
					5.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					The gay man he writes about fallen stars and lost dreams Gods of the new world.
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=5' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>
	

		<div class='home-add-question6' id='p6'>
			<div class='home-ques-num'>	
				<h2>
					6.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					Are you afraid of the wild ? Well I ain't , so I am going for the worst case scenario . I take challenges and weigh the chances of man against the worst case , and discovery has made it possible for me to continue on.</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=6' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question' id='p7'>
			<div class='home-ques-num'>	
				<h2>
					7.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/que7.png' width='550' height='250'>
					</img>
				</h3>
			</div>
		</div>
				
			<form action='submit.php?quesid=7' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question' id='p8'>
			<div class='home-ques-num'>	
				<h2>
					8.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/que8.png' width='350' height='250'>
					</img>
					The IPL is going on and we just could not leave that cricket topic behind.
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=8' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>
		
		<div class='home-add-question9' id='p9'>
			<div class='home-ques-num'>	
				<h2>
					9.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					"sleeplessness" followed a "souvenir" further gaining "prestige" leading to a "beginning".</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=9' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question10' id='p10'>
			<div class='home-ques-num'>	
				<h2>
					10.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					Intelligent Gmail now marks mails as important of its own accord. Besides the several reasonable reasons it gives when it does this, there is also the very quirky 'Important according to our X sauce'. The Ministry of X can be accessed by dialling a number we get when typing out X with T9 on in the now almost obsolete candybars.  The parent of gmail too can be accessed by typing out _________.com following the same pattern. Blank?</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=10' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question' id='p11'>
			<div class='home-ques-num'>	
				<h2>
					11.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/que11a.jpg' width='150' height='250'>
					</img>
					<img class='general-details-image' src='Images/que11.jpg' width='150' height='250'>
					</img>
					<img class='general-details-image' src='Images/que11c.jpg' width='150' height='250'>
					</img>
					Connect:
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=11' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question12' id='p12'>
			<div class='home-ques-num'>	
				<h2>
					12.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					What if not just one of those Bertie Bott flavour beans, but Derek too, tasted of earwax? This is not a very common form of this condition though. The most common is association of certain colors with certain alphabets/numbers. What if you always saw red on seeing A, or yellow on seeing 4? What is this condition, involving such overlapping union of senses, called? 
					</div>
		</div>
		
			<form action='submit.php?quesid=12' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question13' id='p13'>
			<div class='home-ques-num'>	
				<h2>
					13.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					Most people associate movement, dancing, and jumping around absolute essentials in a live performance. A whole new genre sprang up from musicians who stayed relatively still during their live performances. They in general, have a detached, introspective aura and typically sing looking down. What is the genre called</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=13' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question' id='p14'>
			<div class='home-ques-num'>	
				<h2>
					14.
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					<img class='general-details-image' src='Images/que14.jpg' width='350' height='250'>
					</img>
					Here is an American equivalent of the above: 
					The president America loved to hate was described as being a _______  by the end of his regime, just the way Rust Cohle is called the same thing when people try to explain away his wackiness. Blank?

				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=14' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		<div class='home-add-question15' id='p15'>
			<div class='home-ques-num'>	
				<h2>
					15.(*)
				</h2>
			</div>
			<div class='home-ques-text'>
				<h3>
					I won the event ,but the runner-up took all the limelight with a certain scowling look.Who am I?
				</h3>
			</div>
		</div>
		
			<form action='submit.php?quesid=15' method='POST'>
				<input type='text' name='answer' class='home-ans-text' placeholder='Write an answer'/>
				<input type='submit' class='home-ans-button' value='submit' />
			</form>

		

		
</body>
</html>
