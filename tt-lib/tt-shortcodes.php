<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'post_info', 'post_info' );
function post_info ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT Button

// [hsr_btn size="lg" link="#" color="#003764" fcolor="#ffffff" float="none" target="" class=""]Button Name[/hsr_btn], homes_for_sale_btn

add_shortcode( 'tt_btn', 'tt_btn' );
function tt_btn($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '',
        'color'  => '#003764', //#003764
        'fcolor'  => '#ffffff', //#ffffff
        'link'    => '#',
        'float'    => 'none',
        'target'    => '_blank',
        'class' => '',
        'block' => 'n',
    ), $atts ) );
    
    $classes = 'btn btn-default ' . $class . ' btn-' . $size;
    
    if ($block == 'y') {
    	$classes .= ' btn-block';
    }

    return '<a type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';" target="' . $target . '">' . $content . '</a>';
}

////////////////////////////////////////////////////////

add_shortcode( 'tt_rule', 'tt_rule' );
function tt_rule($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '1px',
        'color'  => '#333',
    ), $atts ) );

    $classes = 'rule';

    return '<div class="' . $classes . '" style"border:' . $size . ' solid ' . $color .';"></div>';
}

//////////////////////////////////////////////////////// TT Post Feed

add_shortcode( 'tt_posts', 'tt_posts' ); // echo do_shortcode('[tt_posts limit="-1" cat_name="home"]');
function tt_posts ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => 'post',
            'cat_id' => '-1',
            'cat_name' => '',
            'limit' => '10',
            'type' => 'post',
            'col_img' => '4',
            'col_txt' => '8',
            'display' => 'excerpt', //excerpt or content
		), $atts )
	);
    
    /////////////////////////////////////// Variables
$user_ID = get_current_user_id();
$user_data = get_user_meta( $user_ID );
$user_photo_id = $user_data[photo][0];
$user_photo_url = wp_get_attachment_url( $user_photo_id );
$user_photo_img = '<img src="' . $user_photo_url . '">';

/////////////////////////////////////// All Query    
if ($name == 'post') {
	// The Query
$args = array(
	'post_type' => $type,
	'post_status' => 'publish',
	'order' => 'ASC',
	'posts_per_page' => $limit,
    'cat' => $cat_id,
    'category_name' => $cat_name,
);
$the_query = new WP_Query( $args );
} else { 
	//nothing
	}
    
global $post;

// pre loop
//$output = '<ul>';    

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// pull meta for each post
		$post_id = get_the_ID();
		$permalink = get_permalink( $id );
        $post = get_post();
        //$image = the_post_thumbnail( 'thumbnail' );
        $size = 'thumbnail';
        $image = get_the_post_thumbnail( $post_id, $size, $attr );
        $images_url = get_stylesheet_directory_uri();
        
        if ( $cat_name == 'home' ) {
            $col_img = '3';
            $col_txt = '9';
            $display = 'excerpt';
        }
        if ( in_category( 'testimonial' )  ) {
            $image = '<img src="'.$images_url.'/images/img-fpo.png">';
        }
        if ( empty($image)) {
            $image = '<img src="'.$images_url.'/images/quicklink-fpo.png">';
        }
		
//HTML
        
    $output .= '<a href="'.$permalink.'"><div class="'.$cat_name.'-wrap">'.
        '<div class="col-xs-12 col-sm-'.$col_img.' '.$cat_name.'-img">';  
    $output .= $image .
                '</div>'.
                '<div class="row col-xs-12 col-sm-'.$col_txt.' '.$cat_name.'-title">'. 
                    '<h3>'. $post->post_title .'</h3>';
        
        if ( $display == 'content' ) {
            $output .= '<p>'. $post->post_content .'</p>';
        } else {
            $output .= '<p>'. $post->post_excerpt .'</p>';
        }
        if ( $cat_name == 'webinars' ) {
            $output .= '<a class="btn btn-primary btn-large" href="#">Sign up now</a>';
        } else {
            // do nothing
        }  
            
        $output .= '</div></div></a>'.
                    '<div class="clearfix"></div>';

	}
} else {
	// no posts found
	echo '<h2>No ' . $type . ' found</h2>';
}
    // after loop
    //$output .= '</ul>';
    
/* Restore original Post Data */
wp_reset_postdata();
return $output;
}

////////////////////////////////////////////////////////