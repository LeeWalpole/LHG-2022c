<?php  
add_action('after_setup_theme', 'cleanup');
function cleanup() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_head', 'wp_resource_hints', 2);
  remove_action('wp_head', 'rel_canonical');
  remove_action('wp_head', 'rel_alternate');
  // remove_action('wp_head', 'wp_oembed_add_discovery_links');
  // remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_action('wp_head', 'rest_output_link_wp_head');
  remove_action('rest_api_init', 'wp_oembed_register_route');
  remove_action('wp_print_styles', 'print_emoji_styles');
  // remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
  // remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
  // add_filter('embed_oembed_discover', '__return_false');
  add_filter('show_admin_bar', '__return_false');
}
function dm_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  }
  add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );
?>
<?php 
//* Dequeue Jetpack stuff
function tj_dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
   }  
add_action( 'wp_enqueue_scripts', 'tj_dequeue_devicepx' );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );
add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
?>
<?php 
add_action( 'wp_print_scripts', 'pp_deregister_javascript', 99 );
function pp_deregister_javascript() {
	wp_deregister_script( 'pp-del-avatar-script' );
}
add_action( 'wp_print_styles', 'pp_deregister_styles', 99 );
function pp_deregister_styles() {
	wp_deregister_style( 'ppcore' );
}
?>