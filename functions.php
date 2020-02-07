<?php 
add_image_size( 'blog-post', 733, 483, true );
function fg_styles() {
    wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri().'/css/footer.css' );

    
    
    wp_enqueue_style( 'generals', get_template_directory_uri().'/css/generals.css', true );
    wp_enqueue_style( 'social-icons', get_template_directory_uri().'/css/social-icons.css', true );
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'custom',  get_template_directory_uri().'/js/custom.js', true );
    wp_enqueue_script( 'owl.carousel.min',  get_template_directory_uri().'/js/owl.carousel.min.js', true );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
    wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri().'/js/assets/owl.carousel.min.css', true );
    wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri().'/js/assets/owl.theme.default.min.css', true );
    
    if(is_page_template('front-page.php')){
        wp_enqueue_style( 'front-page', get_template_directory_uri().'/css/front-page.css' , true);
    }

    // if(is_page_template('page-empresa.php')){
    //     wp_enqueue_style( 'empresa', get_template_directory_uri().'/css/empresa.css' , true);
    // }

    if(is_page_template('page-productos.php') || is_page_template('page-producto.php')){
        wp_enqueue_style( 'productos', get_template_directory_uri().'/css/productos.css' , true);
    }

    

    if(is_page_template('page-contacto.php')){
        wp_enqueue_style( 'contacto', get_template_directory_uri().'/css/contacto.css' , true);
    }


    if(is_singular( 'productos' )){
        wp_enqueue_style( 'single-productos', get_template_directory_uri().'/css/single-productos.css' , true);
    }

}
add_action( 'wp_enqueue_scripts', 'fg_styles' );

function wpb_widgets_init() {
 

    register_sidebar( array(
        'name' =>__( 'Header Telefonos', 'wpb'),
        'id' => 'header-telefonos',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Header social icons', 'wpb'),
        'id' => 'header-social-icons',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


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



    register_sidebar( array(
        'name' =>__( 'Post Sidebar', 'wpb'),
        'id' => 'post-sidebar',
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
    register_nav_menu('footer',__( 'Footer' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function remove_page_from_query_string($query_string)
{ 
    if($query_string['name']){
        if ($query_string['name'] == 'page' && isset($query_string['page'])) {
            unset($query_string['name']);
            // 'page' in the query_string looks like '/2', so split it out
            list($delim, $page_index) = split('/', $query_string['page']);
            $query_string['paged'] = $page_index;
        }
    }
    return $query_string;
}

add_filter('request', 'remove_page_from_query_string');
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}


function custom_admin_css() {
    echo '<style type="text/css">
    /* Main column width */
    .wp-block {
        max-width: 1024px;
    }
    
    /* Width of "wide" blocks */
         .wp-block[data-align="wide"] {
         max-width: 1080px;
    }
    
    /* Width of "full-wide" blocks */
    .wp-block[data-align="full"] {
        max-width: none;
    }
    </style>';
    }
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}


function short_title() {
    global $post;
    if ( !$post )
      return;
  
    $title = $post->post_title;
    if ( 20 < strlen($title) ) {
      $title = substr( $title, 0, 20 ) . '...';
    }
  
    echo $title;
  }
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

include_once ('widgets/icons-social-media.php');
include_once ('widgets/icons-header-social-media.php');