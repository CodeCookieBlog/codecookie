<?php

namespace App\Themes\CodeCookie\Functions;
$namespace = 'App\Themes\CodeCookie\Functions\\';

/** Define the style and script directories for the CodeCookie Theme */
define('THEME_STYLE_DIRECTORY', get_stylesheet_directory() . '/');

add_action('after_setup_theme', $namespace . 'theme_support');
add_action('wp_enqueue_scripts', $namespace . 'theme_register_assets');
add_filter('document_title_separator', $namespace . 'theme_title_separator');

function theme_support(): void
{
    add_theme_support('title-tag');
}

function theme_register_assets() {
    wp_register_style('codecookie-style', THEME_STYLE_DIRECTORY . 'style.css' );
    wp_enqueue_style( 'codecookie-style');
}


function theme_title_separator() {
    return '|';
}