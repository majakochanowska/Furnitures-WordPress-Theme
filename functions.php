<?php
 
function furnitures_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'furnitures_assets' );

function furnitures_register_my_menus() {
    register_nav_menus(
      array('primary' => __( 'Primary Menu' ),)
     );
   }
add_action( 'init', 'furnitures_register_my_menus' );

wp_enqueue_script('mobile-navigation', get_template_directory_uri() .'/js/mobile-navigation.js', array('jquery'), null, true);