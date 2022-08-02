<style>
.feature-video .feature video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: .33;
}
</style>
<?php if(have_rows('hero_feature_video')):  while (have_rows('hero_feature_video')) : the_row(); ?>
<figure class="feature z-index-1 bg-black bg-image">
    <picture>
        <img src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id, $size ); ?>">
    </picture>

    <video playsinline="true" autoplay="true" muted="true" loop="true"
        poster="<?php echo wp_get_attachment_image_url( $post_thumbnail_id, $size ); ?>">
        <?php if( get_sub_field('video_webm') ): ?>
        <source src="<?php echo the_sub_field('video_webm'); ?>" type="video/webm">
        <?php endif; ?>
        <?php if( get_sub_field('video_mp4') ): ?>
        <source src="<?php echo the_sub_field('video_mp4'); ?>" type="video/mp4">
        <?php endif; ?>
    </video>
</figure>
<?php endwhile; endif; ?>