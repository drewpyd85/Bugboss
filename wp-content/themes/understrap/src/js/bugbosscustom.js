jQuery(document).ready(function(){
    
//    jQuery(".bug-tile").mouseenter (function() {
//        
//        $(this).css("border-bottom", "1px solid black");
//        
//    });
//    
//    jQuery(".bug-tile").mouseleave (function() {
//        
//        $(this).css("border-bottom", "none");
//        
//    });
  
    jQuery( ".bug-tile" ).on( "click", function() {
        
        jQuery('.bug-tile').not(this).removeClass('tile-active');
        jQuery(this).addClass('tile-active');
        
    });
    
    jQuery('#roach-button').click(function() {
        jQuery('#termite-slide').hide();
        jQuery('#rodent-slide').hide();
        jQuery('#roach-slide').show();
    });
    
    jQuery('#termite-button').click(function() {
        jQuery('#roach-slide').hide();
        jQuery('#rodent-slide').hide();
        jQuery('#termite-slide').show();
    });
    
    jQuery('#rodent-button').click(function() {
        jQuery('#termite-slide').hide();
        jQuery('#roach-slide').hide();
        jQuery('#rodent-slide').show();
    });
    
    $('.testimonials').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 2000,
        pauseOnFocus: false,
        touchMove: false,
    });
})

(function ($) {
  $(document).ready(function(){
    
	// hide .navbar first
	$(".sticky-nav").hide();
	
	// fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 100) {
				$('.sticky-nav').fadeIn();
			} else {
				$('.sticky-nav').fadeOut();
			}
		});

	
	});

});
  }(jQuery));