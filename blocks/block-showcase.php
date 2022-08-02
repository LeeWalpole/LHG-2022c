<?php 
$category_id = get_sub_field('query_category'); 
?>


<div class="showcase-feature row-block">
    <div class="showcase-feature-main">
        <?php $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $category_id ); 
            $myposts = get_posts( $args ); 
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php
        // $category = get_the_category();
        // $kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
        // $headline = get_field('hero_headline') ?: get_the_title(); 
        // $subheadline = get_field('hero_subdeck'); // for some reason this didn't work
        // $teaser_image_url_large = get_the_post_thumbnail_url($post->ID, 'medium');
        // $teaser_image_url_medium = get_the_post_thumbnail_url($post->ID, 'medium');
        // $feature_youtube = get_field('feature_youtube'); 
        ?>

        <article class="teaser standard_teaser bg-white colspan-">
            <a href="<?php echo esc_url(get_permalink()); ?>" title="">
                <figure class="bg-white ratio" data-ratio="standard-teaser">
                    <picture>
                        <?php if ( get_the_post_thumbnail_url() ) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" />
                        <?php else : ?>
                        <img src="https://loremflickr.com/640/360" loading="lazy" />
                        <?php endif; ?>
                    </picture>
                </figure>
                <header class="header bg-white postfade">
                    <?php if( $kicker ): ?><?php echo $kicker; ?><?php endif;?>
                    <?php if( $headline ): ?><?php echo $headline; ?><?php endif;?>
                    <?php if($subdeck) : ?><p class="subdeck"><?php echo $subdeck; ?></p><?php endif; ?>
                </header>
            </a>
        </article><!-- / standard_teaser -->
        <?php endforeach; wp_reset_postdata();?>
    </div><!-- / showcase-feature-main -->

    <div class="showcase-feature-side">
        <?php
    $args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => $category_id; );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <?php
// $category = get_the_category();
// $kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
// $headline = get_field('hero_headline') ?: get_the_title();
?>
        <a href="<?php echo esc_url(get_permalink()); ?>" title=""
            class="showcase-feature-side-puff teaser bg-white">
            <figure>
                <?php if ( get_the_post_thumbnail_url() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" />
                <?php else : ?>
                <img src="https://loremflickr.com/640/360" loading="lazy" />
                <?php endif; ?>
            </figure>
            <header class="puff-header">
                <?php if( $kicker ): ?><?php echo $kicker; ?><?php endif;?>
                <?php if( $headline ): ?><?php echo $headline; ?><?php endif;?>
                <?php if($subheadline) : ?><p class="subheadline"><?php echo $subheadline; ?></p><?php endif; ?>
            </header>
        </a><!-- showcase-feature-side-puff -->

        <?php endforeach;  wp_reset_postdata();?>

    </div><!-- showcase-feature-side -->





</div>