<?php
/*
Plugin Name: Aria Personal Portfolio
Plugin URI: https://coindej.com
description: Create your personal portfolio WordPress website. Manage and showcase past projects to get more clients
Version: 3.0
Author: CoinDej - AriaHaman Group
Author URI: https://coindej.com
License: GPL2
*/


function app_aria_portfolio_register() {
    $args = array(
        'label' => __('Portfolio'),
        'singular_name' => __('Portfolio'),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
//		'rewrite' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('portfolio', $args);
    register_taxonomy("portfolio_categories", array("portfolio"), array("hierarchical" => true,
        "label" => "Portfolio Categories",
        "singular_label" => "Portfolio Categories",
        "rewrite" => true
    ));
}
add_action('init', 'app_aria_portfolio_register');

//init the portfolio images gallery meta box