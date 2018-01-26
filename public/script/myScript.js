$(window).resize(function() {
	var viewportWidth = $(window).width();
	if (viewportWidth < 600) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});