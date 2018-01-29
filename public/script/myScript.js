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

$('#newPassword, #newPassword2').on('keyup', function() {
	if($('#newPassword').val() == $('#newPassword2').val()) {
		$('#message').html('Matching').css('color', 'green');
	} else {
		$('#message').html('Not Matching').css('color', 'red');
	}
})

$(window).resize(function() {
	var viewportWidth = $(window).width();
	if (viewportWidth <= 992) {
		$("#loginNavID").removeClass("navbar-toggler-right");
	}
});



function checkPass() {
  var passA = $('input[name=newPassword]').val();
  var passB = $('input[name=newPassword2]').val();

  console.log(passA + "     ::     " + passB);
  if(passA === passB) {
  	$('#signUpButton').removeAttr('disabled');
  }
  else {
  	$('#signUpButton').attr('disabled', true);
  }
};

$(document).ready(function() {
	console.log("hi");
	$('#signUpButton').attr('disabled', true);
	console.log("hIII");
})