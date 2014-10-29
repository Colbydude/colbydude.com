$(document).ready(function()
{
	// Global tooltips.
	$(".buttons a").tooltip();

	// Switch to dark color scheme.
	$(".choose-dark").click(function (e)
	{
		e.preventDefault();
		$.post("app/scripts/change-style.php", { "STYLE": "STYLE", "VALUE": "dark" });
		$("body").removeClass("light");
		$("body").addClass("dark");
		style = "dark";
	});
	// Switch to light color scheme.
	$(".choose-light").click(function (e)
	{
		e.preventDefault();
		$.post("app/scripts/change-style.php", { "STYLE": "STYLE", "VALUE": "light" });
		$("body").removeClass("dark");
		$("body").addClass("light");
		style = "light";
	});

	// Handle contact modal.
	$("#contact-button").click(function(e)
	{
		e.preventDefault();

		$("#contact-modal").modal();
	});
});