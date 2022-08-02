<?php // Headlines for Hero
echo $kicker = get_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
echo $headline = get_field('hero_headline') ?: get_the_title(); 
echo $subheadline = get_field('hero_subheadline'); 
?>



<?php if (is_tax() || is_category() || is_tag() || is_post_type_archive() || is_front_page() )  { ?>

<div class="hero">
    <section class="hero-stack">
        <header class="header">
            <?php if ($headline) : ?><h1 class="headline"><?php echo $headline ?></h1><?php endif; ?>
            <?php if ($subheadline) : ?><div class="subheadline"><?php echo $subheadline ?></div>
            <?php /* if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; */ ?>
        </header>
    </section>
</div>

<?php } elseif (is_single() )  { ?>

<div class="hero">
    <section class="hero-stack">
        <header class="header">
            <?php if ($kicker) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
            <?php if ($headline) : ?><h1 class="headline"><?php echo $headline ?></h1><?php endif; ?>
            <?php if ($subheadline) : ?><div class="subheadline"><?php echo $subheadline ?></div>
            <?php /* if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; */ ?>
        </header>
    </section>
</div>

<?php } else { ?>

    <div class="hero">
    <section class="hero-stack">
        <header class="header">
            <?php if ($headline) : ?><h1 class="headline"><?php echo $headline ?></h1><?php endif; ?>
            <?php if ($subheadline) : ?><div class="subheadline"><?php echo $subheadline ?></div>
            <?php /* if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; */ ?>
        </header>
    </section>
</div>

<?php } ?>