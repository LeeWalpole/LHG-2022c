<?php get_header(); // includes nav and hero and main ?>


<?php // get_template_part( 'snippets/snippet-hero' ); ?>





<?php if ( have_posts() ) : ?>
<div class="showcase-feature row-block">
    <div class="showcase-feature-main">
        <?php while ( have_posts() ) : the_post();  ?>

        <?php
        $category = get_the_category();
        $kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
        $headline = get_field('hero_headline') ?: get_the_title(); 
        $subdeck = get_field('hero_subdeck'); // for some reason this didn't work
        $teaser_image_url_large = get_the_post_thumbnail_url($post->ID, 'medium');
        $teaser_image_url_medium = get_the_post_thumbnail_url($post->ID, 'medium');
        $feature_youtube = get_field('feature_youtube'); 
        ?>

        <?php if( $wp_query->current_post  <= 0 ) : ?>
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
                    <strong class="kicker"><?php echo $kicker; ?></strong>
                    <h2 class="headline"><?php echo $headline; ?></h2>
                    <?php if($subdeck) : ?><p class="subdeck"><?php echo $subdeck; ?></p><?php endif; ?>
                </header>
            </a>
        </article>
        <?php endif; // first post ?>
        <?php endwhile; rewind_posts();  ?>
    </div>

    <?php endif; // Page Has Posts ?>

    <div class="showcase-feature-side">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php
$category = get_the_category();
$headline = get_field('hero_headline') ?: get_the_title();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
?>
        <?php if( $wp_query->current_post  >= 1  && $wp_query->current_post  <= 3  ) : ?>

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
                <strong class="kicker"><?php echo $kicker; ?></strong>
                <h6 class="headline"><?php echo $headline; ?></h6>
                </h6>
            </header>
        </a>
        <?php endif; // posts 2+ ?>
        <!-- endwhile below -->
        <?php endwhile; rewind_posts(); ?>
        <!-- endwhile above -->
    </div>

</div>





<?php if ( have_posts() ) : ?>

<div class="bg-offwhite row-block">
    <div class="grid grid-gap teasers standard_teasers">



        <?php while ( have_posts() ) : the_post(); ?>

        <?php if( $wp_query->current_post  >= 4   ) : ?>


        <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feature_youtube = get_field('feature_youtube'); 
?>

        <article class="bg-white teaser">
            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                value="<?php echo esc_attr($headline); ?>">
                <figure class="bg-white  ratio <?php if ($feature_youtube) : echo "video_teaser"; endif; ?>"
                    data-ratio="standard-teaser">
                    <?php if ( get_the_post_thumbnail_url() ) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" />
                    <?php else : ?>
                    <img src="https://loremflickr.com/640/360" loading="lazy" />
                    <?php endif; ?>
                </figure>
                <header class="teaser-header bg-white">
                    <strong class="kicker"><?php echo $kicker; ?></strong>
                    <h4 class="headline"><?php echo $headline; ?></h4>
                </header>
            </a>
        </article>
        <?php endif; // (have posts) ?>
        <?php endwhile; ?>

    </div>
</div>
<?php endif; // (have posts) ?>









<?php // get_template_part( 'snippets/newsletter' ); ?>

<?php get_footer();  ?>