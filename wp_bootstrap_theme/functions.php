<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
  'menu' => __( 'Main Menu'),
    'side' => __( 'Side Menu'),
    'footer' => __( 'Footer Menu')
    
) );

// Theme Spport
    function wpb_theme_setup(){
      add_theme_support('post-thumbnails');
    
      add_theme_support('post-formats', array('aside','gallery' ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');

// Widget Locations
function wpb_init_widgets($id){
    
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="card-body">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
  ));
    
    register_sidebar(array(
    'name'  => 'Footer 1',
    'id'    => 'footer_1',
    'before_widget' => '<div class="col-md-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
  ));

  register_sidebar(array(
    'name'  => 'Footer 2',
    'id'    => 'footer_2',
    'before_widget' => '<div class="col-md-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
  ));

  register_sidebar(array(
    'name'  => 'Footer 3',
    'id'    => 'footer_3',
    'before_widget' => '<div class="col-md-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
  ));
    
    register_sidebar(array(
    'name'  => 'Social Media',
    'id'    => 'social_media',
    'before_widget' => '<div class="list-unstyled">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
  ));
    
    }

add_action('widgets_init', 'wpb_init_widgets');




