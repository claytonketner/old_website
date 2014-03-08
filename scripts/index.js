function getName()
{
	var name = prompt("Welcome!\n\nWhat is your name?");
	var newText;

	if (name != null)
	{
		newText = "Welcome to my website, " + name + "! Thanks for visiting!";
		$("#welcome-message").html(newText);
	}
}

$(document).ready(function()
{
	$(".bird-button").click(function()
	{
		$(".bird-button").hide();
		$("#bird-description").html("Quit messing with my birds, jerk!");
	})
})