<?php
   /**
    * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package BFshop
    */
   
   ?>
<footer id="colophon" class="site-footer">
   <div class="bg-primary text-white pt-5 pb-5">
      <div class="container">
         <div class="row footer-row">
            <div class="col-sm-2 ">
               <?php dynamic_sidebar('footer-widget-col-one')?>
            </div>
            <div class="col-sm-2">
               <?php dynamic_sidebar('footer-widget-col-two')?>
            </div>
            <div class="col-sm-8 col-md-4 ms-auto">
               <?php dynamic_sidebar('footer-widget-col-three')?>
               <div class="foot-form">
                  <?php echo do_shortcode('[contact-form-7 id="135" title="sub-footer"]');?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row d-flex align-item-center">
         <div class="col">
            <p>&copy; <?php bloginfo('name');?><?php echo date('Y');?> / Created by <a href="https://github.com/ElementalGeneralist" target="_blank"></a>Elgen</p>
         </div>
         <div class="col h-10 d-inline-block text-end">
            <img src="<?php echo get_template_directory_uri();?>/img/payment.png" class="img-fluid footer-img" loading="lazy"alt="...">
         </div>
      </div>
   </div>
</footer>
<!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>