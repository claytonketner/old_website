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
			<h2 id="content-header">Hammer Microphone Stand</h2> 
			<span id="date">March, 2014</span><br>
			<a href="#results">Skip to result</a>

			<h3>The Job</h3>
			<p>This is my first commissioned work. A friend of mine is friends with the singer of a band called The 
			Hammers. He wanted a sledgehammer shaped microphone holder as a prop to use on stage.</p>
			<p>My friend, Greg, and I worked on it together. I did the CAD work and the 3D printing, while my friend 
			modified a typical microphone stand to work with the design.</p>

			<h3>Design</h3>
			<p>Here's the microphone he wanted us to design around:</p>

			<div> 
				<?php $width=80; $src="images/hammer stand/microphone.jpg"; include "features/expanding-image.php" ?> 
			</div>

			<p>Here's some of the key design decisions that went into this project:</p>
			<ul>
				<li>Using threaded inserts in the wooden handle to allow us to use bolts to attach the head.</li>
				<li>Using two bolts instead of one. One bolt would require it to be very tight to prevent the head
				from spinning, which might have cracked the plastic.</li>
				<li>Printing it in two halves. This made for more manageable print times.</li>
				<li>Using the design of the sledgehammer head to my advantage by putting screw holes in to attach the
				two halves together.</li>
				<li>Using a removable microphone holder. This allows the head to accept many different shapes and sizes
				of microphone.</li>
				<li>Having nothing be permanent and everything be easily replacable. I didn't know what abuse this
				thing would be withstanding, so avoiding glue and making parts modular helped avoid long redesigns or
				reprints.</li>
			</ul>

			<h3>Final Design</h3>
			<p>Here's what the final design looks like:</p>

			<div> 
				<?php $width=80; $src="images/hammer stand/hammer cad.png"; include "features/expanding-image.php" ?> 
			</div>

			<p>You can see the dovetail at the bottom that accepts the microphone holder, which is interchangable.
			Here's what that looks like:</p>

			<div> 
				<?php $width=80; $src="images/hammer stand/holder cad.png"; include "features/expanding-image.php" ?> 
			</div>

			<h3>Prototyping</h3>
			<p>I printed the microphone holder first, since it's relatively small and quick to print. After a few
			design iterations, we ended up with this:</p>

			<div id="holder-slideshow" style="text-align: center">
				<?php
					$width = "500";
					$images = array(
						"images/hammer stand/holder 1.JPG",
						"images/hammer stand/holder 2.JPG"
					);
					include "features/slideshow.php";
				?>
			</div>

			<p>I couldn't find any actual information about the taper of the microphone, but I made a few measurements
			with some calipers, and was able to make a pretty good fit that grips the microphone tightly. Additionally, 
			the holder is thin enough to bend and conform slightly to the shape of the microphone.</p>

			<h3>Production</h3>
			<p>Each half of the microphone took over four hours to print. Being able to print the head in two halves
			was a huge help here. Here's the microphone in one half, waiting for the other half to be printed. You can
			see the part of the stand that holds the handle. It uses a pre-made guitar stand clamp, because the
			microphone is meant to be able to be carried around just like a sledgehammer.</p>

			<div> 
				<?php $width=80; $src="images/hammer stand/half hammer.JPG"; include "features/expanding-image.php" ?> 
			</div>

			<h3 id="results">Final Product</h3>
			<p>Overall, the man who commissioned the work, Nick, was very happy with the result. The day we finished,
			his band actually played at my fraternity's founder's day party. Here are some pictures:</p>

			<div id="party-slideshow" style="text-align: center">
				<?php
					$width = "500";
					$images = array(
						"images/hammer stand/finished 1.JPG",
						"images/hammer stand/finished 2.JPG",
						"images/hammer stand/finished joust.JPG",
						"images/hammer stand/finished obstacle.JPG"
					);
					include "features/slideshow.php";
				?>
			</div>

			<h3>Difficulties</h3>
			<p>Overall, the hammer turned out great. It is very sturdy, and once it's painted, it will look even 
			better. However, there were a few hiccups:</p>

			<ul>
				<li>The holes in the top that the screws pass through are very large and visually disruptive. It would
				be best to cap them somehow, but can't think of a great solution.</li>
				<li>Working the clearance for the removable microphone holder was a big pain. Even though I designed
				in what I thought was enough clearance, I had to do a lot of sanding and scraping to get it to slide
				into the dovetail slot in the head.</li>
			</ul>

		</div>
		<div class="after-float"></div>
	</div>
</div>

<?php include "common/footer.php" ?>

</body>
</html>