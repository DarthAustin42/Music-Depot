$(window).resize(function() {
	var viewportWidth = $(window).width();
	console.log(viewportWidth);
	if (viewportWidth < 600) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});