<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "common/head.php" ?>
</head>

<body>

<?php include "common/header.php" ?>

<div id="all-content-wrapper">
	<div id="content-wrapper" class="content-sized">
		<div id="content" class="sidebar-or-content">
			<h2 id="content-header">Robotic Arm Mk2</h2> 
			<span id="date">Summer 2012</span><br>
			<a href="#results">Skip to result</a>

			<p>This is the second version of a robotic arm I made over the summer of 2012. I worked on it on and off over two months.</p>

			<div id="header-image"> 
				<?php $width = "80"; $src="images/Robot Arm Mk2/manufacture/assembly.jpg"; include "features/expanding-image.php"; ?> 
			</div>

			<h3>Idea</h3>
			<p>After the first version, I decided to switch to using stepper motors due to their better resolution. Hobby servos are easy to use
			but their smallest rotation amount is still too large - especially when the movement is amplified by a long lever arm.
			I also found some worm gears online that helped increase the rotation resolution even further, and also allowed me to mount the motors
			perpendicular to the arm's rotation axis. This allowed for a symmetrical design, ensuring the arm would be balanced.

			<hr><h3>Design</h3>
			<p>At this point, I had learned how to use a CNC mill, which gave me a lot more freedom in my design.</p>

			<p>This design is repeatable and symmetric - meaning that you could create an arm of any length with these same parts. 
			The first time I created the assembly in SolidWorks, I realized that the arm segments couldn't bend to less than 90 degrees.
			To fix this, I added some cuts which allow the arms to rotate down to 35 degrees.</p>

			<p>Here's a slideshow of my SolidWorks models:</p>
			<div id="design-slideshow" style="text-align: center">
				<?php
					$width = "500";
					$images = array(
						"images/Robot Arm Mk2/design/v2 s1.jpg",
						"images/Robot Arm Mk2/design/v2 s2.jpg",
						"images/Robot Arm Mk2/design/adapter bracket.jpg",
						"images/Robot Arm Mk2/design/transition bracket.jpg",
						"images/Robot Arm Mk2/design/stepper mount.jpg",
						"images/Robot Arm Mk2/design/arm assem.jpg"
					);
					include "features/slideshow.php";
				?>
			</div>

			<hr><h3>Manufacture</h3>
			<p>My first design I cut out of a cutting board and I tried using 3D toolpaths, which turned out to be super slow and inaccurate. 
			The machine would also cut away material that would have supported the work during later cuts. Furthermore, my first design wasn't great, 
			and the arms weren't stiff enough. There were also sections of the arm that were paper thin - which could have been caused by a number of things:</p>
			<ul>
				<li>Router gantry not tracking level to the router bed - causing the part to be thinner on one side.</li>
				<li>Insufficient number/size of tabs to support the work during machining, allowing the router bit to pull the 
				work up into it and cut away more material than was intended.</li>
			</ul>

			<div id="manufacture-slideshow" style="text-align: center">
				<?php
					$width = "500";
					$images = array(
						"images/Robot Arm Mk2/manufacture/machining.jpg",
						"images/Robot Arm Mk2/manufacture/roughing pass.jpg"
					);
					include "features/slideshow.php" 
				?>
			</div>

			<p>To remedy this, I redesigned a bit and also used 2D toolpaths, which gave a much more accurate result in much less time.
			I also switched to 3/4" UHMW PE, which is stiffer than the HDPE I used before and also allowed me to make the parts thicker.</p>

			<div id="machined-image"> <?php $width = "60"; $src="images/Robot Arm Mk2/manufacture/one side.jpg"; include "features/expanding-image.php" ?> </div>

			<hr><h3>Programming</h3>
			<p>I'm using an Arduino to control the arm because it has easy low-level control and doesn't get interrupted. Since stepping the motors occurs on the order of
			a few microseconds, the Arduino's main loop consistently occurs more often, allowing for smooth movement of the arm.</p>

			<p>I wrote the driver software for the arm, which can be <a href="https://github.com/claytonketner/Arduino-stepperdriver" target="_blank">found on GitHub</a>.
			I'm using <a href="https://www.sparkfun.com/products/10267" target="_blank">SparkFun's EasyDriver</a> to drive the stepper motors, which takes care of 
			which coils in the motor to energize - all you have to do is send a direction and step signal. The driver code I wrote allows you to send a g-code-like command
			via the USB serial cable to tell the arm which angles to rotate to, among other things. This way, I can get MATLAB to perform the heavy calculations and send 
			them to the arm automatically.</p>

			<hr><h3>First Run</h3>
			
			<p>Here's a short demo showing the arm's Maiden voyage. It shows me compiling the driver code on my computer and sending it to the arduino. The arm then
			does a simple test, where the bottom segment rotates while the top segment stays vertical.</p>

			<div style="text-align: center;"><iframe width="960" height="540" src="//www.youtube.com/embed/aLx_HQSdqt0?rel=0" frameborder="0" allowfullscreen></iframe></div>

			<hr><h3 id="results">Final Result</h3>
			<p>Here's a video of the final functionality of the arm. It shows how the inverse kinematics work. The arm
			can also accept a number of g-code-like commands:</p>

			<ul>
			<li>'g111222' -- Go to the two angles specified, where 111 is the angle for the first segment, and 222 is the angle for the second segment.</li>
			<li>'s111222' -- Set the current angles of the arm segments - follows the same convention as the "go to" command.</li>
			<li>'e#' -- Enable or disable motor holding torque (# = 1 enables, # = 0 disables)</li>
			<li>'p' -- Go to parking position</li>
			</ul>

			<iframe width="960" height="540" src="//www.youtube.com/embed/vE6wKMVQNNQ?rel=0" frameborder="0" allowfullscreen></iframe>

		</div>
		<div style="clear:both;"></div>
	</div>
</div>

<?php include "common/footer.php" ?>

</body>
</html>