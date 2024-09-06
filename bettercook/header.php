<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>

    <?php wp_head(); ?>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/dist/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/dist/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/dist/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/dist/assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/dist/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css" />

    <script>
        iconsPath = '<?php bloginfo('template_url'); ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js" defer></script>
</head>

<body <?php body_class(); ?>>

    <!-- SECTION HEADER -->
    <header data-component="Header" class="header" data-threshold=".175">
        <div class="wrapper">
            <a class="logo" href="<?php bloginfo('url'); ?>">
                <svg class="icon icon--md">
                    <use xlink:href="#icon-logo"></use>
                </svg>
                BETTER<span>Cook</span>
            </a>

            <nav class="navigation">
                <ul>
                    <li><a href="../front-page.html">Accueil</a></li>
                    <li><a href="../recette.html">Test Recette</a></li>
                    <li><a href="./">Nos recettes</a></li>
                    <li><a href="../contact.html">Nous contacter</a></li>
                </ul>
            </nav>

            <div class="menu-btn js-toggle">
                <svg class="icon open">
                    <use xlink:href="#icon-menu"></use>
                </svg>

                <svg class="icon close">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </div>
        </div>
    </header>