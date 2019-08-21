<?php
/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'marcusjh_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function marcusjh_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'marcusjh', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'primary_menu' ),
        'secondary' => __('Secondary Menu', 'marcusjh' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'marcusjh_setup' );

// Regtister custom post types 
function register_post_types() {

    // Register Quotes post type
    $quote_args = array(
        'labels' => array ( 
                'name' => __( 'Quotes', 'quotes' ), 
                'singular_name' => __( 'Quote', 'quote' ),
             ),
        'description' => 'Add a new quote',
        'supports' => array( 'title' ),
        'taxonomies' => array( 'quotes' ), 
        'public' => true,
        'menu_position' => 50,
        'menu_icon' => 'dashicons-images-alt2',  
        'has_archive' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'quote', ),
   );

   // Register Featured Work post type
   $featured_work_args = array(
        'labels' => array ( 
                'name' => __( 'Featured Work', 'featured work' ), 
                'singular_name' => __( 'Featured Work', 'featured work' ),
            ),
        'description' => 'Add a new project',
        'supports' => array( 'title', 'thumbnail' ),
        'taxonomies' => array( 'projects' ), 
        'public' => true,
        'menu_position' => 50,
        'menu_icon' => 'dashicons-images-alt2',  
        'has_archive' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'project', ),
    );

    // Register Testimonials post type
    $testimonials_args = array(
        'labels' => array ( 
                'name' => __( 'Testimonials', 'testimonials' ), 
                'singular_name' => __( 'Testimonial', 'testimonial' ),
            ),
        'description' => 'Add a new testimonial',
        'supports' => array( 'title' ),
        'taxonomies' => array( 'testimonials' ), 
        'public' => true,
        'menu_position' => 50,
        'menu_icon' => 'dashicons-images-alt2',  
        'has_archive' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'testimonial', ),
    );

   // Register Quotes
   register_post_type( 'quotes', $quote_args );
   // Register Featured Work
   register_post_type( 'featured Work', $featured_work_args );
   // Register Testimonials
   register_post_type( 'testimonials', $testimonials_args );
} 

add_action( 'init', 'register_post_types' );

// Add sage wrapper functionality https://github.com/mcaskill/wp-sage-theme-wrapper
add_filter('template_include', [ '\\Roots\\Sage\\Wrapper', 'wrap'], 109);
