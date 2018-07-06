jQuery(document).ready(function() {
$("#phone").intlTelInput();
$('.navbar-toggle').click(function(){
	$('#navbar-collapse-1').removeClass('collapse');
	$('#navbar-collapse-1').toggleClass('fixed');
})
});
