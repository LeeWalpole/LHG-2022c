<?php
/**
 * Lads Holiday Guide 2022 functions and definitions
 */
add_action( 'after_setup_theme', 'twentytwentytwo_support' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );    
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
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
    // add_theme_support( 'title-tag' );
    // add_theme_support( 'post-thumbnails' );    
    // add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    // add_theme_support( 'html5', [ 'script', 'style' ], array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    // update_option( 'thumbnail_size_w', 360 );
    // update_option( 'thumbnail_size_h', 9999 );
    // update_option( 'thumbnail_crop', false );
    // update_option( 'medium_size_w', 640 );
    // update_option( 'medium_size_h', 9999 );
    // update_option( 'medium_crop', false );
    // update_option( 'medium_large_size_w', 640 );
    // update_option( 'medium_large_size_h', 9999 );
    // update_option( 'medium_large_crop', false );
    // update_option( 'large_size_w', 1920 );
    // update_option( 'large_size_h', 9999 );
    // update_option( 'large_crop', true );
    // update_option( '2x1_desktop_big', 1920, 960, true );
    // update_option( '2x1_desktop', 1366, 683, true );
    // update_option( '2x1_smartphone', 400, 200, true );
    /*
    add_image_size( 'teaser_standard', 360, 240, true );
    add_image_size( 'teaser_standard', 360, 240, true );
    add_image_size( 'w-desktop_plus', 1920, false ); // 1920 full
    add_image_size( 'w-desktop', 1366, false ); // desktop full
    add_image_size( 'w-smartphone', 360, false ); // iPhone full
    add_image_size( 'w-tablet', 768, false ); // Tablet Full
    add_image_size( 'nav_logo_smartphone', 9999, 50, false );
    add_image_size( 'nav_logo_desktop', 9999, 72, false );
    add_image_size( 'hero_logo_smartphone', 200, false );
    add_image_size( 'hero_logo_desktop', 400, false );
    add_filter('img_caption_shortcode_width', '__return_false');
    */
    // include_once( 'functions/acf.php' );
    // include_once( 'functions/acf-options.php' );
    // include_once( 'functions/lazyload-video.php' );
    // include_once( 'functions/postlist-thumbnails.php' );
    // include_once( 'functions/header-junk.php' );
    // include_once( 'functions/lazyload-images.php' );
      
    //Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
   } 
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


/**
 * Disable the emoji's
 */
function disable_emojis() {
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
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Move scripts to footer
 */
add_action('init', function () {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    //add_action('wp_footer', 'prnt_emoji_detection_script', 5);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
});

//REMOVE GUTENBERG BLOCK LIBRARY CSS FROM LOADING ON FRONTEND
function remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
    wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
    }
    add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 ); 
    
    // Remove Global Styles and SVG Filters from WP 5.9.1 - 2022-02-27
function remove_global_styles_and_svg_filters() {
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action('init', 'remove_global_styles_and_svg_filters');
// This snippet removes the Global Styles and SVG Filters that are mostly if not only used in Full Site Editing in WordPress 5.9.1+
// Detailed discussion at: https://github.com/WordPress/gutenberg/issues/36834
// WP default filters: https://github.com/WordPress/WordPress/blob/7d139785ea0cc4b1e9aef21a5632351d0d2ae053/wp-includes/default-filters.ph

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
function remove_global_styles(){
    wp_dequeue_style( 'global-styles' );
}