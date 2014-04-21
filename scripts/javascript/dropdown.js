function DropDown(element)
{
	this.element = element;
	this.items = this.element.find("ul > li");
	this.defineEvents();
}

DropDown.prototype = 
{
	defineEvents: function()
	{
		this.element.click(function()
		{
			$(this).toggleClass("expanded");
		});
	}
}

$(document).ready(function()
{
	$("#textNav").find(".dropdown").each(function()
	{
		new DropDown($(this));
	});

	$(document).click(function(event)
	{
		var target = $(event.target);

		if (!$(target).is(".dropdown") && !$(target).is(".dropdown span"))
		{
			$("#textNav").find(".dropdown").each(function()
			{
				$(this).removeClass("expanded");
			});
		}
		else
		{
			// Hide the ones that aren't the target
			$(".dropdown").each(function()
			{
				if (!$(this).is(target) && !$(this).find("span").is(target))
				{
					$(this).removeClass("expanded");
				}
			});
		}
	});
});