<?php // Lads Holiday Guide 2022 functions and definitions
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
wp_dequeue_style( 'wp-block-library' );
wp_dequeue_style( 'wp-block-library-theme' );
wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
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
?>