$(document).ready(function()
{
	// Global tooltips.
	$(".buttons a").tooltip();

	var style = "dark";
	// Switch to dark color scheme.
	$(".choose-dark").click(function (e)
	{
		e.preventDefault();
		//$.post("../includes/change-style.php", { "STYLE": "STYLE", "VALUE": "style.css" });
		$("body").removeClass("light");
		$("body").addClass("dark");
		style = "dark";
	});
	// Switch to light color scheme.
	$(".choose-light").click(function (e)
	{
		e.preventDefault();
		//$.post("../includes/change-style.php", { "STYLE": "STYLE", "VALUE": "style-inverse.css" });
		$("body").removeClass("dark");
		$("body").addClass("light");
		style = "light";
	});
});