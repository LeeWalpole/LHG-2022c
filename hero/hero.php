<?php
// $kicker = get_sub_field('kicker') ?: get_cat_name( $category_id = $query_category );
echo $kicker = get_sub_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
echo $headline = get_sub_field('hero_headline') ?: get_the_title(); 
$subheadline = get_sub_field('hero_subheadline'); 
?>
