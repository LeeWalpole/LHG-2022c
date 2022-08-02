<?php 
function lazy_embed_oembed_html($html, $url, $attr) {
$html = str_replace( 'frameborder="0"', '', $html );
$html = str_replace( 'src', 'data-src', $html );
$html = str_replace('<iframe ','<iframe class="article-iframe lazyload" loading="lazy" ',$html);
return $html; }
add_filter('embed_oembed_html', 'lazy_embed_oembed_html',10, 3);
?>