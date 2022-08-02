<?php get_header(); // includes nav and hero ?>

<style>
.article-body img  { 
width:100%!important;
object-fit:contain!important;
height:auto;
} 

.article-body > p > a  { 
color:#ee0099;
} 
</style>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>
<?php get_template_part( 'snippets/snippet-feature' ); ?>

<?php if ( !empty( get_the_content() ) ) : ?>

    <?php get_template_part( 'snippets/ad', 'header' ); ?>

<section class="row-block bg-white grid grid-gap w-max">
    <?php get_template_part( 'snippets/snippet', 'side-sharers' ); // col-1 ?>
    <article class="article-body w-safe colspan-7">
        <header class="header w-max">
            <!-- <strong class="kicker">Kicker Category</strong> -->
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if ( ! has_excerpt() ) { ?>
            <?php } else {?>
            <em class="description"><?php echo get_the_excerpt();?></em>
            <?php } ?>
        </header>
        <?php // get_template_part( 'snippets/snippet', 'byline' ); ?>
 <!-- 
        <aside id="chapters" class="bg-black">
        </aside>
 -->
        <?php the_content(); ?>
        <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
    </article>
    <?php get_template_part( 'snippets/ad', 'sidebar' ); ?>
</section>
<?php endif; ?>
<?php endwhile; endif; ?>


<p>Blocks Below</p>

<?php get_template_part( 'blocks/blocks' ); ?>

<p>Blocks Above</p>

<?php // get_template_part( 'snippets/snippet', 'related' ); // col-4 ?>


<?php get_footer();  ?>