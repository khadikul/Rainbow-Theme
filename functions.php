<?php 

function the_mx_setup() {
    load_theme_textdomain( 'rainbow-cloud', get_template_directory() . '/languages' );
}
    
if(! defined('d_version')){
    // Replace the version number of the theme on each release.
    define('d_version', '1.0.0');

}


///add css,bootstrap,javascript,jquery,fontawesome,google font
function rainbow_script(){

    //google font
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');


    //css
    wp_enqueue_style('bootstrap-min', get_template_directory_uri(  ).'/assets/css/bootstrap.min.css', array(), 'd_version', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri(  ).'/assets/css/font-awesome.min.css', array(), 'd_version', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri(  ).'/assets/css/magnific-popup.css', array(), 'd_version', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri(  ).'/assets/css/owl.carousel.css', array(), 'd_version', 'all');
    wp_enqueue_style('style', get_template_directory_uri(  ).'/assets/css/style.css', array(), 'd_version', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri(  ).'/assets/css/responsive.css', array(), 'd_version', 'all');

    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('font-awesome', get_template_directory_uri(  ).'/assets/js/font-awesome.js', array(), 'd_version', true);
    wp_enqueue_script('popper-min', get_template_directory_uri(  ).'/assets/js/popper.min.js', array(), 'd_version', true);
    wp_enqueue_script('bootstrap-min', get_template_directory_uri(  ).'/assets/js/bootstrap.min.js', array(), 'd_version', true);
    wp_enqueue_script('owl-carousel-min', get_template_directory_uri(  ).'/assets/js/owl.carousel.min.js', array(), 'd_version', true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri(  ).'/assets/js/jquery.magnific-popup.min.js', array(), 'd_version', true);
    wp_enqueue_script('isotope', get_template_directory_uri(  ).'/assets/js/isotope.min.js', array(), 'd_version', true);
    wp_enqueue_script('imageloaded', get_template_directory_uri(  ).'/assets/js/imageloaded.min.js', array(), 'd_version', true);
    wp_enqueue_script('jquery-counterup', get_template_directory_uri(  ).'/assets/js/jquery.counterup.min.js', array(), 'd_version', true);
    wp_enqueue_script('waypoint', get_template_directory_uri(  ).'/assets/js/waypoint.min.js', array(), 'd_version', true);
    wp_enqueue_script('main', get_template_directory_uri(  ).'/assets/js/main.js', array(), 'd_version', true);
}
add_action('wp_enqueue_scripts','rainbow_script');


//theme support here
function rainbow_support(){

    // add support for core custome logo
    add_theme_support('custom-logo', array(
            'heaight'  => 100,
            'width'    => 100,
        'flex-width'   => true,
        'flex-heaight' => true,
    ));

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
    * Let WordPress manage the document title.
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');

    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "align-wide" );
   // Add custome header
    add_theme_support('custom-header');

    /*
    * Enable support for Post Thumbnails on posts and pages.
    */
    add_theme_support('post-thumbnails');

    // Add default post type like gallery, aside, vedio etc.
    add_theme_support('post-formats', array('aside', 'gallery', 'vedio') );
    add_theme_support('has_post_format');

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'digital_agency_custome_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ));


    wp_link_pages();
    the_tags();
    add_editor_style();
    

}
add_action('after_setup_theme', 'rainbow_support');


function rainbow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rainbow_content_width', 900 );
}
add_action( 'after_setup_theme', 'rainbow_content_width', 0 );

/*
WP
Register Widget Area
*
*
*/
function rainbow_widgets_init(){

    register_sidebar( array(
        'name'          => __('Primary_sidebar', 'rainbow-cloud'),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(
        'name'          => __('Footer Widget 1', 'rainbow-cloud'),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(
        'name'          => __('Footer Widget 2', 'rainbow-cloud'),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(
        'name'          => __('Footer Widget 3', 'rainbow-cloud'),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );

    register_sidebar( array(
        'name'          => __('Sidebar Widget', 'rainbow-cloud'),
        'id'            => 'sidebar-widget',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',

    ) );
}
add_action('widgets_init', 'rainbow_widgets_init');

// add theme menus
// add_theme_support('menus');
register_nav_menus( 
    array(
        'primary'  => __('Primary Menu', 'rainbow-cloud'),
        'footer-menu' => __('Footer Menu', 'rainbow-cloud')
    )
);

//bootstrap walker
require get_template_directory(  ).'/libery/nav-walker.php';


//codestar framework
require get_template_directory( ).'/theme-option/codestar-framework.php';
require get_template_directory( ).'/theme-option//samples/admin-options.php';
