<?php
// $kicker = get_sub_field('kicker') ?: get_cat_name( $category_id = $query_category );
$kicker = get_sub_field('hero_kicker') ?: wp_get_post_terms( get_the_ID(), 'category' )[0]->name;
$headline = get_sub_field('hero_headline') ?: get_the_title(); 
$subheadline = get_sub_field('hero_subheadline'); 
?>


<?php if (is_single() )  { ?>


<section class="hero-stack">
    <header class="header w-max m-auto">
        <?php if( $kicker ): ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif;?>
        <?php if( $headline ): ?><h1 class="headline"><?php echo $headline; ?></h1><?php endif;?>
        <?php if( $subheadline ) : ?><p class="subheadline"><?php echo $subheadline; ?></p><?php endif; ?>
        <?php if ($hero_cta_1) { ?>
        <?php // include( 'cta.php' ); // Call to Action Buttons if available  ?>
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

<?php } else { ?>

<div class="hero hero-overlap">
    <section class="hero-stack">
        <header class="header w-max m-auto">
            <?php if( $kicker ): ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif;?>
            <?php if( $headline ): ?><h1 class="headline"><?php echo $headline; ?></h1><?php endif;?>
            <?php if( $subheadline ) : ?><p class="subheadline"><?php echo $subheadline; ?></p><?php endif; ?>
            <?php endif; ?>
            <?php if ($hero_cta_1) : ?>
            <?php // include( 'cta.php' ); // Call to Action Buttons if available  ?>
            <?php endif; ?>
        </header>
    </section>
</div>




<?php /*
<?php switch ($hero_feature) { case 'feature-slideshow': ?>
<?php get_template_part( 'hero/feature', 'slideshow' ); ?>
<?php break; case 'feature-video': ?>
<?php get_template_part( 'hero/feature', 'video' ); ?>
<?php break; default: ?>
*/?>