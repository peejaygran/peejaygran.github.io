jQuery(document).ready(function(){
	// Smooth scroll
	jQuery('.ia-smooth-scroll').find('a').on('click', function(event){
		// Make sure this.hash has a value before overriding default behavior
		if(this.hash !== ""){
			// Prevent default anchor click behavior
			event.preventDefault();
			// Store hash
			var hash = this.hash;
			
			// Smooth scroll animation
			jQuery('html, body').animate({
				scrollTop: jQuery(hash).offset().top
			}, 800, function(){
				// Add hash to URL when done scroll
				// window.location.hash = hash;
			});
		}
	});
	
	// Change active class on scroll
	jQuery(document).on('scroll', function() {
	    if(jQuery(this).scrollTop()>=jQuery('#pj-1st-section').position().top){
			jQuery('.ia-smooth-scroll').find('li').removeClass('active');
	        jQuery('.ia-smooth-scroll').find('a[href="#pj-1st-section"]').parent().addClass('active');
	    }
		if(jQuery(this).scrollTop()>=jQuery('#pj-2nd-section').position().top){
	        jQuery('.ia-smooth-scroll').find('li').removeClass('active');
	        jQuery('.ia-smooth-scroll').find('a[href="#pj-2nd-section"]').parent().addClass('active');
	    }
		if(jQuery(this).scrollTop()>=jQuery('#pj-3rd-section').position().top){
	        jQuery('.ia-smooth-scroll').find('li').removeClass('active');
	        jQuery('.ia-smooth-scroll').find('a[href="#pj-3rd-section"]').parent().addClass('active');
	    }
		if(jQuery(this).scrollTop()>=jQuery('#pj-4th-section').position().top){
	        jQuery('.ia-smooth-scroll').find('li').removeClass('active');
	        jQuery('.ia-smooth-scroll').find('a[href="#pj-4th-section"]').parent().addClass('active');
	    }
		if(jQuery(this).scrollTop()>=jQuery('#pj-5th-section').position().top){
	        jQuery('.ia-smooth-scroll').find('li').removeClass('active');
	        jQuery('.ia-smooth-scroll').find('a[href="#pj-5th-section"]').parent().addClass('active');
	    }
	});
});