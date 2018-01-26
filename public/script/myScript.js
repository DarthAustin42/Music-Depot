$(window).resize(function() {
	var viewportWidth = $(window).width();
	console.log(viewportWidth);
	if (viewport.is('<=md')) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});