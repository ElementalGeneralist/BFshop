<?php
   /**
   * Template Name: Blog Page
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
   <div class="container pt-5 pb-5">
      <div class="row">
         <div class="col-md-8">  
         </div>
         <div class="col-md-4">
            <div class="shadow p-3 mb-3 bg-body rounded">
               <div class="block-header bg-gray-lighter">
                  <h3 class="block-title">Search</h3>
               </div>
               <div class="block-content block-content-full sidebar-search">
                  <?php dynamic_sidebar('custom-sidebar-a')?>
               </div>
            </div>
            <div class="shadow p-3 mb-4 bg-body rounded">
               <div class="block-header bg-gray-lighter">
                  <h3 class="block-title">Recent Comments</h3>
               </div>
               <div class="block-content block-content-full side-list px-3">
                  <?php bg_recent_comments(); ?>
               </div>
            </div>
            <div class="shadow p-3 mb-4 bg-body rounded">
               <div class="block-header bg-gray-lighter">
                  <h3 class="block-title">Social</h3>
               </div>
               <div class="block-content block-content-full">
                  <div class="btn-group">
                     <a class="btn btn-primary rounded-circle me-2" href="...." data-toggle="tooltip" title="" data-original-title="Follow us on Twitter"><i class="bi bi-twitter"></i></a>
                     <a class="btn btn-primary rounded-circle me-2" href="...." data-toggle="tooltip" title="" data-original-title="Like our Facebook page"><i class="bi bi-facebook"></i></a>
                     <a class="btn btn-primary rounded-circle me-2" href="...." data-toggle="tooltip" title="" data-original-title="Follow us on Google Plus"><i class="bi bi-google"></i></a>
                     <a class="btn btn-primary rounded-circle me-2" href="...." data-toggle="tooltip" title="" data-original-title="Follow us on Dribbble"><i class="bi bi-dribbble"></i></a>
                     <a class="btn btn-primary rounded-circle" href="...." data-toggle="tooltip" title="" data-original-title="Subscribe on Youtube"><i class="bi bi-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- #main -->
<?php
//get_sidebar();
get_footer();