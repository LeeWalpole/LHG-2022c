<?php
// $kicker = get_sub_field('kicker') ?: get_cat_name( $category_id = $query_category );
$kicker = get_sub_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
$headline = get_sub_field('hero_headline') ?: get_the_title(); 
$subheadline = get_sub_field('hero_subheadline'); 
?>

<?php
echo $kicker = get_sub_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
echo $headline = get_sub_field('hero_headline') ?: get_the_title(); 
echo $subheadline = get_sub_field('hero_subheadline'); 
?>

<?php
echo $kicker = get_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
echo $headline = get_field('hero_headline') ?: get_the_title(); 
echo $subheadline = get_field('hero_subheadline'); 
?>
