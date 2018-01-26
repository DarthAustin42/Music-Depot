function moveLogin() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}

	if($("#toLogin").text() != "Login/Sign Up") {
		$("#toLogin").css("visibility", "hidden");
	}
}

$(window).resize(function() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});