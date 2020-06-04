<?php

function load_stylesheets()
{
    wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css', array(), false, 'all') ;
    wp_enqueue_style('bootstrap') ;
    wp_register_style('stylesheet', get_template_directory_uri().'/style.css',array(),false ,'all');
    wp_enqueue_style('stylesheet') ;
}
add_action('wp_enqueue_scripts','load_stylesheets');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top menu', 'theme')
    )) ;

