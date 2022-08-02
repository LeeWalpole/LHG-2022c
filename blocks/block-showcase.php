<?php $query_category = get_sub_field('query_category');  ?>

<!--  Showcase Block Below -->
<div class="showcase-feature row-block">

<!-- Main Feature Below -->
    <div class="showcase-feature-main">
        <?php
    $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category' => $query_category );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php
$kicker = get_sub_field('kicker') ?: get_cat_name( $category_id = $query_category );
$headline = get_sub_field('headline') ?: get_the_title(); 
$subheadline = get_sub_field('subheadline') ?: "";
?>

        <article class="teaser standard_teaser bg-white colspan-">
            <a href="<?php the_permalink(); ?>" title="<?php echo $headline; ?>">
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
                    <?php if( $kicker ): ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif;?>
                    <?php if( $headline ): ?><h2 class="headline"><?php echo $headline; ?></h2><?php endif;?>
                    <?php if( $subheadline ) : ?><p class="subheadline"><?php echo $subheadline; ?></p><?php endif; ?>
                </header>
            </a>
        </article>

        <?php endforeach; 
    wp_reset_postdata();?>
        <!-- Main Feature Above -->
    </div>

    <!-- Puff Teasers Below -->
    <div class="showcase-feature-side">
        <?php
    $args = array( 'posts_per_page' => 3, 'offset'=> 1, 'category' => $query_category );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php
$kicker = get_sub_field('kicker') ?: get_cat_name( $category_id = $query_category );
$headline = get_sub_field('headline') ?: get_the_title(); 
$subheadline = get_sub_field('subheadline') ?: "";
?>


        <a href="<?php the_permalink(); ?>" title="<?php echo $headline; ?>"
            class="showcase-feature-side-puff teaser bg-white">
            <figure>
                <?php if ( get_the_post_thumbnail_url() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" />
                <?php else : ?>
                <img src="https://loremflickr.com/640/360" loading="lazy" />
                <?php endif; ?>
            </figure>
            <header class="puff-header">
                <?php if( $kicker ): ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif;?>
                <?php if( $headline ): ?><h4 class="headline"><?php echo $headline; ?></h4><?php endif;?>
                <?php if( $subheadline ) : ?><p class="subheadline"><?php echo $subheadline; ?></p><?php endif; ?>
            </header>
        </a><!-- showcase-feature-side-puff -->


        <?php endforeach; 
    wp_reset_postdata();?>
    </div>
    <!-- Puff Teasers Above -->

</div>
<!--  Showcase Block Above -->