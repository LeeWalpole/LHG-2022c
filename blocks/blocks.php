<?php if(have_rows('blocks')):  while (have_rows('blocks')) : the_row();  ?>


<?php if( get_row_layout() == 'hero_block' ) { ?>

<?php // get_template_part( 'blocks/block-hero' ); ?>


<?php } elseif( get_row_layout() == 'showcase_block' ) { ?>
<?php get_template_part( 'blocks/block-showcase' ); ?>


<?php } elseif( get_row_layout() == 'image_block' ) { ?>
<?php get_template_part( 'blocks/block-image' ); ?>


<?php } else {  
    //  relax();
    }  // end get_row_layout and do nothing ?>

<?php endwhile; endif; ?>