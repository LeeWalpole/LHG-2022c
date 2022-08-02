<?php // Headlines for Hero
echo $hero_kicker = get_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
echo $hero_headline = get_field('hero_headline') ?: get_the_title(); 
echo $hero_subheadline = get_field('hero_subheadline'); 
?>



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

