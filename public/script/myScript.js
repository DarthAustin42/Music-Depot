$(window).resize(function() {
	var viewportWidth = $(window).window();
	if (viewportWidth < 600) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});