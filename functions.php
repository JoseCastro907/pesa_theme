<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets( ){
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');

        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');

        wp_enqueue_script( 'js_boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');


    }
    add_action('wp_enqueue_scripts', 'load_assets');

     //register nav menu
     register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

?>
