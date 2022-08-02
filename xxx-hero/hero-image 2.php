<?php if( have_rows('hero_images') ) : ?>
<?php while( have_rows('hero_images') ): the_row(); ?>
<?php // grab ACF image if it exists...
$acf_hero_image_url = wp_get_attachment_image_src(get_sub_field('hero_image_portrait'), '')[0]; 
?>
<?php endwhile; ?>
<?php endif; ?>

<?php 
// check if it exists, if not, grab the featured image or fallback image
$hero_image_url = $acf_hero_image_url ?: get_the_post_thumbnail_url($post->ID, '') ?: "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
// use jetpack to resize images for screensizes
$hero_smartphone = Jetpack_PostImages::fit_image_url ($hero_image_url, 360, 720);
$hero_tablet = Jetpack_PostImages::fit_image_url ($hero_image_url, 768, 768);
$hero_desktop = Jetpack_PostImages::fit_image_url ($hero_image_url, 1366, 683);
$hero_desktop_plus = Jetpack_PostImages::fit_image_url ($hero_image_url, 1920, 960);
?>

<figure class="feature">
    <picture class="slideshow-picture">
        <!-- desktop (plus / massive) -->
        <source type="image/jpg" media="(min-width: 1600px)"
        data-srcset="<?php echo $hero_desktop_plus; ?>">
        <!-- desktop (most) -->
        <source type="image/jpg" media="(min-width: 461px) and (max-width: 1600px)"
        data-srcset="<?php echo $hero_desktop; ?>">
        <!-- tablet (landscape) -->
        <source type="image/jpg"
            media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
            data-srcset="<?php echo $hero_desktop; ?>">
        <!-- tablet (portrait) -->
        <source type="image/jpg" media="(min-width: 461px) and (max-width: 900px)"
        data-srcset="<?php echo $hero_tablet; ?>">
        <!-- Smartphone (portrait) -->
        <source type="image/jpg" media="(max-width: 460px)"
        data-srcset="<?php echo $hero_smartphone; ?>">
            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="lazyload" loading="lazy" data-src="<?php echo $hero_smartphone; ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"  />
    </picture>
</figure>



