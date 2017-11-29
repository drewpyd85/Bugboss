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
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/bug-boss-certified.svg" alt="State Certified" class="custom-svg"></div>
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/bug-boss-experience.svg" alt="Over 30 Years Experiene" class="custom-svg"></div>
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/bug-boss-insured.svg" alt="Licensed and Insured" class="custom-svg"></div>
            <div class="col-3 col-md-2"><img src="<?php bloginfo('template_url'); ?>/img/bug-boss-satisfaction.svg" alt="Satisfaction Guaranteed" class="custom-svg"></div>
        </div>

		<div class="row text-center">
            
            <div class="col-4">
			    
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

			<div class="col-4">
                    
                <p>The Bug Boss <?php echo date("Y"); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/bug-boss-logo.png" alt="The Bug Boss Logo">

			</div>
			
			<div class="col-4">  
			    
			    <ul>
			        <li class="nav-link text-center"><a href="tel:3528434680">Call</a></li>
			        <li class="nav-link text-center"><a href="mailto:contact@bugbossflorida.com" target="_blank">Email</a></li>
			        <li class="nav-link text-center"><a href="https://www.facebook.com/bugbossflorida" target="_blank">Socialize</a></li>
			    </ul>
			    
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

