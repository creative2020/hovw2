<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<?php wp_head(); ?>
</head>
<body>
<div class="container-fluid maxpg">

<div class="row">
    <div id="top" class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="col-xs-12 col-sm-8">
            <div class="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="" width="100%">
            </div>
            <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"></a>
        </div>
      
        <div class="phone col-xs-12 hidden-xs col-sm-4">
            <i class="fa fa-phone"></i> 417-501-6989</div>
        </div>
        <div class="visible-xs col-xs-12 flush">
                <a href="tel:417-501-6989"><h2 class="phone-m col-xs-12 text-center"><i class="fa fa-phone"></i> 417-501-6989</h2></a>
            </div>
    
</div> 
    
    
<!--Mobile menu    -->
    
<div class="navbar-header visible-xs">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>
<!--Mobile menu    -->    

<div class="row">
    <div id="navbar" class="col-sm-10 col-sm-offset-1">
                       
        <?php wp_nav_menu( array(
                'menu'              => 'short',
                'theme_location'    => 'tt-main',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'tt-main-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
        ); ?>
            
    </div>
</div>
    
<!--    nav-->

<div class="row">
					
					</div>
    
    
    
    
<!--header-->
