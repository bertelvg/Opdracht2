<?php
/**
 * 
 */

class call extends WP_Widget 

{

	public function __construct() {

		parent::WP_Widget(

			/* BASIS INFO OVER WIDGET*/
			'call', 
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
		
		$default = array( 

			/* MOGELIJKE WIDGET WAARDEN AANMAKEN*/

			'title'=> __(''),
			'text'=> __(''),
			'link text'=> __(''),
			'link'=> __('')


			);

		$instance = wp_parse_args( (array)$instance, $default );

		/* UI WIDGET IN DASHBORD*/

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
		/*INSTANTIES AANMAKEN*/
		
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

		/*WIDGET HTML OUTPUT*/
		
		extract($args, EXTR_SKIP);
		
		echo $before_widget;

		echo ' <div class="large-3 columns"> <a href="';
		echo $instance['link'];
		echo '" ';
		echo 'class=" button left" target="_blank">';
		echo $instance['link text'];
		echo '</a></div>';
		echo '<div class="large-9 columns text-left"><h4>';
		echo $instance['title'];
		echo '</h4>';
		echo '<p>';
		echo $instance['text'];
		echo '</p></div>';

		echo $after_widget;
	}

}



