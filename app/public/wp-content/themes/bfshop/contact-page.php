<?php
   /**
      * Template Name: Contact Page
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
   <section>
      <div class="container pt-5 pb-5">
         <div class="row g-0">
            <div class="col-md-6">
               <div class="con-text">
                  <h1 class="pt-4" >Contact Us</h1>
                  <!-- Single line list with Icon-->
                  <!--Simple three-line list with Icon -->
                  <ul class="list-group pmd-list pmd-card-list cl-t m-0">
                     <li class="list-group-item d-flex">
                        <i class="bi bi-telephone"></i>
                        <div class="media-body">
                           <h6 class="pmd-list-title" style="text-indent: 5px;">Phone</h6>
                           <p class="pmd-list-subtitle" href="+639194196897" style="text-indent: 5px;">+639194196897</p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex">
                        <i class="bi bi-envelope"></i>
                        <div class="media-body">
                           <h6 class="pmd-list-title" style="text-indent: 5px;">Email</h6>
                           <p class="pmd-list-subtitle" style="text-indent: 5px;">hello@BFshop.com</p>
                        </div>
                     </li>
                     <li class="list-group-item d-flex">
                        <i class="bi bi-geo-alt"></i>
                        <div class="media-body">
                           <h6 class="pmd-list-title" style="text-indent: 5px;">Address</h6>
                           <p class="pmd-list-subtitle">Sarpha Village, Catalunan Grande,<br>Davao City, 8000, Philippines</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6 cform ">
               <?php echo do_shortcode('[contact-form-7 id="166" title="Contact"]');?>
            </div>
         </div>
      </div>
   </section>
   <section class="pb-0">
      <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=sarpha%20village%20catalunan%20grande&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
   </section>
</main>
<!-- #main -->
<?php
//get_sidebar();
get_footer();