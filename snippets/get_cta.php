<?php if( have_rows('cta') ) : 
    while( have_rows('cta') ): the_row(); 
$cta_1 = get_sub_field('cta_1');
if ($cta_1):
$cta_1_target = $cta_1['target'] ? $cta_1['target'] : '_self'; 
$cta_1_title = $cta_1['title'];
$cta_1_url = $cta_1['url'];
endif;

$cta_2 = get_sub_field('cta_2');
if ($cta_2):
$cta_2_target = $cta_2['target'] ? $cta_2['target'] : '_self'; 
$cta_2_title = $cta_2['title'];
$cta_2_url = $cta_2['url'];
endif;
endwhile; endif; // Hero CTA ?>