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

<div class="wrapper" id="full-width-page-wrapper">
    
    <div class="jumbotron jumbotron-fluid home-jumbotron">
    
        <div class="container">
            <h1 class="display-3">The<br> Bug<br> Boss</h1>
            <p class="lead">
            Contract killing pest for 25 years
            </p>
            <a href="#" class="cta-hero rounded">Call Now</a>
        </div>
        
    </div>
    

</div><!-- Wrapper end -->

<!--<div class="spacer"></div>-->

<?php get_footer(); ?>
