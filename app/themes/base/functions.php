<?php

add_theme_support( 'post-thumbnails' );

function add_scripts_and_styles() {
    $distFile = new DirectoryIterator(get_stylesheet_directory() . '/dist');

    foreach ($distFile as $file) {
        $fullName = basename($file);
        $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

        if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
            wp_enqueue_script(
                $name,
                get_template_directory_uri() . '/dist/' . $fullName,
                [],
                null,
                true
            );
        }

        if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
            wp_enqueue_style(
                $name,
                get_template_directory_uri() . '/dist/' . $fullName,
                [],
                null
            );
        }
    }
}

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
