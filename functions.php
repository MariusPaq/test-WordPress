<?php
function register_my_menu(){
   register_nav_menu('main', "Menu principal");
}
add_action('after_setup_theme', 'register_my_menu');
add_action( 'init', 'register_my_menu' );



function register_my_sidebars(){
   register_sidebar(
       array(
           'name' => "Sidebar principale",
           'id' => 'main-sidebar',
           'description' => "La sidebar principale",
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2 class="widget-title">',
           'after_title'   => '</h2>'
       )
   );

   register_sidebar(
       array(
           'name' => "Sidebar du footer",
           'id' => 'footer-sidebar',
           'description' => "La sidebar principale",
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget'  => '</div>',
           'before_title'  => '<h2 class="widget-title">',
           'after_title'   => '</h2>'
       )
   );
}
add_action('widgets_init', 'register_my_sidebars');




function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );




function test_register_assets() {
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
  wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

  wp_enqueue_style('bootstrap');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'test_register_assets');

// Chargement des styles et des scripts Bootstrap sur WordPress
    function wpbootstrap_styles_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
        wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    }
    add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
