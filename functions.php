<?php

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets( ){
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');

        wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js');

        wp_enqueue_script( 'js_boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js');


    }
    add_action('wp_enqueue_scripts', 'load_assets');

     //register nav menu
     register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

?>
