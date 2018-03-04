<?php
/**
 * Created by IntelliJ IDEA.
 * User: stj
 * Date: 03/03/2018
 * Time: 06:55
 */

// all scripts and styles
function dm_register_all() {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('custom-css', get_template_directory_uri().'/css/custom.css');

    wp_enqueue_script(
        'popper-js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        array(),
        '1.12.9',
        true
    );
    wp_enqueue_script(
        'jquery-cdn',
        'https://code.jquery.com/jquery-3.2.1.slim.min.js',
        array('popper-js'),
        '3.2.1',
        true
    );
    wp_enqueue_script(
        'bootstrap-js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        array( 'jquery-cdn' ),
        '4.0.0',
        true
    );
//    wp_enqueue_script(
//        'react',
//        'https://unpkg.com/react@16/umd/react.production.min.js'
//    );
//    wp_enqueue_script(
//      'react-dom',
//      'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js',
//      array('react')
//    );
//    wp_enqueue_script(
//        'babel-stadanlone',
//        'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js'
//    );
//    wp_enqueue_script(
//        'main-js',
//        get_template_directory_uri().'/view/main.js',
//        array('react', 'react-dom', 'babel-standalone')
//    );
}

// register menu
function dm_register_nav_menu() {
    register_nav_menu('dm_primary', __('Top Navigation Bar'));
}

function dm_get_menu_items_by_slug($menu_slug) {

    $menu_items = array();

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_slug ] ) ) {
        $menu = get_term( $locations[ $menu_slug ] );

        $menu_items = wp_get_nav_menu_items($menu->term_id);


    }

    return $menu_items;

}