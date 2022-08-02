<!-- *** HERO BELOW *** -->
<?php if (have_rows('header', $post->ID) ) : ?>
<?php while( have_rows('header',$post->ID) ) : the_row(); ?>
<?php
$acf_kicker = get_sub_field('kicker');
$acf_headline = get_sub_field('headline');
$acf_lead = get_sub_field('lead');
$acf_more = get_sub_field('more');
$acf_list = get_sub_field('list');
$more_text = get_sub_field('more_text');
?>
<?php endwhile; ?>
<?php endif; //  end have_rows('hero_header' ?>

<?php 
$kicker = $acf_kicker ?: "<span>INSPIRED</span> PRESENTS"; 
$headline = $acf_headline ?: the_title(); 
$lead = $acf_lead;
?>
<style>
.p-text-box p {
    font-size: var(--p);
    margin-top: var(--padding-xsmall);
    color: var(--color-offwhite) !important;
}

.hero .lead {
    color: var(--color) !important;
}


.hero-list li {
    color: var(--color-offwhite) !important;
}

.no-mob {
    display: none;
}

@media only screen and (min-width : 416px) {
    .no-mob {
        display: initial;
    }
}

.feature {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

.w-full { max-width:100%!important;}

</style>

<?php $hero_feature = get_field('hero_feature'); ?>
<div class="bg-black relative z-index-3 <?php echo $hero_feature ?>">
    <div class="hero hero-grid hero-video">
        <header class="w-full margin-auto">
            <section class="hero-header w-full text-center">
                <img class="prefade" src="https://www.leewalpole.co.uk/sites/inbodyzone/img/inbody-zone-bali-logo.png">
                <h2 class="headline hero-prefade"><?php echo $headline; ?></h2>
                <em class="lead w-max hero-prefade color"><?php echo $lead; ?></em>
                <?php if( $more_text ): ?><div class="p-text-box no-mob"><?php echo $more_text; ?></div><?php endif;?>
                <?php if(have_rows('highlights')): ?>
                <ul class="hero-list w-safe  hero-prefade">
                    <?php while (have_rows('highlights')) : the_row();  ?>
                    <li><i class="fas fa-check"></i><?php echo get_sub_field('highlight'); ?></li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <div class="buttons z-index-3">
                    <a class="button" href="#intro">FIND OUT MORE</a>
                </div>
            </section>
            <!-- <a class="button" href="#main">EXPLORE</a> -->
        </header>
    </div>
    <?php switch ($hero_feature) { case 'feature-slideshow': ?>
    <?php get_template_part( 'hero/feature', 'slideshow' ); ?>
    <?php break; case 'feature-video': ?>
    <?php get_template_part( 'hero/feature', 'video' ); ?>
    <?php break; default: ?>
    <!-- Default -->
    <?php } ?>
</div>
<!-- *** HERO ABOVE *** -->