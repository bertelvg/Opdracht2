<?php

function foundation_menus(){

	register_nav_menus(

		array(

			'main-menu' => 'main menu'

		)

	);
}

add_action('init', 'foundation_menus');
add_theme_support('menus');




function foundation_scripts() {

wp_deregister_script('jquery');
wp_register_script('jquery', 'http://code.jquery.com/jquery-2.1.4.min.js', false, null);
wp_enqueue_script('jquery');

wp_enqueue_script ('foundation_js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), false, true);
wp_enqueue_script ('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'foundation_js'), false, true);	

}

if( !is_admin()) add_action('wp_enqueue_scripts', 'foundation_scripts');


function foundation_styles() {

	wp_enqueue_style ('foundation', get_template_directory_uri() . '/css/foundation.css');
	wp_enqueue_style ('theme_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts','foundation_styles');



?>