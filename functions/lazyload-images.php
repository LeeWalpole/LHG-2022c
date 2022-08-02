<?php 
/*
/* CHANGE IMAGES ATTRIBUTES */
add_filter('the_content', 'filter');
function filter($content) {
    return str_replace('<img src="', '<img data-src="', $content);
}
add_filter('the_content','new_content');
function new_content($content) {
    $content = str_replace('<img','<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="lazyload" loading="lazy" ', $content);
    return $content;
}
?>