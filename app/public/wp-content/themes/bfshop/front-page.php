<?php
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
   <section class="container pb-5 pt-4">
      <div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded-3" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
               <a href="#">
               <img src="<?php echo get_template_directory_uri()?>/img/slider/slider-1.png" class="d-block w-100" alt="..." loading="lazy">
               </a>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
               <a href="#">
               <img src="<?php echo get_template_directory_uri()?>/img/slider/slider-2.png" class="d-block w-100" alt="..." loading="lazy">
               </a>
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>
   <section class="container">
      <h1 class="text-center pt-5">Latest Products</h1>
      <p class="text-center">We offer a number of high quality fashion apparel to make <br> you guys awesome and cool!</p>
      <div class="pt-5 pb-5">
         <?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]');?>
      </div>
   </section>
   <section class="categories pt-5 pb-5">
      <div class="container">
         <h1 class="text-center">Blogs</h1>
         <p class="text-center">See our blogs that will help you guys from <br> style, food and health!</p>
         <div class="row pt-5">
            <div class="categories__col col-md-4 col-sm-12">
               <a href="http://bfshop.local/summer-accessories/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded-3 overflow-hidden">
                  <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri()?>/img/blogs/1.png" alt="..." loading="lazy">
                  <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity text-white">Summer Accessories</h2>
               </a>
            </div>
            <div class="categories__col col-md-4 col-sm-12">
               <a href="http://bfshop.local/summer-fruits/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded-3 overflow-hidden">
                  <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri()?>/img/blogs/2.png" alt="..." loading="lazy">
                  <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity text-white">Summer Fruits</h2>
               </a>
            </div>
            <div class="categories__col col-md-4 col-sm-12">
               <a href="http://bfshop.local/summer-books/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded-3 overflow-hidden">
                  <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri()?>/img/blogs/3.png" alt="..." loading="lazy">
                  <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity text-white">Summer Books</h2>
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="container">
      <h1 class="text-center pt-5">Special Offers</h1>
      <p class="text-center">Check our special discounted products asap. <br> Don't miss it you will regret it!</p>
      <div class="pt-5 pb-5">
         <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]');?>
      </div>
   </section>
   <section class="pt-5">
      <div class="mapouter">
         <div class="gmap_canvas">
            <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sarpha%20village%20catalunan%20grande&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><a href="https://www.embedgooglemap.net">how to put google map on website</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
         </div>
      </div>
   </section>
   <section class= "contact pt-5 pb-5">
      <div class="container">
         <h1 class="text-center">Subscribe Us</h1>
         <p class="text-center pb-5">If you guys want to receive latest newsletter and updates<br> please do subscribe!</p>
      </div>
      <div class="cform container rounded-3">
         <?php echo do_shortcode('[contact-form-7 id="129" title="Subscription"]');?>
      </div>
   </section>
</main>
<!-- #main -->
<?php
get_footer();