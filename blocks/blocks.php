<?php if(have_rows('blocks')):  while (have_rows('blocks')) : the_row();  ?>


<?php if( get_row_layout() == 'hero_block' ) { ?>

<?php get_template_part( 'blocks/block-hero' ); ?>

<script>
console.log("block hero");
</script>


<?php } elseif( get_row_layout() == 'showcase_block' ) { ?>
<?php // get_template_part( 'blocks/block-showcase' ); ?>


<?php $category_id = get_sub_field('query_category');  ?>

<?php
$lastposts = get_posts( array(
  'posts_per_page' => 1, 
  'offset'=> 0, 
  'category' => $category_id
) );
if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    <?php
    endforeach; 
    wp_reset_postdata();
}
?>



<script>
console.log("block showcase");
</script>


<?php } else {  
    //  relax();
    }  // end get_row_layout and do nothing ?>

<?php endwhile; endif; ?>