<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying the home page.
 *
 * @package understrap
 */

get_header();



$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="container-fluid contact-content">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <?php include 'inc/partials/contact-form.php'; ?>
            </div>
            
            <div class="col-md-6">
              
               <h1>The Bug Boss</h1>
               <p class="lead">We'll Be Happy To Answer Any Questions</p>
               
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laborum vitae ullam vero repudiandae doloribus, autem magnam facilis et omnis porro nulla necessitatibus, tempore odio dolorum enim. Consequatur, aspernatur molestias.</p>
                
                <ul>
                    <li>The Bug Boss, LLC</li>
                    <li><a href="tel:3522222222"> Phone</a></li>
                    <li><a href="mailto:email.com"> Email</a></li>
                    <li> 43 Teak Run<br> Ocala, FL 34472</li>
                </ul>
                
            </div>
        </div>
    </div>
</div>

    
<div class="container-fluid">

    <div class="row">
       
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.9088462328527!2d-82.04951038396489!3d29.16735828220998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7d2a5cb06564b%3A0x1f6a0b655ad537d4!2s43+Teak+Run%2C+Ocala%2C+FL+34472!5e0!3m2!1sen!2sus!4v1510340891899" width="2560" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

</div>
   

<?php get_footer(); ?>