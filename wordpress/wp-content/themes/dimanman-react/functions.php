<?php
/**
 * Created by IntelliJ IDEA.
 * User: stj
 * Date: 02/03/2018
 * Time: 16:14
 */

get_template_part('functions_all');
get_template_part('wp_api_extension');

add_action('wp_enqueue_scripts', 'dm_register_all');
add_action('init', 'dm_register_nav_menu');

add_theme_support( 'post-thumbnails' );

/*
 * API extention
 * */
add_action( 'rest_api_init', function () {
    register_rest_route( 'dm_route', '/menu', array(
        'methods' => 'GET',
        'callback' => 'dm_get_menu',
        'show_in_rest' => true,
    ) );
} );