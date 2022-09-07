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

        // Load sub field value.
        $puff_image = get_sub_field('puff_image');
        $puff_headline = get_sub_field('puff_headline');
        $puff_text = get_sub_field('puff_text');
        $puff_link = get_sub_field('puff_link');
        // Do something...
    // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;
?>

<aside id="html_gsheet_box_<?php echo $block_id; ?>" class="lw-leads-simple">

<?php if ($puff_headline) : ?><h5 class="headline"><?php echo $puff_headline; ?></h5><?php endif ?>
<?php if ($puff_text) : ?><div class="puff_text"><?php echo $puff_text; ?></div><?php endif ?>

</aside>