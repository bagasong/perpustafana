<?php


function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');


// ADMIN MENUS support
add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(

    array(
        'top-menu' => 'Top Menu',
    )
    );


// add image sizes
add_image_size('post_image', 960, 400, true);


// add SIDEBAR

register_sidebar(

    array(

        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => 'sidebar',
        'before_title' => '<h4>',
        'after_title' => '</h4>',

    )

    );

register_sidebar(

    array(

        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => 'sidebar',
        'before_title' => '<h4>',
        'after_title' => '</h4>',

    )

    );

    //woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'woocommerce_product_tabs', 'yikes_remove_description_tab', 20, 1 );

function yikes_remove_description_tab( $tabs ) {

	// Remove the description tab
    if ( isset( $tabs['description'] ) ) unset( $tabs['description'] );      	    
    return $tabs;
}