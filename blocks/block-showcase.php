<?php

// Check rows exists.
if( have_rows('repeater_field_name') ):

    // Loop through rows.
    while( have_rows('repeater_field_name') ) : the_row();

        $teaser_count = -1;
        $query_category = get_sub_field('query_category');
        // $category_link = get_category_link( $teaser_category);

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>






<div class="showcase-feature row-block">
    <div class="showcase-feature-main">
        <?php
    $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $query_category );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php
        $category = get_the_category();
        $kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
        $headline = get_field('hero_headline') ?: get_the_title(); 
        $subheadline = get_field('hero_subdeck'); // for some reason this didn't work
        $teaser_image_url_large = get_the_post_thumbnail_url($post->ID, 'medium');
        $teaser_image_url_medium = get_the_post_thumbnail_url($post->ID, 'medium');
        $feature_youtube = get_field('feature_youtube'); 
        ?>

        <article class="teaser standard_teaser bg-white colspan-">
            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>">
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
        </article>
        <?php endforeach; 
    wp_reset_postdata();?>
    </div><!-- / showcase-feature-main -->

    <div class="showcase-feature-side">
        <?php
    $args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => $query_category; );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title();
?>
        <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
            class="showcase-feature-side-puff teaser bg-white">
            <figure>
                <?php if ( get_the_post_thumbnail_url() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" />
                <?php else : ?>
                <img src="https://loremflickr.com/640/360" loading="lazy" />
                <?php endif; ?>
            </figure>
            <header class="puff-header">
                <?php 
/*
                <strong class="kicker"><?php echo $kicker; ?></strong>
                <h6 class="headline"><?php echo $headline; ?></h6>

                */
                ?>

                <?php if( $kicker ): ?><?php echo $kicker; ?><?php endif;?>
                <?php if( $headline ): ?><?php echo $headline; ?><?php endif;?>
                <?php if($subheadline) : ?><p class="subheadline"><?php echo $subheadline; ?></p><?php endif; ?>


                </h6>
            </header>
        </a>

        <?php endforeach; 
    wp_reset_postdata();?>

    </div>





</div>