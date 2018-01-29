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

$('#newPassword2').keyup(function(){
  var passA = $('input[name=newPassword]').val();
  var passB = $('input[name=newPassword2]').val();

  if(passA === passB) {
  	$('#signUpButton').removeProp('disabled');
  }
  else {
  	$('#signUpButton').prop('disabled', true);
  }
});

$(document).ready(function() {
	$('#signUpButton').prop('disabled', true);
})