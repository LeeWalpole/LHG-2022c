<?php get_header(); // includes nav and hero ?>

<style>

.article-body .wp-caption {
width:100%!important;
margin-bottom:20px!important;
}

.article-body .wp-caption .wp-caption-text { 
    font-size:0.9rem!important;
}

</style>

<!-- Ezoic - top_banner - top_of_page -->
<div id="ezoic-pub-ad-placeholder-166"> </div>
<!-- End Ezoic - top_banner - top_of_page -->

<?php if( have_rows('hero_header') ):
        while( have_rows('hero_header') ) : the_row();?>

<?php 
        $kicker = get_sub_field('kicker');
        $headline = get_sub_field('headline');
        $subheadline = get_sub_field('subheadline');
        $hero_cta_1 = get_sub_field('cta_1');
        $hero_cta_1_target = $hero_cta_1['target'] ? $hero_cta_1['target'] : '_self'; 
        $hero_cta_1_title = $hero_cta_1['title'];
        $hero_cta_1_url = $hero_cta_1['url'];
        $hero_cta_2 = get_sub_field('cta_2');
        $hero_cta_2_target = $hero_cta_2['target'] ? $hero_cta_2['target'] : '_self'; 
        $hero_cta_2_title = $hero_cta_2['title'];
        $hero_cta_2_url = $hero_cta_2['url'];
        ?>



<section class="hero-stack">
    <header class="header w-max m-auto">
        <?php if ($kicker) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
        <?php if ($headline) : ?><h2 class="headline"><?php echo $headline ?></h2><?php endif; ?>
        <?php if ($subheadline) : ?><div class="hero_subheadline"><?php echo $subheadline ?></div>
        <?php endif; ?>
        <?php if ($hero_cta_1) : ?>
        <?php // include( 'cta.php' ); // Call to Action Buttons if available  ?>
        <?php include( 'get_cta.php' ); ?>
        <?php endif; ?>
    </header>
</section>

<?php endwhile; 
    endif; ?>



<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php // get_template_part( 'snippets/snippet-hero' ); ?>
<?php // get_template_part( 'snippets/snippet-feature' ); ?>

<style>
    @media (min-width: 821px) {
        .article-block .feature {
            padding: 0 !important;
        }
    }
</style>



<?php if ( !empty( get_the_content() ) ) : ?>

<?php // get_template_part( 'snippets/ad', 'header' ); ?>


<div class="article-block">

    <figure class="feature colspan-12">
        <?php if ( get_the_post_thumbnail_url() ) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" />
        <?php else : ?>
        <img src="https://i.stack.imgur.com/y9DpT.jpg" loading="lazy" />
        <?php endif; ?>
    </figure>

    <section class="grid bg-white w-max m-auto">
        <article class="article-body colspan-9 w-safe m-auto">
            <header class="header w-max">
                <!-- <strong class="kicker">Kicker Category</strong> -->
                <h1 class="article-title"><?php the_title(); ?></h1>
                <?php if ( ! has_excerpt() ) { ?>
                <?php } else {?>
                <em class="article-description"><?php echo get_the_excerpt();?></em>
                <?php } ?>
            </header>

            <?php get_template_part( 'snippets/byline' ); ?>

            <?php the_content(); ?>

            <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
        </article>
        <?php // get_template_part( 'snippets/ad', 'sidebar' ); ?>

        <aside class="colspan-3 bg-white sidebar">
            <figure class="advert sidebar-ad">
                    <!-- Ezoic - sidebar - sidebar -->
                    <div id="ezoic-pub-ad-placeholder-165"> </div>
                    <!-- End Ezoic - sidebar - sidebar -->
                <figcaption>Advert</ficaption>
            </figure>
            <aside id="chapters" class="bg-offblack chapters" data-theme="dark">
                <!-- Chapters appear Below -->
            </aside>
            <div class="sticky-sidebar sticky-scroll">
                <figure class="advert sidebar-ad">
                    <!-- Ezoic - sidebar - sidebar -->
                    <div id="ezoic-pub-ad-placeholder-165"> </div>
                    <!-- End Ezoic - sidebar - sidebar -->
                    <figcaption>Advert</ficaption>
                </figure>
            </div>
        </aside>

    </section>
    <?php endif; ?>

    <?php endwhile; endif; ?>

    <?php get_template_part( 'snippets/related' ); // col-4 ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://unpkg.com/v-video-embed/dist/video-embed.min.js" type="text/javascript"></script>

    <script>
        Vue.use(Embed);
    </script>

    <script>
        // Vanilla version of FitVids
        // Still licencened under WTFPL
        //
        // Not as robust and fault tolerant as the jQuery version.
        // It's BYOCSS.
        // And also, I don't support this at all whatsoever.

        ;
        (function (window, document, undefined) {
            'use strict';

            // List of Video Vendors embeds you want to support
            var players = [
                'iframe[src*="youtube.com"]',
                'iframe[src*="instagram.com"]',
                'iframe[src*="facebook.com"]',
                'iframe[src*="tiktok.com"]',
                'iframe[src*="vimeo.com"]'
            ];

            // Select videos
            var fitVids = document.querySelectorAll(players.join(','));

            // If there are videos on the page...
            if (fitVids.length) {

                // Loop through videos
                for (var i = 0; i < fitVids.length; i++) {

                    // Get Video Information
                    var fitVid = fitVids[i];
                    var width = fitVid.getAttribute('width');
                    var height = fitVid.getAttribute('height');
                    var aspectRatio = height / width;
                    var parentDiv = fitVid.parentNode;

                    // Wrap it in a DIV
                    var div = document.createElement('div');
                    div.className = 'fitVids-wrapper';
                    div.style.paddingBottom = aspectRatio * 100 + "%";
                    parentDiv.insertBefore(div, fitVid);
                    fitVid.remove();
                    div.appendChild(fitVid);

                    // Clear height/width from fitVid
                    fitVid.removeAttribute('height')
                    fitVid.removeAttribute('width');
                }
            }
        })(window, document);
    </script>


    <?php get_footer();  ?>

    <?php get_template_part( 'blocks/blocks' ); ?>


    <script>
        document.addEventListener('click', function (e) {
            e = e || window.event;
            var target = e.target || e.srcElement;
            let body_class = document.querySelector('body');

            if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'modal') {
                if (target.hasAttribute('data-target')) {
                    var m_ID = target.getAttribute('data-target');
                    document.getElementById(m_ID).classList.add('open');
                    body_class.classList.add('modal-on');
                    e.preventDefault();
                }
            }

            // Close modal window with 'data-dismiss' attribute or when the backdrop is clicked
            if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'modal') ||
                target
                .classList.contains('modal')) {
                var modal = document.querySelector('[class="modal open"]');
                modal.classList.remove('open');
                body_class.classList.remove('modal-on');
                e.preventDefault();
            }
        }, false);
    </script>


    <style>
        #chapters-box {
            padding: var(--padding) !important;
        }

        h5.accordion {
            font-size: 1.2rem;
        }
    </style>

    <style>
        @media only screen and (min-width: 768px) {
            .sticky-scroll {
                max-height: 80vh !important;
                max-height: 80dvh;
                /* iOS dynamic viewport height */
                overflow-y: auto;
            }
        }
    </style>

    <style>
        .pop-share {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pop-share p {
            margin-left: var(--px-medium);
        }
    </style>