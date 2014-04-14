<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "head.php" ?>
	<link rel="stylesheet" href="style/index.css">
	<script type="text/javascript" src="scripts/index.js"></script>
</head>

<body>

<?php include "header.php" ?>

<div id="all-content-wrapper">
	<div id="content-wrapper" class="content-sized">
		<div id="content" class="sidebar-or-content">
			<h2 id="content-header">At a Glance</h2>

			<div id="rocks-image"> <?php $width=100; include "expanding-image.php" ?> </div>

			<p>Hi - welcome to my website! I wrote it from scratch for my web programming class.
			Hope you like it!</p>

			<p>I am a 5th year undergraduate student at the University of Southern California studying Mechanical 
			Engineering and Computer Science. I'm quick to learn and can adapt to changing environments, and am looking 
			for smaller companies where I can utilize my wide variety of skills. I'm mostly interested in robotics, but 
			still open to other fields.</p>

			<p>Here's a summary of me:</p>

			<h3>Robotics</h3>
			<p>I'm pretty interested in robotics:</p>

			<p>I'm in the <a href="http://robotics.usc.edu/~aerialrobotics/" target="_blank">
			USC Aerial Robotics club</a>.</p>

			<div class="three-img-wrapper">
			<a href="introrobotics.php"><div class="three-img-link">
			<img class="three-img" src="images/at a glance/robotics.png">
			<div class="three-img-text">I've learned about robotics algorithms.</div>
			</div></a>
			</div>

			<div class="three-img-wrapper">
			<a href="seniorprojectrobot.php"><div class="three-img-link">
			<img class="three-img" src="images/at a glance/seniorproject.png">
			<div class="three-img-text">I built a remote control robot for my senior project class.</div>
			</div></a>
			</div>

			<div class="three-img-wrapper">
			<a href="robotarmmk2.php"><div class="three-img-link">
			<img class="three-img" src="images/Robot Arm Mk2/design/arm assem.jpg">
			<div class="three-img-text">I designed, built, and coded my own robotic arm from scratch.</div>
			</div></a>
			</div>

		</div>
		<div style="clear:both;"></div>
	</div>
</div>

<?php include "footer.php" ?>

</body>
</html>