<?php get_header(); ?>


    <div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    
      
<div id="page" class="row">
    
<div id="page-content" class="col-sm-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
    
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4 flush">
                    <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', $attr ); ?>
                </div>
                <div class="col-sm-8">
                    <h1><?php the_title(); ?></h1>
                    <span class="date"><?php the_date(); ?></span>
                    <span class="author">by: <?php the_author(); ?></span>
                    <span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', '' ) ); ?></span>
                    
                </div>
            </div>
            
            <div class="col-sm-12">
                    <?php the_content('<p class="serif">Read the rest of this article &raquo;</p>'); ?>
            </div>
            
            <div class="col-sm-12">
                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php endwhile; endif; ?>
            </div>
            
        </div>
      
  <div id="sidebar" class="col-sm-4 flush">
        <div id="social-media-icons">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
      
      <?php dynamic_sidebar( 'tt-sidebar' ); ?>
  </div>
  </div>
  

  <?php get_footer() ?>
