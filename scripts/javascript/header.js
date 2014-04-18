var navBarWrapperOffset = 0;

$(document).ready(function()
{
	navBarWrapperOffset = $("#navBar-wrapper").offset().top - 5;

	// Set the current page's link to have the class "currentPage"
	var currentPage = location.pathname.substring(1);

	if (currentPage == "")
	{
		currentPage = "index.php";
	}
	$("#textNav .navItem a").each(function()
	{
		if ($(this).attr("href") == currentPage)
		{
			$(this).toggleClass("currentPage");
		}
	});
});

function resizeNavBar()
{
	if ($("#navBar-wrapper").hasClass("fixed"))
	{
		var currentPageWidth = $(document).width();
		var leftMargin = -450;
		var navWidth = 900;
		if (currentPageWidth < 900)
		{
			navWidth = currentPageWidth;
			leftMargin = -1*currentPageWidth/2;
		}
		if (currentPageWidth < $("#navBar-wrapper").css("min-width"))
		{
			navWidth = $("#navBar-wrapper").css("min-width");
			leftMargin = -1*$("#navBar-wrapper").css("min-width")/2;
		}

		$("#navBar-wrapper").animate({ opacity: 0.85, width: navWidth, left: "50%", marginLeft: leftMargin, borderRadius: 10, borderTopLeftRadius: 0, borderTopRightRadius: 0 }, "slow");
	}
	else
	{
		$("#navBar-wrapper").animate({ opacity: 1, width: "100%", left: 0, marginLeft: "0", borderRadius: 0 }, "slow");
	}
}

// $(document).scroll(function()
// {
// 	// Fix or unfix the navigation bar depending on scroll amount

// 	if (!$("#navBar-wrapper").hasClass("fixed") && ( $(document).scrollTop() >= $("#navBar-wrapper").offset().top ))
// 	{
// 		$("#navBar-wrapper").toggleClass("fixed");
// 		$("#all-content-wrapper").css("top", navBarWrapperOffset/2 - 5 + "px");

// 		resizeNavBar();
// 	}

// 	if ($("#navBar-wrapper").hasClass("fixed") && ( $(document).scrollTop() < navBarWrapperOffset ))
// 	{
// 		$("#navBar-wrapper").toggleClass("fixed");
// 		$("#all-content-wrapper").css("top", "0");

// 		resizeNavBar();
// 	}
// });

// $(window).resize(function()
// {
// 	// If the nav bar is fixed, adjust its width according to the width of the screen
// 	if ($("#navBar-wrapper").hasClass("fixed"))
// 	{
// 		var currentPageWidth = $(document).width();
// 		var navWidth = 900;
// 		if (currentPageWidth < 900)
// 		{
// 			navWidth = currentPageWidth;
// 		}
// 		if (currentPageWidth < $("#navBar-wrapper").css("min-width"))
// 		{
// 			navWidth = $("#navBar-wrapper").css("min-width");
// 		}

// 		$("#navBar-wrapper").animate({ width: navWidth, left: "50%", marginLeft: -1*navWidth/2}, 0);
// 	}
// });