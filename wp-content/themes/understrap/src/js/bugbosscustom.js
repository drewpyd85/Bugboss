jQuery(document).ready(function(){
  
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