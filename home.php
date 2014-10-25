<?php get_header(); ?>


<div id="page-main" class="row">
<div class="page-inside col-sm-10 col-sm-offset-1">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    
      
<div id="page" class="row">
    
<div id="page-content" class="col-sm-8">
    
<div class="row">
<div class="col-sm-12 flush">
                
    <!--Loop start-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
    <div class="col-sm-4 flush tt-post-img-wrap">
        <?php
$post_thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail', $attr );
$images_url = get_stylesheet_directory_uri().'/images/';

if ( empty($post_thumbnail) ) {
$post_thumbnail = '<img src="'.$images_url.'quicklink-fpo.png">';
}
?>                    
        <?php echo $post_thumbnail; ?>
    </div>
    
    <!--Title-->
    <div class="col-sm-8">
       <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
       <p>
            <span class="date"><?php the_date(); ?></span>
            <span class="author">by: <?php the_author(); ?></span>
       </p>
       <p>
            <span class="cat-links">Filed: <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', '' ) ); ?></span>                      </p>
        
    </div>
    <!--Title end-->       
    
    <!--Content-->
    <div class="col-sm-12 tt-post-content">
            <?php the_content('<p class="serif">Read the rest of this article &raquo;</p>'); ?>
    </div>
    <!--Content end-->
    
    <!--Divider-->
    <div class="col-sm-12 flush">                
        <?php echo do_shortcode('[tt_rule]'); ?>                
    </div>                
    <!--Divider end-->
    
    <?php endwhile; endif; ?>
<!--Loop end-->

<!--Pagination-->
<div class="col-sm-12 link-pages">
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

</div>
<!--Pagination end-->       
</div><!--Post loop row-->
    
</div><!--Page content row-->    
</div><!--Page content left end-->
<!--Sidebar-->    
  <div id="sidebar" class="col-sm-4 flush">
        <div id="social-media-icons">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
      
      <?php dynamic_sidebar( 'tt-sidebar' ); ?>
</div>
<!--Sidebar-->
    
    

</div><!--Page end-->
<?php get_footer() ?>

</div>