<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

    <header class="l-header">
        <a href="<?php echo home_url() ?>" class="l-header__brand">
            <?php echo bloginfo('name') ?>
        </a>

        <button class="hamburger hamburger--squeeze js-hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <nav class="c-offcanvas js-offcanvas" role="navigation">
            <?php wp_nav_menu([
                'block' => 'menu',
                'container' => false
            ]) ?>
        </nav>
    </header>
