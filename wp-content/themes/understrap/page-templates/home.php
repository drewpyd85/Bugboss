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


<?php get_footer(); ?>
