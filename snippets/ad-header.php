 <?php
    $ad_type = get_field('ad_type');
    switch ($ad_type) : case "google_adsense": ?>
 <!-- Sidebar -->
 <figure class="advert banner-advert">
     <!-- Google Ad (Below) -->
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1175315600216420"
     crossorigin="anonymous"></script>
<!-- Header Ad Banner -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1175315600216420"
     data-ad-slot="3621619731"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
     <figcaption>Google Ad</figcaption>
 </figure>
 <!-- Google Ad (Above) -->

 <?php break; case "ezoic": ?>
<figure class="advert banner-advert">
    <!-- Ezoic - LW Sidebar Top - sidebar -->
    <div id="ezoic-pub-ad-placeholder-168"></div>
    <!-- End Ezoic - LW Sidebar Top - sidebar -->
    <figcaption>Ezoic Advert</ficaption>
</figure>

 <?php break; case "image": ?>
 <!-- Custom Ad Image Below -->
    <?php if ( have_rows( 'ad_header' ) ) : ?>
    <?php while ( have_rows( 'ad_header' ) ) : the_row(); ?>
    <?php
        $ad_link = get_sub_field( 'ad_link' );
        $ad_image = get_sub_field('ad_image');
        $ad_image_smartphone = wp_get_attachment_image_src($ad_image, 'thumbnail')[0]; 
        $ad_image_desktop = wp_get_attachment_image_src($ad_image, 'thumbnail')[0]; 
        ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if ( $ad_image ) : ?>
        <figure class="advert banner-advert">
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
    <?php endif; ?>
 <!-- Custom Ad Image Above -->
 <?php break; default: // default too google adsense if it exists... ?>

 <!--  No Adverts -->

 <?php endswitch; ?>