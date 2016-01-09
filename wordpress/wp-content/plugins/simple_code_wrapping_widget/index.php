<?php

/*

    Plugin Name: Social widget

    Plugin URI: 

    Description: 
    Author: Bertel Van Gansbeke

    Author URI: http://bertelvangansbeke.be

    Version: 1.0.0
*/



require_once 'social.class.php';
require_once 'call.class.php';
require_once 'banner.class.php';



/**

 * 

 */

function register_social_widget(){

	register_widget('social');

}



add_action('widgets_init','register_social_widget');


function register_call_widget(){

    register_widget('call');

}



add_action('widgets_init','register_call_widget');


function register_banner_widget(){

    register_widget('banner');

}

add_action('widgets_init','register_banner_widget');



?>