<?php if(have_rows('blocks')):  while (have_rows('blocks')) : the_row();  ?>


<?php if( get_row_layout() == 'hero_block' ) { ?>

<?php get_template_part( 'blocks/block-hero' ); ?>

<script>
console.log("block hero");
</script>


<?php } elseif( get_row_layout() == 'showcase_block' ) { ?>
<?php // get_template_part( 'blocks/block-showcase' ); ?>


<?php $category_id = get_sub_field('query_category');  ?>

<ul>
    <?php
    $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => $category_id );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endforeach; 
    wp_reset_postdata();?>


    </ul>



<script>
console.log("block showcase");
</script>


<?php } else {  
    //  relax();
    }  // end get_row_layout and do nothing ?>

<?php endwhile; endif; ?>