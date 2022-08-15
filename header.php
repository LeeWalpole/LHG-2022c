<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="robots" content="follow, index" />
    <?php wp_head(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <link rel="preload" as="image" href="<?php echo esc_attr($hero_image_smartphone = get_the_post_thumbnail_url(get_the_ID(),'thumbnail')); ?>">
    <?php endif; ?>
    <!-- <link rel="preload" href="img/inbody.mp4" as="video" type="video/mp4"> -->
    <?php /*
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/nopure.min.css" as="style"
    onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/pure.min.css" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fonts.css" as="style"
        onload="this.rel='stylesheet'">
    */ ?>
    <!--
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700;900&display=swap" rel="stylesheet">
    -->
    <?php // get_template_part( 'snippets/snippet', 'fonts' ); // col-1 ?>
    <!-- Load Fonts below -->
    <?php // include_once( 'fonts/font.php' ); /*  include_once( 'fonts.php' ); */ ?>
    <?php // include_once( 'css/variables.php' ); /*  include_once( 'fonts.php' ); */ ?>


    <style>
        .body-loading {
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100vh;
            width: 100vw;
            background: #000;
            z-index: 200000;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .body-loaded {
            position: relative;
            height: unset;
            overflow-y: auto;
        }

        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            height: 100vh;
            width: 100vw;
            background: #000;
            position: fixed; top:0; right:0; bottom:0; left:0;
            pointer-events: none;
            transition: all 0.75s ease-in-out;
            z-index: 9100001!important;
            
        }

        .body-loaded .loader {
            opacity: 0;
            z-index: -1!important;
        }
    </style>

    <style>
        .load {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
            background: #000;
            position: fixed;
            z-index: 200002;
            pointer-events: none;
            transition: all 0.75s ease-in-out;
        }

        .splash-logo {
            z-index: 56;
        }

        .spinners {
            display: inline-flex;
            background-color: #010101;
            animation: loading 0.5s ease-in 4s forwards;
            z-index: 55;
            margin-top: 32px;
        }

        @keyframes square {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.25);
            }

            60% {
                transform: scale(1);
            }
        }

        .spinners .square1,
        .spinners .square1,
        .spinners .square3 {
            width: 30px;
            height: 30px;
            margin-right: 15px;
            border: 2px solid white;
            border-radius: 100px;
            background-color: transparent !important;
        }

        .square1 {
            animation: square 1s ease-in 0s infinite;
        }

        .square2 {
            animation: square 1s ease-in 0.2s infinite;
        }

        .square3 {
            animation: square 1s ease-in 0.4s infinite;
        }

        .scroll {
            overflow: hidden;
        }
    </style>

    <?php include_once( 'fonts/font.php' ); ?>

    <?php // echo "<style>"; include_once( 'dist/min.css' ); echo "</style>"; ?>

    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?11" as="style"
        onload="this.rel='stylesheet'">


    <?php /*
      <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css" as="style"
    onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?ver=001" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?ver=003" as="style"
        onload="this.rel='stylesheet'">
    */?>

</head>


<body id="body" class="body-loading">

    <div class="loader">
        <div class="load">
            <img src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80" loading="eager">
            <div class="spinners">
                <div class="square1"></div>
                <div class="square2"></div>
                <div class="square3"></div>
            </div>
        </div>
    </div>

    <?php // get_template_part( 'snippets/snippet', 'nav' ); ?>


    <?php get_template_part( 'snippets/nav','top' ); ?>

    <main>

        <?php get_template_part( 'hero/hero' ); ?>
        <?php get_template_part( 'blocks/blocks' ); ?>