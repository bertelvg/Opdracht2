<?php



/**

 * 

 */

class codewrapper extends WP_Widget 

{

	public function __construct() {

		parent::WP_Widget(

			'codewrapper', 
			
			//title of the widget in the WP dashboard
			__('Codewrapper'), 

			array('description'=>'Wraps whatever you type in with code.', 'class'=>'codewrapperwidget')

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

			'title' => __(''),

			'code'=> __('')

			);

		$instance = wp_parse_args( (array)$instance, $default );

		//this is the html for the fields in the wp dashboard
		echo "\r\n";

		echo "<p>";

		echo "<label for='".$this->get_field_id('title')."'>" . __('Title') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('title')."' name='".$this->get_field_name('title')."' value='" . esc_attr($instance['title'] ) . "' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('code')."'>" . __('What do you want wrapped?') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('code')."' name='".$this->get_field_name('code')."' value='" . esc_attr( $instance['code'] ) . "' placeholder='This shows up as a watermark in the field.' />" ;

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

		$instance['code'] = $new_instance['code'];

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
		echo '<div class="your-class"><!--Your custom html code goes here!-->';

		echo $instance['code'];
		
		// code after your user input
		echo '</div>';
			
		//global WP theme-driven "after widget" code
		echo $after_widget;
	}

}



