<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="container-fluid py-3" id="wrapper-footer">

	<div class="container">
        
        <div class="row py-3 text-center justify-content-center">
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/exp.svg" alt="" class="custom-svg"></div>
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/certified.svg" alt="" class="custom-svg"></div>
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/satisfaction.svg" alt="" class="custom-svg"></div>
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/insured.svg" alt="" class="custom-svg"></div>
        </div>

		<div class="row justify-content-center text-center">
            
            <div class="col-md-2 col-sm-3">
			    
			    <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			    
			</div>

			<div class="col-md-2 col-sm-3">
                    
                <p>The Bug Boss <?php echo date("Y"); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">

			</div>
			
			<div class="col-md-2 col-sm-3">  
			    
			    <ul>
			        <li class="nav-link"><a href="">Number</a></li>
			        <li class="nav-link"><a href="">Email</a></li>
			        <li class="nav-link"><a href="">Address</a></li>
			    </ul>
			    
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

