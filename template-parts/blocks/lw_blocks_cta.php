<?php 
$cta_title = get_field('cta_title');
$cta_link = get_field('cta_link');


$id = 'cta-' . $block['id'];

?>

<section id="<?php echo $id; ?>" class="lw-cta">
    <h1><?php echo $cta_title; ?></h1>

    <?php 
    if( $cta_link ): 
    $link_url = $cta_link['url'];
    $link_title = $cta_link['title'];
    $link_target = $cta_link['target'] ? $link['target'] : '_self';
    ?>
    <div class="wp-block-button button"><a href="<?php echo esc_url( $link_url ); ?>" class="wp-block-button__link"  target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
    <?php endif; ?>




</section>