<?php // Headlines for Hero
$hero_kicker = get_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
$hero_headline = get_field('hero_headline') ?: get_the_title(); 
$hero_subheadline = get_field('hero_subheadline'); 
?>


<?php if (is_single() )  { ?>


<?php // Headlines for Hero
$hero_kicker = get_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
$hero_headline = get_field('hero_headline') ?: get_the_title(); 
$hero_subheadline = get_field('hero_subheadline'); 
?>

<div class="hero">
    <section class="hero-stack">
        <header class="header">
            <strong class="kicker"><?php echo $hero_kicker; ?></strong>
            <h3 class="headline"><?php echo $hero_headline; ?></h3>
            <div class="subheadline"><?php echo $hero_subheadline; ?></div>
            <?php /* if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; */ ?>
        </header>
    </section>
</div>

<?php } elseif (is_tax() || is_category() || is_tag() || is_post_type_archive() )  { ?>

    <div class="hero">
    <section class="hero-stack">
        <header class="header">
            <h1 class="headline"><?php echo $hero_headline; ?></h1>
            <div class="subheadline"><?php echo $hero_subheadline; ?></div>
            <?php /* if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; */ ?>
        </header>
    </section>
</div>

<?php } else {?>

<?php // Headlines for Hero
$hero_headline = get_field('hero_headline') ?: get_the_title(); 
$hero_subheadline = get_field('hero_subheadline'); 
?>

<div class="hero">
    <section class="hero-stack">
        <header class="header">
            <strong class="kicker"><?php echo $hero_kicker; ?></strong>
            <h1 class="headline"><?php echo $hero_headline; ?></h1>
            <div class="subheadline"><?php echo $hero_subheadline; ?></div>
            <?php /* if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; */ ?>
        </header>
    </section>
</div>

<?php } ?>

