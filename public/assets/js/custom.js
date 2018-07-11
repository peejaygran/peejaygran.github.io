$ = jQuery;

$(document).ready(function(){
	$('.pj-color-control').click(function(){
		if($('.pj-color-picker').css('left') === '-70px'){
			$('.pj-color-picker').css('left', '0px');
		} else {
			$('.pj-color-picker').css('left', '-70px');
		}
	});	

	$('.pj-colors .color').click(function(){
		var color = $(this).attr('pj-color');

		if(color == "blue") {
			$('#pj-theme-color').attr('href', 'assets/css/custom-blue.css');
		} else if(color == "red") {
			$('#pj-theme-color').attr('href', 'assets/css/custom-red.css');
		} else if(color == "green") {
			$('#pj-theme-color').attr('href', 'assets/css/custom-green.css');
		}
	});

	var scrollTop = 0;
	$(window).scroll(function(){
		scrollTop = $(window).scrollTop();

		if(scrollTop >= 100) {
			$('.pj-header').addClass('scrolled');
		} else if(scrollTop < 100) {
			$('.pj-header').removeClass('scrolled');
		}
	});
});
