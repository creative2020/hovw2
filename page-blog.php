<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    
    
      
<div id="page" class="row">
    <div id="page-header" class="col-sm-12 flush">
        <div class="col-sm-8 flush">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-sm-4 flush feature-img">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>
    </div>
    
    Hello
<div id="page-content" class="col-sm-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php endwhile; endif; ?>
  </div>
      
  <div id="sidebar" class="col-xs-12 col-sm-4 flush">
        <div id="social-media-icons">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
      
      <?php dynamic_sidebar( 'tt-sidebar' ); ?>
  </div>
  </div>
  
        
   


  <?php get_footer() ?>
          
</div>