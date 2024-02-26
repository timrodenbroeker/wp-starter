<?php

function register_my_menus() {
    register_nav_menus(
      array(
        'navbar' => __( 'navbar' ),
        'footer-1' => __( 'footer-1' ),
        'footer-2' => __( 'footer-2' )
      )
    );
  }
add_action( 'init', 'register_my_menus' );

add_theme_support( 'align-wide' );
