$(document).ready(function()
{
	$("#header-image").find(".expanding-image-wrapper").append("<img src='images/Robot Arm Mk2/manufacture/assembly.jpg'>");
	$("#machined-image").find(".expanding-image-wrapper").append("<img src='images/Robot Arm Mk2/manufacture/one side.jpg'>");


	var imageDiv = $("#design-slideshow .slideshow-image");
	var descriptionDiv = $("#design-slideshow .slideshow-description");

	imageDiv.append("<img src='images/Robot Arm Mk2/design/v2 s1.jpg'>");
	descriptionDiv.append("<div><h3>Arm Side 1</h3> \
		<p>You can see the cut that allows the arm to rotate to 35 degrees.</p></div>");

	imageDiv.append("<img src='images/Robot Arm Mk2/design/v2 s2.jpg'>");
	descriptionDiv.append("<div><h3>Arm Side 2</h3></div>");

	imageDiv.append("<img src='images/Robot Arm Mk2/design/adapter bracket.jpg'>");
	descriptionDiv.append("<div><h3>Adapter Bracket</h3> \
		<p>This part fits on the square end of the arm segment.</p></div>");

	imageDiv.append("<img src='images/Robot Arm Mk2/design/transition bracket.jpg'>");
	descriptionDiv.append("<div><h3>Transition Bracket</h3> \
		<p>This part attaches the adapter bracket to the stepper mount.</p></div>");

	imageDiv.append("<img src='images/Robot Arm Mk2/design/stepper mount.jpg'>");
	descriptionDiv.append("<div><h3>Stepper Mount</h3> \
		<p>The stepper motor attaches to the opposite side and the shaft comes through \
		the large hole.</p></div>");

	imageDiv.append("<img src='images/Robot Arm Mk2/design/arm assem.jpg'>");
	descriptionDiv.append("<div><h3>Arm Assembly</h3> \
		<p>All the parts put together.</p></div>");

	$("#design-slideshow .slideshow-image").ready(function()
	{
		prepareSlideshow($("#design-slideshow"));
	});

	imageDiv = $("#manufacture-slideshow .slideshow-image");
	descriptionDiv = $("#manufacture-slideshow .slideshow-description");

	imageDiv.append("<img src='images/Robot Arm Mk2/manufacture/machining.jpg'>");
	descriptionDiv.append("<div><h3>Machining in Progress</h3> \
		<p>This CNC mill was at TechShop.</p></div>");

	imageDiv.append("<img src='images/Robot Arm Mk2/manufacture/roughing pass.jpg'>");
	descriptionDiv.append("<div><h3>Roughing Pass</h3><p>The 3D toolpaths left a lot to be desired</p></div>");

	$("#manufacture-slideshow .slideshow-image").ready(function()
	{
		prepareSlideshow($("#manufacture-slideshow"));
	});
});