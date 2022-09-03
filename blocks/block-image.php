<?php // Headlines for Hero
$image_link = get_sub_field('image_link'); 

$image_desktop_id = get_sub_field('image_desktop'); 
$image_desktop = wp_get_attachment_image_url( $image_desktop_id, 'large' );

$image_smartphone_id = get_sub_field('image_smartphone');  
$image_smartphone = wp_get_attachment_image_url( $image_smartphone_id, 'medium' );
?>

<?php 
    if( $image_link ): 
    $link_url = $image_link['url'];
    $link_title = $image_link['title'];
    $link_target = $image_link['target'] ? $link['target'] : '_self';
    endif;
?>

<?php if( $image_desktop ) : ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
    title="<?php echo $link_title; ?>" class="bg-white image-block w-max m-auto">
    <figure>
        <picture>
            <source media="(min-width: 1600px)" srcset="<?php echo $image_desktop; ?>">
            <source media="(min-width: 461px) and (max-width: 1600px)" srcset="<?php echo $image_desktop; ?>">
            <source media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
                srcset="<?php echo $image_desktop; ?>">
            <source media="(min-width: 461px) and (max-width: 900px)" srcset="<?php echo $image_desktop; ?>">
            <source media="(max-width: 460px)" srcset="<?php echo $image_smartphone; ?>">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                alt="<?php echo $link_title; ?>" data-src="<?php echo $image_smartphone; ?>" class="lazyload"
                loading="lazy">
        </picture>
    </figure>
</a>

<?php endif; ?>

<?php // echo $image_desktop = wp_get_attachment_image_url( $image_desktop_id, 'large' ); ?>