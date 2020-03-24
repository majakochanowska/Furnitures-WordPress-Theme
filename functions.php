<?php

function furnitures_add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_script('mobile-navigation', get_template_directory_uri() .'/js/mobile-navigation.js', array('jquery'), null, true);
   
    wp_enqueue_script( 'fontawesome','https://kit.fontawesome.com/b1b2166a59.js');

    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Pontano+Sans|Syncopate|Abel&display=swap' );
  }
  add_action( 'wp_enqueue_scripts', 'furnitures_add_theme_scripts' );
 

function furnitures_register_my_menus() {
    register_nav_menus(
      array(
          'primary' => __( 'Primary Menu' ),
          'mobile' => __( 'Mobile Menu' )
        )
     );
   }
add_action( 'init', 'furnitures_register_my_menus' );
