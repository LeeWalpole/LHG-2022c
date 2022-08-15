 <?php
    $ad_type = get_field('ad_type');
    switch ($ad_type) : case "google_adsense": ?>

 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <?php 
    $adsense_data_ad_client = get_field('adsense_data_ad_client', 'options');
    $header_adsense_id = get_field('sidebar_adsense_id', 'options');
    ?>
 <?php if( $adsense_data_ad_client && $header_adsense_id) : ?>
 <!-- Sidebar -->
 <figure class="advert sidebar-ad">
     <!-- Google Ad (Below) -->
     <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-<?php echo $adsense_data_ad_client; ?>"
         data-ad-slot="<?php echo $header_adsense_id;?>" data-ad-format="auto" data-full-width-responsive="true"></ins>
     <figcaption>Google Ad</figcaption>
 </figure>
 <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
 </script>
 <!-- Google Ad (Above) -->
 <?php endif; ?>


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
        <figure class="advert sidebar-ad">
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