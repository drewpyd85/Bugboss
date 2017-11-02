<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the home page.
 *
 * @package understrap
 */

get_header();



$container = get_theme_mod( 'understrap_container_type' );
?>

<?php include 'inc/home-hero.php'; ?>

<div class="container-fluid">
    
    <div class="row slider-buttons">
        
        <div id="roach-btn" class="col text-center bug-tile">Roaches</div>
        <div id="termite-btn" class="col text-center bug-tile">Termites</div>
        <div id="ant-btn" class="col text-center bug-tile">Ants</div>
        <div id="rodent-btn" class="col text-center bug-tile">Rodents</div>
        
    </div>
    
</div>

<div class="container">
    
    <div class="row my-5 roach-slide">
        
        <div class="col-md-6">
            
            <img src="http://www.fillmurray.com/1100/300" alt="">
            
        </div>
        
        <div class="col-md-6">
            
            <p class="text-center">ROACH ipsum dolor sit amet, consectetur adipisicing elit. Voluptate praesentium tenetur distinctio omnis. Animi, amet, dolores. Porro repellendus omnis rerum, laboriosam tempora nisi, minima labore rem, enim dolorem alias deserunt!</p>
            
        </div>
        
    </div>
    
    <div class="row my-5 termite-slide">
        
        <div class="col-md-6">
            
            <img src="http://www.fillmurray.com/1200/300" alt="">
            
        </div>
        
        <div class="col-md-6">
            
            <p class="text-center">TERMITE ipsum dolor sit amet, consectetur adipisicing elit. Voluptate praesentium tenetur distinctio omnis. Animi, amet, dolores. Porro repellendus omnis rerum, laboriosam tempora nisi, minima labore rem, enim dolorem alias deserunt!</p>
            
        </div>
        
    </div>
    
</div>


<?php get_footer(); ?>
