<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
	<?php endif; ?>

<?php include 'page-templates/inc/partials/contact-form.php'; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>
<div class="container contact-form">
    <div class="row">
        <div class="col text-center">
            <h4>Refer A Friend And Receive</h4>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <img src="<?php bloginfo('template_url'); ?>/img/discount.png" alt="Internet Discount">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>On Your Next Treatment</p>
        </div>
    </div>
</div>


</div><!-- #secondary -->
