<?php

add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Register navigation menus.
    register_nav_menus([
        'navigation' => __('Navigation', 'wordplate'),
    ]);
});

// Enqueue theme scripts and styles
add_action('wp_enqueue_scripts', function () {
    $distFile = new DirectoryIterator(get_stylesheet_directory() . '/dist');

    foreach ($distFile as $file) {
        $fullName = basename($file);
        $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

        if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
            wp_enqueue_script(
                $name,
                get_template_directory_uri() . '/dist/' . $fullName,
                ['jquery'],
                null,
                true
            );
        }

        if (pathinfo($file, PATHINFO_EXTENSION) === 'css' && !env('INJECT_CSS')) {
            wp_enqueue_style(
                $name,
                get_template_directory_uri() . '/dist/' . $fullName,
                [],
                null
            );
        }
    }

    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);
