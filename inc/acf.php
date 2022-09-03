<?php 

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
        // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;
}


function init_lw_blocks() {
 if (function_exists('acf_register_block_type')){


	 acf_register_block_type(array(
		 'name' => 'lw_blocks_qa',
		 'title' => __('LW Q&A Block'),
		 'description' => __('LW Q&A block.'),
		 'keywords' => array('lw_blocks_qa', 'qa', 'questions'),
		 'category' => 'embed',
		 'icon' => 'book-alt',
		 'render_template' => 'template-parts/blocks/lw_blocks_qa.php',
		 'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/lw_blocks_qa.css'
	 ));

     acf_register_block_type(array(
        'name' => 'lw_blocks_cta',
        'title' => __('LW CTA Block'),
        'description' => __('LW CTA block.'),
        'keywords' => array('lw_blocks_cta', 'cta', 'link'),
        'category' => 'embed',
        'icon' => 'book-alt',
        'render_template' => 'template-parts/blocks/lw_blocks_cta.php',
        'enqueue_style' => get_stylesheet_directory_uri() . '/template-parts/blocks/lw_blocks_cta.css'
    ));

     
 }
}





add_action('acf/init', 'init_lw_blocks');