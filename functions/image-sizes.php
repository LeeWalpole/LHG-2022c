<?php 
add_theme_support( 'post-thumbnails' );
add_image_size( 'fix-1', 685, false );
add_image_size( 'fix-2', 610, false );
add_image_size( 'crop-100x100', 100, 100, true ); // puff images
/* Change image crops which are normally saved in admin */
add_action( 'init', 'wpdocs_change_default_image_sizes' );
function wpdocs_change_default_image_sizes() {
    remove_image_size( 'thumbnail' );
    remove_image_size( 'medium' );
    remove_image_size( 'medium_large' );
    remove_image_size( 'large' );
    add_image_size( 'thumbnail', 360, 240, true );
    add_image_size( 'medium', 640, 9999, false );
    add_image_size( 'medium_large', 960, 9999, false );
    add_image_size( 'large', 1280, 9999, false );
}
// add_image_size( 'desktop+', 1920, 1080, true ); // 1920 full
// add_image_size( 'desktop', 1366, 768, true ); // desktop full
// add_image_size( 'smartphone', 360, 720, true ); // iPhone full
// add_image_size( 'tablet', 768, 1024, true ); // Tablet Full	
// add_image_size( 'strap', 360, 120, true ); // 3:1 strap
// add_image_size('logo-image', 9999, 100, false);
// add_image_size( 'strap-desktop', 768, 256, true ); // strap
// add_image_size( 'crop-100x100', 100, 100, true ); // 1:1 teaser
// add_image_size( 'crop-360', 360, 9999, false ); // 300 pixels wide (and unlimited height)
// add_image_size( 'crop-360x360', 360, 360, true ); // 1:1 teaser
// 
?>