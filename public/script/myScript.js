$(window).resize(function() {
	var viewportWidth = $(window).width();
	console.log(viewportWidth);
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});