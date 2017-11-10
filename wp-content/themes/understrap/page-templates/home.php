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
<?php include 'inc/home-intro.php'; ?>
<?php include 'inc/home-slider.php'; ?>
<?php include 'inc/home-guarantee.php'; ?>
<?php include 'inc/home-ipm.php'; ?>
<?php include 'inc/home-testimonials.php'; ?>


<?php get_footer(); ?>
