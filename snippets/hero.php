<?php if (is_single() ) { ?>

<?php if( have_rows('hero_header') ):
        while( have_rows('hero_header') ) : the_row();

    $hero_kicker = get_sub_field('hero_header_kicker');
    $hero_headline = get_sub_field('headline');
    $hero_subheadline = get_sub_field('subheadline');

    $hero_cta_1 = get_sub_field('cta_1');
    $hero_cta_1_target = $hero_cta_1['target'] ? $hero_cta_1['target'] : '_self'; 
    $hero_cta_1_title = $hero_cta_1['title'];
    $hero_cta_1_url = $hero_cta_1['url'];

    $hero_cta_2 = get_sub_field('cta_2');
    $hero_cta_2_target = $hero_cta_2['target'] ? $hero_cta_2['target'] : '_self'; 
    $hero_cta_2_title = $hero_cta_2['title'];
    $hero_cta_2_url = $hero_cta_2['url'];

    include( 'get_cta.php' ); // HERO CTA Variables live here 
    endwhile; endif; ?>

<?php 
$hero_class = "hero-single";
    $category = get_the_category();
    $kicker = $hero_kicker ?: $category[0]->cat_name;
    $headline = $hero_headline ?: get_the_title(); 
    $subheadline = $hero_subheadline; // for some reason this didn't work
    ?>


<?php } elseif (is_page() ) { ?>

<?php if( have_rows('hero_header') ):
        while( have_rows('hero_header') ) : the_row();

    $hero_kicker = get_sub_field('hero_header_kicker');
    $hero_headline = get_sub_field('headline');
    $hero_subheadline = get_sub_field('subheadline');

    $hero_cta_1 = get_sub_field('cta_1');
    $hero_cta_1_target = $hero_cta_1['target'] ? $hero_cta_1['target'] : '_self'; 
    $hero_cta_1_title = $hero_cta_1['title'];
    $hero_cta_1_url = $hero_cta_1['url'];

    $hero_cta_2 = get_sub_field('cta_2');
    $hero_cta_2_target = $hero_cta_2['target'] ? $hero_cta_2['target'] : '_self'; 
    $hero_cta_2_title = $hero_cta_2['title'];
    $hero_cta_2_url = $hero_cta_2['url'];

    include( 'get_cta.php' ); // HERO CTA Variables live here 
    endwhile; endif; ?>

<?php 
$hero_class = "hero-page";
    $category = get_the_category();
    $kicker = $hero_kicker ?: $category[0]->cat_name;
    $headline = $hero_headline ?: get_the_title(); 
    $subheadline = $hero_subheadline; // for some reason this didn't work
    ?>

<?php } elseif (is_tax() || is_category() || is_tag() || is_post_type_archive() )  { ?>

<?php 
$hero_class = "hero-overlap";
$headline = single_cat_title( '', false );
$subheadline = get_the_archive_description("", false);
?>


<?php } elseif ( is_author() ) { ?>

<?php 
$hero_class = "hero-author";
$headline = get_the_author( "", false );
$author_id = get_the_author_meta('ID');
$subheadline = get_the_author_meta('description');	    
?>

<?php } else  { ?>

<?php 
$category = get_the_category();
$kicker = get_field('kicker') ?: $category[0]->cat_name;
$get_headline = get_field('headline') ?: get_the_title(); 
$headline = '<h2 class="headline">'.$get_headline.'</h2>';
$subheadline = get_field('subheadline'); // for some reason this didn't work


?>

<?php } // end hero header conditions ?>

<div class="hero <?php if ($hero_class) : echo $hero_class; endif; ?>">

    <?php if (is_tax() || is_category() || is_tag() || is_post_type_archive() || is_front_page() )  { ?>


    <section class="hero-stack">
        <header class="header">
            <?php if ($headline) : ?><h1 class="headline"><?php echo $headline ?></h1><?php endif; ?>
            <?php if ($subheadline) : ?><div class="hero_subheadline"><?php echo $subheadline ?></div>
            <?php endif; ?>
            <?php if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; ?>
        </header>
    </section>
</div>

<?php } elseif (is_single() )  { ?>


<section class="hero-stack">
    <header class="header w-max m-auto">
        <?php if ($kicker) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
        <?php if ($headline) : ?><h2 class="headline"><?php echo $headline ?></h2><?php endif; ?>
        <?php if ($subheadline) : ?><div class="hero_subheadline"><?php echo $subheadline ?></div>
        <?php endif; ?>
        <?php if ($hero_cta_1) { ?>
        <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
        <?php } else { ?>
        <div class="buttons">
            <a href="#article" title="Read the article" target="<?php echo esc_attr( $cta_1_target ); ?>"
                class="button">READ</a>
            <a href="javascript:void(0);" data-target="pop-share" data-toggle="modal" title="Read the article"
                target="<?php echo esc_attr( $cta_1_target ); ?>" class="button">SHARE</a>
        </div>
        <?php } ?>
    </header>
</section>

<?php } else {?>


<div class="hero hero-overlap">
    <section class="hero-stack">
        <header class="header w-max m-auto">
            <?php if ($kicker) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
            <?php if ($headline) : ?><h2 class="headline"><?php echo $headline ?></h2><?php endif; ?>
            <?php if ($subheadline) : ?><div class="hero_subheadline"><?php echo $subheadline ?></div>
            <?php endif; ?>
            <?php if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; ?>
        </header>
    </section>
</div>

<?php } ?>

</div>