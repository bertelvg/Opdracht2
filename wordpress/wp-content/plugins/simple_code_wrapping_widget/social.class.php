<?php



/**

 * 

 */

class social extends WP_Widget 

{

	public function __construct() {

		parent::WP_Widget(

			'social', 
			
			//title of the widget in the WP dashboard
			__('social'), 

			array('description'=>'Social links', 'class'=>'social')

		);

	}

	

	/**

	 * 

	 * @param type $instance

	 */

	public function form($instance)

	{
		// these are the default widget values
		$default = array( 

			

			'facebook'=> __(''),
			'twitter'=> __(''),
			'linkedin'=> __('')


			);

		$instance = wp_parse_args( (array)$instance, $default );

		//this is the html for the fields in the wp dashboard
		echo "\r\n";

		echo "<label for='".$this->get_field_id('facebook')."'>" . __('Facebook link') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('facebook')."' name='".$this->get_field_name('facebook')."' value='" . esc_attr( $instance['facebook'] ) . "' your facebook link' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('twitter')."'>" . __('Twitter link') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('twitter')."' name='".$this->get_field_name('twitter')."' value='" . esc_attr( $instance['twitter'] ) . "' your twitter link' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('linkedin')."'>" . __('Linkedin link') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('linkedin')."' name='".$this->get_field_name('linkedin')."' value='" . esc_attr( $instance['linkedin'] ) . "' your linkedin link' />" ;

		echo "</p>";

	}

		

	/**

	 * 

	 * @param type $new_instance

	 * @param type $old_instance

	 * @return type

	 */

	public function update($new_instance, $old_instance) 

	{

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);

		$instance['facebook'] = $new_instance['facebook'];

		$instance['twitter'] = $new_instance['twitter'];	

		$instance['linkedin'] = $new_instance['linkedin'];

		return $instance;

	}

		

	/**

	 * Renders the actual widget

	 * 

	 * @global post $post

	 * @param array $args 

	 * @param type $instance

	 */

	public function widget($args, $instance) 

	{

		extract($args, EXTR_SKIP);
		
		//global WP theme-driven "before widget" code
		echo $before_widget;
		
		// code before your user input
		echo '<a href="';

		echo $instance['facebook'];
		
		// code after your user input
		echo '" target="_blank"><img class="social" border="0" alt="facebook" src="img/Black/24px/Facebook.png" ></a>';

		echo '<a href="';

		echo $instance['twitter'];
		
		// code after your user input
		echo '" target="_blank"><img class="social" border="0" alt="twitter" src="img/Black/24px/Twitter.png" ></a>';

		echo '<a href="';

		echo $instance['linkedin'];
		
		// code after your user input
		echo '" target="_blank"><img class="social" border="0" alt="linkedin" src="img/Black/24px/Linkedin.png" ></a>';



			
		//global WP theme-driven "after widget" code
		echo $after_widget;
	}

}



