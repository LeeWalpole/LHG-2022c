<?php $author_id = get_the_author_meta('ID'); ?>

<footer class="byline">
    <div>
        <address>By <a href="<?php echo esc_url(get_the_author_meta('url')); ?>"
                title="<?php echo esc_url(get_the_author_meta('display_name')); ?>"><?php echo esc_html(get_the_author_meta('display_name')); ?></a>
        </address>
        <time itemprop="datePublished" title="<?php echo esc_attr(get_the_date( 'F j, Y' )); ?>" datetime="<?php the_time('c') ?>"> on
            <?php echo get_the_date( 'F j, Y' ); ?></time>
    </div>
    <div>
        <?php $u_time = get_the_time('U'); $u_modified_time = get_the_modified_time('U'); 
if ($u_modified_time >= $u_time + 86400) { echo "<time id='modified' class='modified'>Modified: "; the_modified_time('F jS, Y'); echo "</time> "; } ?>
       <!-- <small>(<?php // echo reading_time(); ?> read)</small>-->
    </div>
</footer>
    <!--
    <aside class="shares">
<a href="#" class="share"><i class="fas fa-share"></i></a>
<a href="#" class="share"><i class="fas fa-share"></i></a>
<a href="#" class="share"><i class="fas fa-share"></i></a>
    </aside>
-->