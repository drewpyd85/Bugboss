<?php
/**
 * Template Name: About Page
 *
 * Template for displaying the home page.
 *
 * @package understrap
 */

get_header();



$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container-fluid about-page"></div>
    
    <div class="container">
        
        <div class="row py-5">
            
           <div class="col-md-8">
               
               <h3>Why Choose The Bug Boss</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis voluptas placeat, tempora odio, quae laudantium, autem libero illo enim inventore asperiores dolorum magni et hic necessitatibus sapiente officiis porro!</p>
               
               <h3>Our Background</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis voluptas placeat, tempora odio, quae laudantium, autem libero illo enim inventore asperiores dolorum magni et hic necessitatibus sapiente officiis porro!</p>
               
               <h3>Our Guarantee</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis voluptas placeat, tempora odio, quae laudantium, autem libero illo enim inventore asperiores dolorum magni et hic necessitatibus sapiente officiis porro!</p>
               
           </div>
            
            <div class="col-md-4">
                
                <?php include 'inc/partials/home-form.php'; ?>
                
            </div>
            
        </div>
        
    </div>
    
    <?php include 'inc/home-testimonials.php'; ?>

<?php get_footer(); ?>
