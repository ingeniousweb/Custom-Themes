<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>



<nav class="navbar navbar-inverse main_menu site-navigation navbar-fixed-top">
<div class="container">
<div class="navbar-header hidden-md-down">
<a class="navbar-brand" href="#intro"><img src="http://elementor.cakewp.com/fitness/wp-content/uploads/sites/6/2016/10/Logo_elementor.png"/></a>
</div>          
<button class="navbar-toggler hidden-lg-up pull-xs-right collapsed" type="button" data-toggle="collapse" data-target="#exCollapsingNavbarMD" aria-expanded="false">
☰
</button>
<div class="navbar-toggleable-md collapse" id="exCollapsingNavbarMD" aria-expanded="false" style="height: 0px;">
				<?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => '',
                                        'menu_class' => 'nav navbar-nav navbar-right',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
					 'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>
    <a href="#download" class=" pull-xs-right btn download_btn">Download</a>
</div>
</div>
</nav>


    </div><!-- .wrapper-navbar end -->






