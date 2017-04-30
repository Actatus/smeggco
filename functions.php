<?php function register_my_menu() {
  register_nav_menus( array(
  'header-menu' => 'Header Menu',
  'sitemap' => 'Sitemap') );
}

add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

function wpdocs_after_setup_theme(){
	add_theme_support( 'html5', array( 'search-form' ) );
}

add_action( 'after_setup_theme', 'wpdocs_after_setup_theme');?>