<?php
   /**
    * The template for displaying all single posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
         <article class="blog-post">
            <h2 class="blog-post-title mb-1"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
            <?php the_content(); ?>
            <hr>
            <?php comments_template(); ?>
         </article>
         <?php endwhile; ?>
         <?php else : ?>
         <p><?php __('No Posts Found'); ?></p>
         <?php endif; ?>
      </div>
      <div class="col-md-4">
         <?php if(is_active_sidebar('sidebar-1')): ?>
         <?php dynamic_sidebar('sidebar-1'); ?>
         <?php endif; ?>
      </div>
   </div>
</main>
<!-- #main -->
<?php
//get_sidebar();
get_footer();