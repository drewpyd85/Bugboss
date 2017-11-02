$(document).ready(function(){
  
    $( ".bug-tile" ).on( "click", function() {
        
        $('.bug-tile').not(this).removeClass('tile-active');
        $(this).toggleClass('tile-active');
        
    });
    
    $('#roach-btn').click(function(){
        $(this).data('clicked', true);
    });
    
    if(jQuery('#roach-btn').data('clicked')) {
        $('.roach-slide').toggleClass('slide-hidden');
    } else {
        
    }
    
})