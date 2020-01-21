<?php 

function fg_styles() {
    wp_enqueue_style( 'generals', get_template_directory_uri().'/css/generals.css' );
    wp_enqueue_style( 'social-icons', get_template_directory_uri().'/css/social-icons.css' );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'custom',  get_template_directory_uri().'/js/custom.js', false );

    if(is_page_template('page-empresa.php')){
        wp_enqueue_style( 'empresa', get_template_directory_uri().'/css/empresa.css' );
    }

    if(is_page_template('page-productos.php')){
        wp_enqueue_style( 'productos', get_template_directory_uri().'/css/productos.css' );
    }

}
add_action( 'wp_enqueue_scripts', 'fg_styles' );

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Footer Column 1', 'wpb' ),
        'id' => 'fcolumn-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer Column 2', 'wpb'),
        'id' => 'fcolumn-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' =>__( 'Footer Column 3', 'wpb'),
        'id' => 'fcolumn-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Column 4', 'wpb'),
        'id' => 'fcolumn-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );

add_theme_support( 'post-thumbnails' );

function wpb_custom_new_menu() {
    register_nav_menu('header',__( 'Header' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

include_once ('widgets/icons-social-media.php');