<link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/circular-book.woff2"
	type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/circular-bold.woff2"
	type="font/woff2" crossorigin="anonymous">
<style>
	@font-face {
		font-family: "Circular-Book";
		src: url("<?php echo get_stylesheet_directory_uri(); ?>/fonts/circular-book.woff2") format("woff2");
		font-display: swap;
		
	}
	@font-face {
		font-family: "Circular-Bold";
		src: url("<?php echo get_stylesheet_directory_uri(); ?>/fonts/circular-bold.woff2") format("woff2");
		font-display: swap; 
	}

	:root {
		--font-1: 'Circular-Book', Helvetica, Arial, sans-serif;
		--font-1b: 'Circular-Bold', Helvetica, Arial, sans-serif;
	}
	*, html, body, p, ul, li, a {
		font-family: var(--font-1); 
	}

	body *:not(h1,h2,h3,h4,h5) {
		font-family: var(--font-1)!important; 
}

	h1,
	h2,
	h3,
	h4,
	h5 {
		font-family: var(--font-1b); 
	}
	</style>


	<!-- 

	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        *,
        html,
        body,
        p,
        ul,
        li,
        a {
            font-family: 'DM Sans', sans-serif !important;
            font-weight: 400!important;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'DM Sans', sans-serif !important;
            font-weight: 700!important;
        }
    </style>


	-->