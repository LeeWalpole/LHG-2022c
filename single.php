<?php get_header(); // includes nav and hero ?>

<?php if( have_rows('hero_header') ):
        while( have_rows('hero_header') ) : the_row();?>

<?php 
        $kicker = get_sub_field('kicker');
        $headline = get_sub_field('headline');
        $subheadline = get_sub_field('subheadline');
        $hero_cta_1 = get_sub_field('cta_1');
        $hero_cta_1_target = $hero_cta_1['target'] ? $hero_cta_1['target'] : '_self'; 
        $hero_cta_1_title = $hero_cta_1['title'];
        $hero_cta_1_url = $hero_cta_1['url'];
        $hero_cta_2 = get_sub_field('cta_2');
        $hero_cta_2_target = $hero_cta_2['target'] ? $hero_cta_2['target'] : '_self'; 
        $hero_cta_2_title = $hero_cta_2['title'];
        $hero_cta_2_url = $hero_cta_2['url'];
        ?>



<section class="hero-stack">
    <header class="header w-max m-auto">
        <?php if ($kicker) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
        <?php if ($headline) : ?><h2 class="headline"><?php echo $headline ?></h2><?php endif; ?>
        <?php if ($subheadline) : ?><div class="hero_subheadline"><?php echo $subheadline ?></div>
        <?php endif; ?>
        <?php if ($hero_cta_1) : ?>
        <?php // include( 'cta.php' ); // Call to Action Buttons if available  ?>
        <?php include( 'get_cta.php' ); ?>
        <?php endif; ?>
    </header>
</section>

<?php endwhile; 
    endif; ?>



<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php // get_template_part( 'snippets/snippet-hero' ); ?>
<?php // get_template_part( 'snippets/snippet-feature' ); ?>

<style>
    @media (min-width: 821px) {
        .article-block .feature {
            padding: 0 !important;
        }
    }
</style>


<?php if ( !empty( get_the_content() ) ) : ?>

<?php get_template_part( 'snippets/ad', 'header' ); ?>


<div class="article-block">

    <figure class="feature colspan-12">
        <?php if ( get_the_post_thumbnail_url() ) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="eager">
        <?php else : ?>
        <img src="https://i.stack.imgur.com/y9DpT.jpg" loading="lazy" class="lazyload" loading="lazy" />
        <?php endif; ?>
    </figure>

    <section class="grid bg-white w-max m-auto">
        <article class="article-body colspan-9 w-safe m-auto">
            <header class="header w-max">
                <!-- <strong class="kicker">Kicker Category</strong> -->
                <h1 class="article-title"><?php the_title(); ?></h1>
                <?php if ( ! has_excerpt() ) { ?>
                <?php } else {?>
                <em class="article-description"><?php echo get_the_excerpt();?></em>
                <?php } ?>
            </header>

            <?php get_template_part( 'snippets/byline' ); ?>


            <?php the_content(); ?>

            <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
        </article>
        <?php // get_template_part( 'snippets/ad', 'sidebar' ); ?>

        <aside class="colspan-3 bg-white sidebar">


            <aside id="chapters" class="bg-offblack chapters" data-theme="dark">
                <!-- Chapters appear Below -->
            </aside>
            <div class="sticky-sidebar sticky-scroll">

                <?php get_template_part( 'snippets/ad', 'sidebar' ); ?>

            </div>
        </aside>

    </section>
    <?php endif; ?>

    <?php endwhile; endif; ?>

    <?php get_template_part( 'snippets/related' ); // col-4 ?>

    <?php get_template_part( 'blocks/blocks' ); ?>


    <?php get_footer();  ?>