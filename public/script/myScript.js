function moveLogin() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
		alert("hi");
	}
}

$(window).resize(function() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});