<?php get_header(); // includes nav and hero and main ?>


<?php // get_template_part( 'snippets/snippet-hero' ); ?>

<script>
console.log("Hello home!");
</script>





<!--  include below -->
<?php // include( 'blocks/blocks.php' ); ?>



<?php /*
    if(have_rows('blocks')):  while (have_rows('blocks')) : the_row();   ?>
<?php if( get_row_layout() == 'hero_block' ) : ?>
<?php $hero_block = true; ?>
<p>hero_block</p>
<?php endif; ?>
<?php endwhile; endif; */ ?>


<?php if (is_tax() || is_category() || is_tag() || is_post_type_archive() || is_front_page() || $hero_block == false  )  { ?>
<main class="main-category">
    <?php } else { ?>
    <main>
        <?php } ?>



        <?php /*
        <?php if (is_tax() || is_category() || is_tag() || is_post_type_archive() || is_front_page() || $hero_block == false  )  : ?>
        <?php get_template_part( 'snippets/hero' ); ?>
        <?php endif; ?>
*/?>


        <?php // get_template_part( 'snippets/cta' ); ?>





        <?php // get_template_part( 'blocks/blocks' ); ?>


        <?php // get_template_part( 'snippets/newsletter' ); ?>

        <?php get_footer();  ?>