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

<!--<div class="container-fluid about-header"></div>-->
    
<div class="container-fluid about-content">

    <div class="container">
        
        <div class="row pt-5">
            <div class="col">
                <h1 class="text-center">The Bug Boss</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <h2 class="text-center">Ocala's Best Exterminator</h2>
            </div>
        </div>

        <div class="row d-flex align-items-center py-5">

           <div class="col-lg-6">

               <h3>Why Choose The Bug Boss</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis voluptas placeat, tempora odio, quae laudantium, autem libero illo enim inventore asperiores dolorum magni et hic necessitatibus sapiente officiis porro!</p>

               <h3>Our Background</h3>
               <p>The Bug Boss is Ocala’s Premier Pest Control Company. We specialize in roaches, termites, and rodents. Our trained and certified technicians have over 30 years of experience and expertise. We pride ourselves on providing quality pest control service at an affordable price for residential and commercial clients. Please allow us to meet all of your pest control needs!</p>

               <h3>Our Guarantee</h3>
               <p>The Bug Boss is committed to providing the best pest control solutions in Ocala and The Villages! We guarantee that our services will be completed and performed to the best of our abilities. Our pest control solutions are 100% guaranteed results!</p>


           </div>

            <div class="col-lg-6">

                <?php include 'inc/partials/home-form.php'; ?>

            </div>

        </div>

    </div>

</div>
   
<?php include 'inc/home-ipm.php'; ?>
    
<?php include 'inc/home-testimonials.php'; ?>

<?php get_footer(); ?>


