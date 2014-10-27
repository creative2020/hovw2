<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>


<?php
$message_display = get_field('message_display', 'options');
$message = get_field('message', 'options');

if ($message_display = 'Yes') {
echo '<div class="row">
    <div id="callout" class="col-sm-10 col-sm-offset-1">
        <h3 class="callout-message">'.$message.'</h3>
    </div>
</div> <!--row-->';
}
?>
    
    <div id="page-main" class="row">
      <div class="page-inside col-sm-10 col-sm-offset-1">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
    
      
<div id="page" class="row">
    
<div id="page-content" class="col-sm-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php endwhile; endif; ?>
  </div>
      
  <div id="sidebar" class="col-sm-4 flush">
        <div id="social-media-icons">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
      
      <?php dynamic_sidebar( 'tt-sidebar' ); ?>
  </div>
  </div>
  
        
    <div id="quicklink-wrap" class="row">
        <div id="" class="col-sm-12 flush">
            
            <a href="#">
                
                <div class="quicklink col-sm-4">
                    
                    <i class="now fa fa-bullhorn"></i><i class="go fa fa-external-link"></i>
                    <h2>Recent News</h2>
                    <?php echo do_shortcode('[tt_posts limit="2" cat_name="home"]'); ?>
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-shopping-cart"></i><i class="go fa fa-external-link"></i>
                    <h2>For Sale</h2>
                    <?php echo do_shortcode('[tt_posts type="product" limit="2"]'); ?>
                
                </div>
            </a>
            <a href="#">
                <div class="quicklink col-sm-4">
                    <i class="now fa fa-rocket "></i><i class="go fa fa-external-link"></i>
                    <h2>Performance</h2>
                    <?php echo do_shortcode('[tt_posts limit="2" cat_name="performance"]'); ?>
                
                </div>
            </a>
    
    </div>



</div>


  <?php get_footer() ?>
