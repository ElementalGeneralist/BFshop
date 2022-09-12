<?php
   /**
    * The template for displaying search results pages
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
    *
    * @package BFshop
    */
   
   get_header();
   ?>
<main id="primary" class="site-main container">
   <div class="row g-5 mt-5 mb-5">
      <div class="col-md-8">
         <?php if(have_posts()) : ?>
         <?php while(have_posts()) : the_post(); ?>
         <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col d-flex flex-column position-static pt-3 pb-3 ps-4 pe-4">
               <h3 class="mb-0"><?php the_title(); ?></h3>
               <div class="mb-1 text-muted"><?php the_time('F j, Y g:i a'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
               <p class="card-text"><?php the_excerpt(); ?></p>
               <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
               <div class="post-thumb">
                  <?php if(has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>	
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
         <?php else : ?>
         <p><?php __('No Posts Found'); ?></p>
         <?php endif; ?>
      </div>
      <div class="col-md-4 ">
         <?php if(is_active_sidebar('sidebar-1')): ?>
         <?php dynamic_sidebar('sidebar-1'); ?>
         <?php endif; ?>
      </div>
   </div>
</main>
<!-- #main -->
<?php
get_footer();