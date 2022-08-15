<style>
img {
    max-width: 100%;
}

</style>


<div class="bg-light row-block">
    <figure class="w-safe center advertisement">


        <?php
    $ad_type = get_field('ad_type');
    switch ($ad_type) : case "google_adsense": ?>

        <!-- Google Adsense Below -->
        <?php 
    $adsense_data_ad_client = get_field('adsense_data_ad_client', 'options');
    $header_adsense_id = get_field('header_adsense_id', 'options');
    ?>

        <?php if( $adsense_data_ad_client && $header_adsense_id) { ?>
        <!-- Sidebar -->
        <figcaption>Google Ad</figcaption>
        <div class="ratio bg-light" data-ratio="3:1">
            <ins class="adsbygoogle" style="display:block"
                data-ad-client="ca-pub-<?php echo $adsense_data_ad_client; ?>"
                data-ad-slot="<?php echo $header_adsense_id;?>" data-ad-format="auto"
                data-full-width-responsive="true"></ins>
        </div>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <?php } else echo "Google Adsense needs to be be setup."; ?>
        <!-- Google Adsense Above -->


        <?php break; case "image": ?>
        <!-- Custom Ad Image Below -->
        <?php if ( have_rows( 'ad_header' ) ) : ?>
        <?php while ( have_rows( 'ad_header' ) ) : the_row(); ?>
        <?php
    $ad_link = get_sub_field( 'ad_link' );
    $ad_image = get_sub_field('ad_image');
    $ad_image_smartphone = wp_get_attachment_image_src($ad_image, 'strap')[0]; 
    $ad_image_desktop = wp_get_attachment_image_src($ad_image, 'strap-desktop')[0]; 
    ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( $ad_image ) { ?>

        <a href="<?php echo esc_attr($ad_link); ?>" title="<?php echo esc_attr( get_the_title()); ?>" target="_blank">
            <picture>
                <!-- Anything bigger than smartphone -->
                <source type="image/jpg" media="(min-width: 461px)" srcset="<?php echo esc_attr($ad_image_desktop); ?>">
                <!-- Smartphone -->
                <source type="image/jpg" media="(max-width: 460px)"
                    srcset="<?php echo esc_attr($ad_image_smartphone); ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="<?php echo esc_attr( get_the_title() ); ?>"
                    data-src="<?php echo esc_attr($ad_image_smartphone); ?>" />
            </picture>
        </a>

        <?php } else echo "Ad image missing??"; ?>
        <!-- Custom Ad Image Above -->
        <?php break; default: // default too google adsense if it exists... ?>


        <?php if ( in_category('party-holidays') ) { ?>

                <!-- Custom Ad Image Below -->

                <a href="https://www.loveholidays.com/holidays/?WT.mc_id=aaw-312913&amp;awc=15714_1593234893_7ad34213e73332a754e846ec64b605b1&amp;ch=afi&amp;state=BQoUAAAAA_____hQqmMBWwPwQQQzETWUKUuVH2aY4ZbcVBb5mBAAAyHA"
                    title="Best party holidays and clubbing destinations in 2020" target="_blank">
                    <picture>
                        <!-- Anything bigger than smartphone -->
                        <source type="image/jpg" media="(min-width: 461px)"
                            srcset="https://www.ladsholidayguide.com/wp-content/uploads/Dirt-Cheap-Party-Holidays.jpg">
                        <!-- Smartphone -->
                        <source type="image/jpg" media="(max-width: 460px)"
                            srcset="https://www.ladsholidayguide.com/wp-content/uploads/Dirt-Cheap-Party-Holidays.jpg">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            alt="Best party holidays and clubbing destinations in 2020"
                            data-src="https://www.ladsholidayguide.com/wp-content/uploads/Dirt-Cheap-Party-Holidays.jpg">
                    </picture>
                </a>

        <?php } else { ?>

        <!-- Google Adsense Below -->
        <?php 
    $adsense_data_ad_client = get_field('adsense_data_ad_client', 'options');
    $header_adsense_id = get_field('header_adsense_id', 'options');
    ?>

        <?php if( $adsense_data_ad_client && $header_adsense_id) { ?>
        <!-- Sidebar -->
        <figcaption>ADVERTISEMENT</figcaption>
        <div class="ratio bg-light" data-ratio="3:1">
            <ins class="adsbygoogle" style="display:block"
                data-ad-client="ca-pub-<?php echo $adsense_data_ad_client; ?>"
                data-ad-slot="<?php echo $header_adsense_id;?>" data-ad-format="auto"
                data-full-width-responsive="true"></ins>
        </div>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <?php } else echo "Google Adsense needs to be be setup."; ?>
        <!-- Google Adsense Above -->

        <?php } // not party holidays ?>

        <?php endswitch; ?>

    </figure>
</div>