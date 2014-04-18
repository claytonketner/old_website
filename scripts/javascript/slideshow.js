$("document").ready(function()
{
	var descriptionControlAnimating = false;

	//
	// Show/hide description panel
	//
	$(".slideshow-description-control").click(function()
	{
		var parent = $(this).parent();
		if (descriptionControlAnimating) { return; } // If animating, don't do anything

		if ($(parent).find(".slideshow-description").hasClass("expanded"))
		{
			descriptionControlAnimating = true;
			setDescriptionControlText(parent, "Show Info");
			$(parent).find(".slideshow-description").slideUp("slow", "easeOutBounce", function()
				{
					descriptionControlAnimating = false;
					$(parent).find(".slideshow-description").toggleClass("expanded");
				}
			);
			$(parent).find(".slideshow-description-control").css("border-width", "0"); // Remove the cosmetic highlight
		}
		else 
		{
			descriptionControlAnimating = true;
			setDescriptionControlText(parent, "Hide Info");
			$(parent).find(".slideshow-description").slideDown("slow", "easeOutElastic", function()
				{
					descriptionControlAnimating = false;
					$(parent).find(".slideshow-description").toggleClass("expanded");
				}
			);
			$(parent).find(".slideshow-description-control").css("border-width", "1px 0 0 0"); // Give the top edge a cosmetic highlight
		}
	});

	function setDescriptionControlText(container, newText)
	{
		$(container).find(".slideshow-description-control").html(newText);
	}


	//
	// Picture changing
	//
	function doSlideShow(container, currentPictureIndex)
	{
		var pictureWidth = calculateWidth(container); // Get the numbers from the width css property

		$(container).find(".slideshow-image img").each(function(imgIndex)
		{
			$(this).stop();
			$(this).show();
			$(this).animate(
			{
				left: pictureWidth*(imgIndex-currentPictureIndex)
			}, 400,
			function()
			{
				if (currentPictureIndex == imgIndex)
				{
					// Set the description and title div to be visible and hide all others
					$(container).parent().find(".slideshow-description div").each(function(textIndex)
					{
						if (imgIndex == textIndex)
							$(this).show();
						else
							$(this).hide();
					});
				}
			}
			);
		});
	}

	// Next picture
	$(".slideshow-control-wrapper.next").click(function()
	{
		currentPictureIndex = calculateCurrentPictureIndex($(this).parent());

		if (currentPictureIndex == countPictures($(this).parent())-1)
		{
			// Go back to start image
			currentPictureIndex = 0;
			doSlideShow($(this).parent(), currentPictureIndex);
		}
		else
		{
			// Animate to the left (decreasing left)
			currentPictureIndex++;
			doSlideShow($(this).parent(), currentPictureIndex);
		}
	});

	// Previous picture
	$(".slideshow-control-wrapper.previous").click(function()
	{
		currentPictureIndex = calculateCurrentPictureIndex($(this).parent());

		if (currentPictureIndex == 0)
		{
			// Go to last image
			currentPictureIndex = countPictures($(this).parent())-1;
			doSlideShow($(this).parent(), currentPictureIndex);
		}
		else
		{
			// Animate to the right (increasing left)
			currentPictureIndex--;
			doSlideShow($(this).parent(), currentPictureIndex);
		}
	});
});

function prepareSlideshow(container)
{
	var currentPictureIndex = 0;
	var numberOfPictures = countPictures(container);
	var pictureWidth = 500; //calculateWidth(container);
	var imageAreaHeight = calculateHeight(container);
	descriptionControlAnimating = false;

	//
	// Line images up for viewing and center vertically if necessary
	//
	$(container).find(".slideshow-image img").each(function(index)
	{
		$(this).load(function()
		{
			// Align vertically
			var currentImageHeight = $(this).height();

			if (currentImageHeight != imageAreaHeight)
			{
				$(this).css("top", (imageAreaHeight - currentImageHeight)/2 + "px");
			}
		});
	});

	//
	// Show the first image's title/description
	//
	$(container).find(".slideshow-description div").first().show();
}

function countPictures(container)
{
	var numberOfPictures = 0;

	$(container).find(".slideshow-image img").each(function()
	{
		numberOfPictures = numberOfPictures + 1;
	});

	return numberOfPictures;
}

function calculateHeight(container)
{
	return $(container).find(".slideshow-image").height()
}

function calculateWidth(container)
{
	return $(container).find(".slideshow-image").width()
}

function calculateCurrentPictureIndex(container)
{
	var numberOfPictures = countPictures(container);
	var firstImageLeft = parseInt($(container).find(".slideshow-image img").first().css("left"), 10);

	// Make sure it's not animating
	while (firstImageLeft % calculateWidth(container) != 0)
	{
		$(container).delay(100);
	}

	return -1*firstImageLeft/calculateWidth(container);
}