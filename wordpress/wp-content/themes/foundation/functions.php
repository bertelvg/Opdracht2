<?php

/*Lengte van post samenvatting bepalen*/

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function foundation_menus(){

	register_nav_menus(

		array(

			'main-menu' => 'main menu'

		)

	);
}

/*Suport theme menus*/
add_action('init', 'foundation_menus');
add_theme_support('menus');

/*Suport featured images*/
add_theme_support( 'post-thumbnails' );


/*Scripts inladen*/
function foundation_scripts() {

/*Juiste JQuery inladen (niet 1.0)*/
wp_deregister_script('jquery');
wp_register_script('jquery', 'http://code.jquery.com/jquery-2.1.4.min.js', false, null);
wp_enqueue_script('jquery');

/*Scripts inladen*/
wp_enqueue_script ('foundation_js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), false, true);
wp_enqueue_script ('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'foundation_js'), false, true);	

}

if( !is_admin()) add_action('wp_enqueue_scripts', 'foundation_scripts');

/*Styles inladen*/
function foundation_styles() {

	wp_enqueue_style ('foundation', get_template_directory_uri() . '/css/foundation.css');
	wp_enqueue_style ('theme_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','foundation_styles');


/*Widget area's aanmaken*/

if (function_exists('register_sidebar')) {  

     /*Footer widget aanmaken*/
     register_sidebar(array(  
      'name' => 'Footer Widgets',  
      'id'   => 'footer-widgets',  
      'description'   => 'Widget Area',  
      'before_widget' => '<div id="one" class="two">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h2>',  
      'after_title'   => '</h2>'  
     ));  

     /*Home widget aanmaken*/
     register_sidebar(array(  
      'name' => 'Home Widgets',  
      'id'   => 'home-widgets',  
      'description'   => 'Widget Area',  
      'before_widget' => '<div id="one" class="two">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h2>',  
      'after_title'   => '</h2>'  
     ));  

      
    }  

?>