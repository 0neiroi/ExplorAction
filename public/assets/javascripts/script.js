$(document).ready(function () {

	// Show the content linked to the menu section clicked
	$("nav ul li").click(function() {
		var index = $("nav ul li").index(this) + 1;
		$(".menu_active").removeClass("menu_active");
		$(".infos_active").removeClass("infos_active");
		$("nav ul li:nth-child("+index+")").addClass("menu_active");
		$("#infos_content span:nth-child("+index+")").addClass("infos_active");
	})


	// Clear the search section
	$("#searchclear").click(function() {
		$("#metiers").val('');
	});


	// Timeout after the animation
	//setTimeout(function() {
	//	parallax[page].bottom();
	//}, 10000);

});