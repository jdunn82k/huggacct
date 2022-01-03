<?php
/**
 * huggaccounting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package huggaccounting
 */

//Custom Theme Setup
function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );



if (!function_exists('huggaccounting_setup'))
{
    function huggaccounting_setup()
    {
        add_theme_support('title-tag');
    }
}

add_action('after_setup_theme', 'huggaccounting_setup');

//Add Custom Scripts
if (!function_exists('huggaccounting_scripts'))
{
    function huggaccounting_scripts()
    {
        wp_enqueue_style('huggaccounting-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Archivo+Black:400', array(), null, true);
        wp_enqueue_style('huggaccounting-styles', get_template_directory_uri().'/css/style.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'huggaccounting_scripts');