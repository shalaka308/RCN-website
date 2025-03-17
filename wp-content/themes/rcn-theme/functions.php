<?php
//initialization of customizer settings
add_theme_support('custom-logo'); //to enable site logo menu
// add_theme_support('post-thumbnails');// to enable banner image
add_theme_support('title-tag');


function ExternalFiles()
{
    //Styles
    wp_enqueue_style('bootstrap-4-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css");
    wp_enqueue_style('material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons");
    wp_enqueue_style('style', get_template_directory_uri() . "/css/theme-styles.min.css");

    // wp_enqueue_style('theme-style', get_template_directory_uri() . "/css/theme-styles.css");

    // SCRIPTS
    wp_enqueue_script('bootstrap-4-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js", array('jquery'), rand(1000, 50000), true);
    wp_enqueue_script('bootstrap-popper-js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", array('jquery'), rand(1000, 50000), true);

    wp_enqueue_script('bootstrap-popper-js', " https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js", array('jquery'), rand(1000, 50000), true);

    wp_enqueue_script('bootstrap-popper-js', " https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js", array('jquery'), rand(1000, 50000), true);

    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/theme_script.js', array('jquery'), rand(2, 2000), true);
}

add_action('wp_enqueue_scripts', 'ExternalFiles');

// Menu Register starts 
function register_menu()
{
    register_nav_menus(array(
        'header' => 'Header menu',
    ));
}
add_action('after_setup_theme', 'register_menu');
// Menu Register ends 