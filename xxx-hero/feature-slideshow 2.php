<style>
/* .feature-slideshow, .feature-slideshow img {
    position: absolute; top:0; left:0;
    width: 100%;
    height: 100%;
    overflow: hidden;
} */

.feature-slideshow img {
    opacity:.3;
}

.slideshow-figure {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    /*animation*/
    animation: slideShow 24s linear infinite 0s;
    -o-animation: slideShow 24s linear infinite 0s;
    -moz-animation: slideShow 24s linear infinite 0s;
    -webkit-animation: slideShow 24s linear infinite 0s;
}

.slideshow-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


.slideshow-figure:nth-of-type(1) {
    opacity: 1;
    background: no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.slideshow-figure:nth-of-type(2) {
    animation-delay: 6s;
    -o-animation-delay: 6s;
    -moz--animation-delay: 6s;
    -webkit-animation-delay: 6s;
}

.slideshow-figure:nth-of-type(3) {
    animation-delay: 12s;
    -o-animation-delay: 12s;
    -moz--animation-delay: 12s;
    -webkit-animation-delay: 12s;
}

.slideshow-figure:nth-of-type(4) {
    animation-delay: 18s;
    -o-animation-delay: 18s;
    -moz--animation-delay: 18s;
    -webkit-animation-delay: 18s;
}

/* keyframes*/

@keyframes slideShow {
    0% {
        opacity: 0;
        transform: scale(1);
        -ms-transform: scale(1);
    }

    5% {
        opacity: 1
    }

    25% {
        opacity: 1;
    }

    30% {
        opacity: 0;
        transform: scale(1.1);
        -ms-transform: scale(1.1);
    }

    100% {
        opacity: 0;
        transform: scale(1);
        -ms-transformm: scale(1);
    }
}

@-o-keyframes slideShow {
    0% {
        opacity: 0;
        -o-transform: scale(1);
    }

    5% {
        opacity: 1
    }

    25% {
        opacity: 1;
    }

    30% {
        opacity: 0;
        -o-transform: scale(1.1);
    }

    100% {
        opacity: 0;
        -o-transformm: scale(1);
    }
}

@-moz-keyframes slideShow {
    0% {
        opacity: 0;
        -moz-transform: scale(1);
    }

    5% {
        opacity: 1
    }

    25% {
        opacity: 1;
    }

    30% {
        opacity: 0;
        -moz-transform: scale(1.05);
    }

    100% {
        opacity: 0;
        -moz-transformm: scale(1);
    }
}

@-webkit-keyframes slideShow {
    0% {
        opacity: 0;
        -webkit-transform: scale(1);
    }

    5% {
        opacity: 1
    }

    25% {
        opacity: 1;
    }

    30% {
        opacity: 0;
        -webkit-transform: scale(1.05);
    }

    100% {
        opacity: 0;
        -webkit-transformm: scale(1);
    }
}
</style>

<?php $images = get_field('hero_feature_slideshow'); if( $images ): ?>
<figure class="slideshow feature op-slideshow z-index-1">
    <?php foreach( $images as $image ): ?>
    <?php 
    // image sizes
    $img_desktop_plus = $image['sizes']['img_desktop_plus'];
    $img_desktop = $image['sizes']['img_desktop'];
    $img_tablet = $image['sizes']['img_tablet'];
    $img_smartphone = $image['sizes']['img_smartphone'];
    ?>
    <figure class="slideshow-figure">
        <picture class="slideshow-picture">
            <source type="image/jpeg" media="(min-width: 1600px)"
                srcset="<?php echo esc_url($img_desktop_plus);?>">
            <source type="image/jpeg" media="(min-width: 461px) and (max-width: 1600px)"
                srcset="<?php echo esc_url($img_desktop);?>">
            <source type="image/jpeg"
                media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
                srcset="<?php echo esc_url($img_desktop);?>">
            <source type="image/jpeg" media="(min-width: 461px) and (orientation: portrait)"
                srcset="<?php echo esc_url($img_tablet);?>">
            <source type="image/jpeg" media="(max-width: 460px)"
                srcset="<?php echo esc_url($img_smartphone);?>">
            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                alt="<?php echo esc_attr($image['alt']); ?>" class="slideshow-image lazyload"
                loading="lazy">
        </picture>
    </figure>
    <?php endforeach; ?>
</figure>
<?php endif; ?>