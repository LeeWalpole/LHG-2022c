<?php 
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
        // Add parent.
        $acf_settings = acf_add_options_page(array(
            'page_title'  => __('Theme Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));
        $acf_settings_navigation = acf_add_options_page(array(
            'page_title'  => __('Site Navigation'),
            'menu_title'  => __('Nav Settings'),
            'parent_slug' => $acf_settings['menu_slug'],
		));
        $acf_settings_navigation = acf_add_options_page(array(
            'page_title'  => __('Ads / Affiliate Settings'),
            'menu_title'  => __('Ads / Affiliates'),
            'parent_slug' => $acf_settings['menu_slug'],
		));
    }
}
?>