<?php 
$block_id = 'block_' . $block['id'];
$lead_deployment_id = get_sub_field('lead_deployment_id');
$lead_box_title = get_sub_field('lead_box_title');
$lead_success_message = get_sub_field('lead_success_message');
?>


<?php
$block_id = 'block_' . $block['id'];
// Check rows exists.
if( have_rows('puff') ):

    // Loop through rows.
    while( have_rows('puff') ) : the_row();
        // first, get the image object returned by ACF
        $puff_image = get_sub_field('puff_image');
        // and the image size you want to return
        $puff_image_size = 'thumbnail';
        // now, we'll exctract the image URL from $image_object
        $puff_image_url = wp_get_attachment_image_src( $puff_image, $puff_image_size );
        // url = $image[0];
        // width = $image[1];
        // height = $image[2];
        $puff_headline = get_sub_field('puff_headline');
        $puff_text = get_sub_field('puff_text');
        $puff_link = get_sub_field('puff_link');
        $puff_link_target = $puff_link['target'] ? $puff_link['target'] : '_self'; 
        $puff_link_title = $puff_link['title'] ?: "javascript:void(0)";
        $puff_link_url = $puff_link['url'] ?: "#";
        // Do something...
        ?>

<p>Image: <?php echo $puff_image_url[0]; ?></p>
<aside id="puff_<?php echo $block_id; ?>">
    <a href="<?php echo $puff_link_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($puff_link_title); ?>"
        target="<?php echo esc_attr( $puff_link_target ); ?>">
        <img src="<?php echo $puff_image_url[0]; ?>" data-src="<?php echo $puff_image_url[0]; ?>"
            alt="<?php echo $puff_headline; ?>" class="lazyload ratio" data-ratio="1x1" loading="lazy">
    </a>
    <header>
        <?php if ($puff_headline) : ?><h5 class="headline"><?php echo $puff_headline; ?></h5><?php endif ?>
        <?php if ($puff_text) : ?><div class="puff_text"><?php echo $puff_text; ?></div><?php endif ?>
        <?php if ($puff_link_title): ?>
        <a href="<?php echo $puff_link_url ?: "javascript:void(0)"; ?>"
            title="<?php echo esc_attr($puff_link_title); ?>" class="button"
            target="<?php echo esc_attr( $puff_link_target ); ?>">
            <?php echo $puff_link_title; ?>
        </a>
        <?php endif; ?>
    </header>

</aside>

<?php 
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>