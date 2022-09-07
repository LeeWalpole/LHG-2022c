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
<style>

 :root {
    --puff-image-size:90px;
 }

 @media (min-width:821px) {
 :root {
    --puff-image-size:125px;
 }
 }

    .puff_block2 {
        padding: 20px !important;
        margin: var(--px-big) 0;
        position: relative;
        background: var(--color-offwhite);

    }

    .puff_block2 section {
        display: flex;
        justify-content: center;
        justify-content: space-between;
    }

    .puff_block2 header {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
        margin: 0 0 0 var(--px-medium);

        /* padding-left: calc(125px + var(--px-small)); */
    }

    .puff_block2 figure {
        margin-bottom: 0;
    }

    .puff_block2 .puff_text>* {
        font-size: 0.9rem !important;
    }

    .puff_block2 .buttons {
        background: var(--color);
        margin: 0;
        padding: 0;
    }

    .puff_block2 .button {
        background: var(--color);
        color: white;
        display: block !important;
        /* font-size: var(--xsmall) !important;
                            height: 44px !important;
                            line-height: 44px !important; */
        margin: var(--px-medium) 0 var(--px-small) 0 !important;
    }

    .puff_block2 .button:hover {
        filter: brightness(120%);
    }

    .puff_block2_picture {
        height: var(--puff-image-size);
        width: var(--puff-image-size);
        display: block;
        background: var(--color);

    }

    .puff_block2 img {
        height: 100%;
        width: 100%;
        object-fit: cover !important;

    }
</style>


<aside id="puff_<?php echo $block_id; ?>" class="puff_block2">
    <section>
        <figure>
            <picture class="ratio puff_block2_picture" data-ratio="1x1">
                <img src="<?php echo $puff_image_url[0]; ?>" data-src="<?php echo $puff_image_url[0]; ?>" alt="<?php echo $puff_headline; ?>"
                    class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header>
            <?php if ($puff_headline) : ?><h5 class="headline"><?php echo $puff_headline; ?></h5><?php endif ?>
            <?php if ($puff_text) : ?><div class="puff_text"><?php echo $puff_text; ?></div><?php endif ?>
        </header>
    </section>
    <?php if ($puff_link_title): ?>
    <div class="buttons">
        <a href="<?php echo $puff_link_url ?: "javascript:void(0)"; ?>"
            title="<?php echo esc_attr($puff_link_title); ?>" class="button"
            target="<?php echo esc_attr( $puff_link_target ); ?>">
            <?php echo $puff_link_title; ?>
        </a>
    </div>
    <?php endif; ?>
</aside>

<?php 
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>