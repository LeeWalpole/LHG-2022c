<?php
$category = get_the_category();
$category_link = get_category_link( $category[0]->term_id );
$showcase_heading = "MORE LIKE THIS";
?>
<?php
$related = get_posts( 
array( 
    'category__in' => wp_get_post_categories( $post->ID ), 
    'numberposts'  => 1, 
    'post__not_in' => array( $post->ID ) 
) 
);
if( $related ) : ?>

<div class="block-related">


    <div class="hero">
        <section class="hero-stack">
            <header class="header">
                <strong class="kicker">RELATED</strong>
                <h6 class="headline">More like this...</h6>
            </header>
        </section>
    </div>

    <div class="showcase-feature row-block">
        <div class="showcase-feature-main">
            <?php foreach( $related as $post ) :  setup_postdata($post);  ?>
            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feature_youtube = get_field('feature_youtube'); 
?>

            <article class="teaser standard_teaser bg-white colspan-">
                <a href="http://localhost:10038/party-holidays/best-party-holidays/"
                    title="Best party holidays and clubbing destinations in 2022" value="Best lads holidays in 2022">
                    <figure class="bg-white ratio" data-ratio="standard-teaser">
                        <picture>
                            <img src="https://loremflickr.com/640/360" loading="lazy" />
                        </picture>
                    </figure>
                    <header class="header bg-white postfade">
                        <strong class="kicker"><?php echo $kicker; ?></strong>
                        <h2 class="headline"><?php echo $headline; ?></h2>
                        <?php if($subdeck) : ?><p class="subdeck"><?php echo $subdeck; ?></p><?php endif; ?>
                    </header>
                </a>
            </article>
            <?php endforeach; ?>
        </div>

        <?php endif; // Page Has Posts ?>




        <?php
$category = get_the_category();
$category_link = get_category_link( $category[0]->term_id );
$showcase_heading = "MORE LIKE THIS";
?>



        <?php 
$related = get_posts( 
    array( 
        'category__in' => wp_get_post_categories( $post->ID ), 
        'numberposts'  => 3, 
        'offset'  => 1, 
        'post__not_in' => array( $post->ID ) 
    ) 
);
if( $related ) : ?>

        <div class="showcase-feature-side">

            <?php foreach( $related as $post ) : setup_postdata($post); ?>

            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feature_youtube = get_field('feature_youtube'); 
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
                    <strong class="kicker"><?php echo $kicker; ?></strong>
                    <h6 class="headline"><?php echo $headline; ?></h6>
                    </h6>
                </header>
            </a>

            <!-- endwhile below -->
            <?php endforeach; ?>
            <!-- endwhile above -->

        </div>

    </div>

    <?php endif; ?>

</div>