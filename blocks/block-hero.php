

<?php /*

<?php if( have_rows('header') ):
        while( have_rows('header') ) : the_row();

   

    // include( 'get_cta.php' ); // HERO CTA Variables live here 
    endwhile; endif; ?>

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
        <p>Cta here</p>
        <?php endif; ?>
    </header>
</section>


*/ ?>