var hiddenHeight = 100;
var prepareSpeed = 1500;
var showHideSpeed = 400;

$(document).ready(function()
{
	$(".expanding-image-wrapper").ready(function()
	{
		prepareImages();
	});

	$(".expanding-image-wrapper").mouseover(function()
	{
		showImage($(this));
	});

	$(".expanding-image-wrapper").mouseout(function()
	{
		hideImage($(this));
	});

	$(".expanding-image-wrapper").click(function() // For mobile
	{
		if ($(this).hasClass("hiding"))
			showImage($(this));
		else
			hideImage($(this));
	})
});

function prepareImages()
{
	$(".expanding-image-wrapper").each(function(index)
	{
		$(this).find("img").load(function()
		{
			var imgHeight = $(this).height();
			$(this).parent().css("height", hiddenHeight + "px");
			$(this).animate({ top: -imgHeight/2 }, prepareSpeed);
		});
	});
}

function stopAnimation(obj)
{
	$(obj).stop();
	$(obj).find("img").stop();
}

function showImage(obj)
{
	stopAnimation($(obj));
	var imgHeight = $(obj).find("img").height();
	$(obj).find("img").animate({ top: 0 }, showHideSpeed);
	$(obj).animate({ height: imgHeight }, showHideSpeed);
	$(obj).removeClass("hiding");
}

function hideImage(obj)
{
	stopAnimation($(obj));
	var imgHeight = $(obj).find("img").height();
	$(obj).find("img").animate({ top: -imgHeight/2 }, showHideSpeed);
	$(obj).animate({ height: hiddenHeight }, showHideSpeed);
	$(obj).addClass("hiding");
}

