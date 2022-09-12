<?php
   /**
      * Template Name: About Page
      */
   /**
   * The template for displaying all pages
   *
   * This is the template that displays all pages by default.
   * Please note that this is the WordPress construct of pages
   * and that other 'pages' on your WordPress site may use a
   * different template.
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package BFshop
   */
   
   get_header();
   ?>
<main id="primary" class="site-main">
   <section class="pt-5">
      <div class="container about-page text-center">
         <div class="t-about">
            <H1>Trusted by</H1>
            <img src="<?php echo get_template_directory_uri()?>/img/slider/brand.png" class="img-fluid" alt="..." loading="lazy">
         </div>
      </div>
   </section>
   <section class="pb-5">
      <div class="container">
         <div class="row about-info featurette justify-content-center">
            <div class="col-md-5">
               <h1 id="our-story" class="featurette-heading fw-normal lh-1">Our Story</h1>
               <p class="lead ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-md-5">
               <h1 id="our-history" class="featurette-heading fw-normal lh-1">Our History</h1>
               <p class="lead ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="container pb-5">
         <div class="row g-0 about-info featurette justify-content-center ">
            <div class="col-md-5 ">
               <img src="<?php echo get_template_directory_uri()?>/img/me.png" class="img-fluid " alt="...">
            </div>
            <div class=" about-box-text col-md-5  my-auto  bg-gray"  style="--bs-bg-opacity: .5;">
               <h2 id="our-team" class="featurette-heading fw-normal lh-1 " style="">Elgen Eñigo</h2>
               <p class="lead ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
         </div>
      </div>
      </div>
   </section>
</main>
<!-- #main -->
<?php
//get_sidebar();
get_footer();