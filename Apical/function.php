<?php

function custom_theme_register_menus()
{
    register_nav_menus(array(
        'page-menu' => __('Page Menu', 'testpage'),
    ));
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => ('Header Menu'),
            'extra-menu' => ('Extra Menu')
        )
    );
}

add_action('init', 'register_my_menus');

function get_comments($args = '')
{
    $query = new WP_Comment_Query();
    return $query->query($args);
}

function custom_sanitize_title($title)
{
    return str_replace('-', '_', $title);
}