<?php



/**

 * 

 */

class call extends WP_Widget 

{

	public function __construct() {

		parent::WP_Widget(

			'call', 
			
			//title of the widget in the WP dashboard
			__('call'), 

			array('description'=>'Call to action', 'class'=>'call')

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

			

			'title'=> __(''),
			'text'=> __(''),
			'link text'=> __(''),
			'link'=> __('')


			);

		$instance = wp_parse_args( (array)$instance, $default );

		//this is the html for the fields in the wp dashboard
		echo "\r\n";

		echo "<label for='".$this->get_field_id('title')."'>" . __('title') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('title')."' name='".$this->get_field_name('title')."' value='" . esc_attr( $instance['title'] ) . "' your title' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('text')."'>" . __('text') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('text')."' name='".$this->get_field_name('text')."' value='" . esc_attr( $instance['text'] ) . "' your text' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('link text')."'>" . __('link text') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('link text')."' name='".$this->get_field_name('link text')."' value='" . esc_attr( $instance['link text'] ) . "' your link text' />" ;

		echo "</p>";

		echo "<p>";

		echo "<label for='".$this->get_field_id('link')."'>" . __('link') . ":</label> " ;

		echo "<input type='text' class='widefat' id='".$this->get_field_id('link')."' name='".$this->get_field_name('link')."' value='" . esc_attr( $instance['link'] ) . "' your link' />" ;

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

		$instance['text'] = $new_instance['text'];

		$instance['link'] = $new_instance['link'];	

		$instance['link text'] = $new_instance['link text'];

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
		echo ' <div class="large-3 columns"> <a href="';

		echo $instance['link'];
		
		// code after your user input
		echo '" ';

		echo 'class=" button left" target="_blank">';

		echo $instance['link text'];
		
		// code after your user input
		echo '</a></div>';

		echo '<div class="large-9 columns text-left"><h4>';

		echo $instance['title'];
		
		// code after your user input
		echo '</h4>';

		echo '<p>';

		echo $instance['text'];
		
		// code after your user input
		echo '</p></div>';







			
		//global WP theme-driven "after widget" code
		echo $after_widget;
	}

}



