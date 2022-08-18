<?php // Headlines for Hero
$hero_kicker = get_field('hero_kicker');
$hero_headline = get_field('hero_headline');
$hero_subheadline = get_field('hero_subheadline'); 
?>

<div class="hero">
    <section class="hero-stack">
        <header class="header">
            <?php if ($hero_kicker) : ?><strong class="kicker"><?php echo $hero_kicker; ?></strong><?php endif;?>
            <?php if ($hero_headline) : ?><h3 class="headline"><?php echo $hero_headline; ?></h3><?php endif;?>
            <?php if ($hero_subheadline) : ?><div class="subheadline"><?php echo $hero_subheadline; ?></div><?php endif;?>
            <?php if ($hero_cta_1) : ?>
            <?php include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; ?>
        </header>
    </section>
</div>