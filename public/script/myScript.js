function moveLogin() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
}

function checkLogin() {
	if($.trim($("#navbarDropdownMenuLink").text()) != "Login/Sign Up") {
		console.log($.trim($("#navbarDropdownMenuLink").text()) + ":::Login/Sign Up");
		$("#toLogin").css("visibility", "hidden");
	}
}

$(window).resize(function() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});

var modal = document.getElementById('signUpModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}