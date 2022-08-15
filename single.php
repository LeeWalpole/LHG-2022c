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
        <?php if ($subheadline) : ?><div class="hero_subheadline"><?php echo $subheadline ?></div><?php endif; ?>
        <?php if ($hero_cta_1) : ?>
        <?php // include( 'cta.php' ); // Call to Action Buttons if available  ?>
        <?php include( 'get_cta.php' ); ?>
        <?php endif; ?>
    </header>
</section>

<?php endwhile; // hero_header
    endif; // hero_header ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php // get_template_part( 'snippets/snippet-hero' ); ?>
<?php // get_template_part( 'snippets/snippet-feature' ); ?>


<?php if ( !empty( get_the_content() ) ) : ?>

<div class="article-block">

    <?php if ( get_the_post_thumbnail_url() ) : ?>
    <figure class="feature colspan-12">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="eager">
    </figure>
    <?php endif; ?>

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

            <?php get_template_part( 'snippets/ad', 'header' ); ?>


            <?php the_content(); ?>

            <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
        </article>


        <aside class="colspan-3 bg-white sidebar">

            

            <aside id="chapters" class="bg-offblack chapters" data-theme="dark">
                <!-- Chapters appear Below -->
            </aside>
            <div class="sticky-sidebar sticky-scroll">

            <?php get_template_part( 'snippets/ad', 'sidebar' ); ?>
            
            </div>
        </aside>

    </section>
    <?php endif; // !empty( get_the_content() ?>

    	
    <?php 
$post_id = get_the_ID();
$load_scripts = get_field('load_scripts', $post_id);
if( $load_scripts && in_array('awin', $load_scripts) ) {
echo "yes";
}
?>

    <?php endwhile; endif; // loop ?>

    <?php get_template_part( 'snippets/related' ); // col-4 ?>

    <?php get_template_part( 'blocks/blocks' ); ?>


    <?php get_footer();  ?>