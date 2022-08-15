<?php 
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function myfirsttheme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
         // Enable support for post thumbnails and featured images.
         add_theme_support( 'title-tag' ); 
         add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
         add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
         // Resize Default Wordpress images
         update_option( 'thumbnail_size_w', 360 );
         update_option( 'thumbnail_size_h', 9999 );
         update_option( 'thumbnail_crop', false );
         update_option( 'medium_size_w', 640 );
         update_option( 'medium_size_h', 9999 );
         update_option( 'medium_crop', false );
         update_option( 'medium_large_size_w', 640 );
         update_option( 'medium_large_size_h', 9999 );
         update_option( 'medium_large_crop', false );
         update_option( 'large_size_w', 1920 );
         update_option( 'large_size_h', 9999 );
         update_option( 'large_crop', true );
         update_option( '2x1_desktop_big', 1920, 960, true );
         update_option( '2x1_desktop', 1366, 683, true );
         update_option( '2x1_smartphone', 400, 200, true );
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
        'secondary' => __('Secondary Menu', 'myfirsttheme' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup

add_action( 'after_setup_theme', 'myfirsttheme_setup' );

// Remove Header things
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );	
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
// Remove junk from head
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
   } 
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
   
   /*

   function pm_remove_all_scripts(){
    if(in_array($GLOBALS['pagenow'], ['wp-login.php', 'wp-register.php']) || is_admin()) return; //Bail early if we're
    global $wp_scripts;
    $wp_scripts->queue = array();
  }
  
  add_action('wp_print_scripts', 'pm_remove_all_scripts', 100);
  
  function pm_remove_all_styles(){
    if(in_array($GLOBALS['pagenow'], ['wp-login.php', 'wp-register.php']) || is_admin()) return; //Bail early if we're
  
    global $wp_styles;
    $wp_styles->queue = array();
  }
  
  add_action('wp_print_styles', 'pm_remove_all_styles', 100);

  */