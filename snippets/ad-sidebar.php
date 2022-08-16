<?php $ad_type_sidebar = get_field('ad_type_sidebar'); ?>
<?php switch ($ad_type_sidebar) : case "google_adsense": ?>

<?php endswitch; ?>


<?php $ad_type_sidebar = get_field('ad_type_sidebar'); ?>

<!-- Sidebar -->

<!-- Google Ad (Below) -->
<?php switch ($ad_type_sidebar) : case "google_adsense": ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1175315600216420"
     crossorigin="anonymous"></script>
<figure class="advert sidebar-ad  bg-white">
<!-- Display (Square) 2022 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1175315600216420"
     data-ad-slot="9338877665"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <figcaption>Advertisement (Google)</figcaption>
</figure>

<!-- Google Ad (Above) -->
<?php break; case "ezoic": ?>
<figure class="advert sidebar-ad bg-white">
    <!-- Ezoic - LW Sidebar Top - sidebar -->
    <div id="ezoic-pub-ad-placeholder-168"></div>
    <!-- End Ezoic - LW Sidebar Top - sidebar -->
    <figcaption>Ezoic Advert</ficaption>
</figure>
<?php break; case "image": ?>
<?php if ( have_rows( 'ad_sidebar' ) ) : ?>
<?php while ( have_rows( 'ad_sidebar' ) ) : the_row(); ?>
<?php
        $ad_link = get_sub_field( 'ad_link' );
        $ad_image = get_sub_field('ad_image');
        $ad_image_smartphone = wp_get_attachment_image_src($ad_image, 'medium')[0]; 
        $ad_image_desktop = wp_get_attachment_image_src($ad_image, 'medium')[0]; 
        ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if ( $ad_image && $ad_link ) { ?>
<figure class="advert sidebar-ad  bg-white">
    <a href="<?php echo esc_attr($ad_link); ?>" title="<?php echo esc_attr( get_the_title()); ?>" target="_blank">
        <picture>
            <!-- Anything bigger than smartphone -->
            <source type="image/jpg" media="(min-width: 461px)" srcset="<?php echo esc_attr($ad_image_desktop); ?>">
            <!-- Smartphone -->
            <source type="image/jpg" media="(max-width: 460px)" srcset="<?php echo esc_attr($ad_image_smartphone); ?>">
            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                alt="<?php echo esc_attr( get_the_title() ); ?>"
                data-src="<?php echo esc_attr($ad_image_smartphone); ?>" class="lazyload" loading="lazy" />
        </picture>
    </a>
</figure>
<?php } else { ?>
<!-- Attention: Google Adsense needs to be added in settings -->
<?php } ?>

<?php break; default: // No adverts ?>

<!-- Attention: No adverts set -->

<figure class="advert banner-ad">
 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1175315600216420"
     crossorigin="anonymous"></script>
<!-- Display (Banner) 2022 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1175315600216420"
     data-ad-slot="7590929144"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<figcaption>Advertisement (Google)</figcaption>
 </figure>
<!-- Attention: No adverts set -->

<?php endswitch; ?>