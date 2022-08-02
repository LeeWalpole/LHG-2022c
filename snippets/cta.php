<?php if( $cta_1 ) : ?>
<div class="buttons">
    <a href="<?php echo $cta_1_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($cta_1_title); ?>"
        target="<?php echo esc_attr( $cta_1_target ); ?>" class="button"><?php echo esc_html($cta_1_title); ?></a>

    <?php if( $cta_2 ) : ?>
    <a href="<?php echo $cta_2_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($cta_2_title); ?>"
        target="<?php echo esc_attr( $cta_2_target ); ?>" class="button"><?php echo esc_html($cta_2_title); ?></a>
    <?php endif; // no cta 2  ?>
</div>
<?php endif; // no cta 1 ?>