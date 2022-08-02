<?php $category_id = get_sub_field('query_category');  ?>

<div class="showcase-feature row-block">

<!-- Main Feature Below -->
    <div class="showcase-feature-main">
    <?php
    $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $category_id );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endforeach; 
    wp_reset_postdata();?>
<!-- Main Feature Above -->


<!-- Puff Teasers Below -->
<div class="showcase-feature-side">
    <?php
    $args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => $category_id );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endforeach; 
    wp_reset_postdata();?>
<!-- Puff Teasers Above -->

</div>




