<?php
/*
 * Plugin Name: Base
 * Description: General project config/functions.
 */

// Remove Wordpress version from head
remove_action('wp_head', 'wp_generator');

// Remove shortlink from head
remove_action('wp_head', 'wp_shortlink_wp_head');

// Remove rsd link from head
remove_action('wp_head', 'rsd_link');

// Remove Windows Live Writer link from head
remove_action('wp_head', 'wlwmanifest_link');
