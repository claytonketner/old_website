$(document).ready(function()
{
	var imageDiv = $("#modeling-slideshow .slideshow-image");
	var descriptionDiv = $("#modeling-slideshow .slideshow-description");

	imageDiv.append("<img src='images/cad/modeling/funnel.png'>");
	descriptionDiv.append("<div><h3>Oil Funnel</h3></div>");

	imageDiv.append("<img src='images/cad/modeling/funnel detail.png'>");
	descriptionDiv.append("<div><h3>Funnel Detail</h3><p>Ribs added for air backflow</p></div>");

	imageDiv.append("<img src='images/cad/modeling/pump thing.png'>");
	descriptionDiv.append("<div><h3>Pump housing</h3></div>");

	imageDiv.append("<img src='images/cad/modeling/pump thing section.png'>");
	descriptionDiv.append("<div><h3>Pump Housing Section View</h3></div>");

	$("#modeling-slideshow .slideshow-image").ready(function()
	{
		prepareSlideshow($("#modeling-slideshow"));
	});


	imageDiv = $("#simulation-slideshow .slideshow-image");
	descriptionDiv = $("#simulation-slideshow .slideshow-description");

	imageDiv.append("<img src='images/cad/simulation/bracket stress.png'>");
	descriptionDiv.append("<div><h3>Stress Analysis</h3><p>Analysis of a bracket using a shell 2-D simplification to \
		reduce computation time.</p></div>");

	imageDiv.append("<img src='images/cad/simulation/spider stress.png'>");
	descriptionDiv.append("<div><h3>Stress Analysis</h3><p>Torsion on a spider bracket.</p></div>");

	imageDiv.append("<img src='images/cad/simulation/freq analysis 1.png'>");
	descriptionDiv.append("<div><h3>Frequency Analysis</h3></div>");

	imageDiv.append("<img src='images/cad/simulation/freq analysis 2.png'>");
	descriptionDiv.append("<div><h3>Frequency Analysis</h3></div>");

	imageDiv.append("<img src='images/cad/simulation/pressure vessel.png'>");
	descriptionDiv.append("<div><h3>Pressure Vessel Analysis</h3><p>Using a axi-symmetric 2-D simplification to \
		increase accuracy and reduce computation time.</p></div>");

	$("#simulation-slideshow .slideshow-image").ready(function()
	{
		prepareSlideshow($("#simulation-slideshow"));
	});
});