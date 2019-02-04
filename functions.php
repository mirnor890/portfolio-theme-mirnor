<?php

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'post-formats', array('gallery', 'image') ); 
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
  'height'      => 50,
  'width'       => 50,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
) );

add_post_type_support( 'page', array( 'excerpt' ) );

include('include/post_type.php');
include('include/taxonomy.php');
include('include/media_sizes.php');


// ref:https://codex.wordpress.org/Navigation_Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

register_sidebar( 'right-sidebar' ); 

function add_widgets() {
  $args = array(
    'id'            => 'page-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    // opportunity to change the langugage for an another person. 
    'name'          => __( 'Page Sidebar' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show my skills and social links', 'portfolio_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'class' => 'clearfix',
  );
  register_sidebar( $args );


  $args = array(
    'id'            => 'description-header',
    /** Visible name in the Admin Dashboard Widget page */
    // opportunity to change the langugage for an another person. 
    'name'          => __( 'Description' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Main header description of my portfolio website', 'portfolio_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );


    $args = array(
    'id'            => 'project-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    // opportunity to change the langugage for an another person. 
    'name'          => __( 'Project Sidebar' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show project skills', 'portfolio_theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );

 }
 add_action( 'widgets_init', 'add_widgets' );




?>