<?php
function elinar_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'elinar_setup');

function elinar_scripts()
{
    wp_enqueue_style('elinar-style', get_stylesheet_uri(), array(), '1.0.2'); // Updated version
    // Enqueue Google Fonts (Inter and Manrope)
    wp_enqueue_style('elinar-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@500;700;800&display=swap');

    wp_enqueue_script('elinar-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'elinar_scripts');

// Helper to limit content length
function elinar_excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}

// --- Rounting Hack for Static Prototype ---
// This forces the theme to load 'page-services-development.php' when the URL contains 'development-production'
// Useful when we don't have DB access to create real pages.
add_filter('template_include', function ($template) {
    $url_path = $_SERVER['REQUEST_URI'];
    if (strpos($url_path, 'development-production') !== false) {
        $new_template = locate_template(array('page-services-development.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    if (strpos($url_path, 'about') !== false) {
        $new_template = locate_template(array('page-about.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
});
