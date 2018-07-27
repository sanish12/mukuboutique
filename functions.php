<?php

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script('custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');

function themename_widgets_init()
{
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'muku'),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => __('Secondary Sidebar', 'theme_name'),
        'id' => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'themename_widgets_init');

// woocommerce section
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


function wpsites_register_woo_widget()
{

    register_sidebar(array(
        'name' => 'wooFilter',
        'id' => 'before-products',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'wpsites_register_woo_widget');

add_filter('woo_main_before', 'before_products_widget', 25);

function before_products_widget()
{

    if (is_product() && is_active_sidebar('before-products')) {
        dynamic_sidebar('before-products', array(
            'before' => '<div class="before-products">',
            'after' => '</div>',
        ));

    }
}
/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}
/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
?>