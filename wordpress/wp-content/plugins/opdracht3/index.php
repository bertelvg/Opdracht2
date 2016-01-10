<?php

/*

    Plugin Name: opdracht3

    Plugin URI: 

    Description: 
    Author: Bertel Van Gansbeke

    Author URI: http://bertelvangansbeke.be

    Version: 1.0.0
*/


function wporg_settings_api_init() {
// Add the section to reading settings so we can add our fields to it
add_settings_section(
'wporg_setting_section',
'Example settings section in reading',
'wporg_setting_section_callback_function',
'reading'
);
 
// Add the field with the names and function to use for our new settings, put it in our new section
add_settings_field(
'wporg_setting_name',
'Example setting Name',
'wporg_setting_callback_function',
'reading',
'wporg_setting_section'
);
 
// Register our setting in the "reading" settings section
register_setting( 'reading', 'wporg_setting_name' );
}
 
add_action( 'admin_init', 'wporg_settings_api_init' );
 
/*
 * Settings section callback function
 */
 
function wporg_setting_section_callback_function() {
echo '<p>Intro text for our settings section</p>';
}
 
/*
 * Callback function for our example setting
 */
 
function wporg_setting_callback_function() {
$setting = esc_attr( get_option( 'wporg_setting_name' ) );
echo "<input type='text' name='wporg_setting_name' value='$setting' />";
}

/**
 * Add an admin submenu link under Settings
 */
function wporg_add_options_submenu_page() {
     add_submenu_page(
          'options-general.php',          // admin page slug
          __( 'WPORG Options', 'wporg' ), // page title
          __( 'WPORG Options', 'wporg' ), // menu title
          'manage_options',               // capability required to see the page
          'wporg_options',                // admin page slug, e.g. options-general.php?page=wporg_options
          'wporg_options_page'            // callback function to display the options page
     );
}
add_action( 'admin_menu', 'wporg_add_options_submenu_page' );
 
/**
 * Register the settings
 */
function wporg_register_settings() {
     register_setting(
          'wporg_options',  // settings section
          'wporg_hide_meta' // setting name
     );
}
add_action( 'admin_init', 'wporg_register_settings' );
 
/**
 * Build the options page
 */
function wporg_options_page() {
     if ( ! isset( $_REQUEST['settings-updated'] ) )
          $_REQUEST['settings-updated'] = false; ?>
 
     <div class="wrap">
 
          <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
               <div class="updated fade"><p><strong><?php _e( 'WPORG Options saved!', 'wporg' ); ?></strong></p></div>
          <?php endif; ?>
           
          <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
           
          <div id="poststuff">
               <div id="post-body">
                    <div id="post-body-content">
                         <form method="post" action="options.php">
                              <?php settings_fields( 'wporg_options' ); ?>
                              <?php $options = get_option( 'wporg_hide_meta' ); ?>
                              <table class="form-table">
                                   <tr valign="top"><th scope="row"><?php _e( 'Hide the post meta information on posts?', 'wporg' ); ?></th>
                                        <td>
                                             <select name="wporg_hide_meta[hide_meta]" id="hide-meta">
                                                  <?php $selected = $options['hide_meta']; ?>
                                                  <option value="1" <?php selected( $selected, 1 ); ?> >Yes, hide the post meta!</option>
                                                  <option value="0" <?php selected( $selected, 0 ); ?> >No, show my post meta!</option>
                                             </select><br />
                                             <label class="description" for="wporg_hide_meta[hide_meta]"><?php _e( 'Toggles whether or not to display post meta under posts.', 'wporg' ); ?></label>
                                        </td>
                                   </tr>
                              </table>
                         </form>
                    </div> <!-- end post-body-content -->
               </div> <!-- end post-body -->
          </div> <!-- end poststuff -->
     </div><?php
}



/**
 * METABOX! 
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'VAKGEBIED', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>
 
    <p>
        <label for="meta-text" class="prfx-row-title"><?php _e( 'Vakgebied:', 'prfx-textdomain' )?></label>
        <input type="text" name="meta-text" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['meta-text'] ) ) echo $prfx_stored_meta['meta-text'][0]; ?>" />
    </p>
 
    <?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-text' ] ) ) {
        update_post_meta( $post_id, 'meta-text', sanitize_text_field( $_POST[ 'meta-text' ] ) );
    }
 
}
add_action( 'save_post', 'prfx_meta_save' );

?>






<?php
 
add_action('admin_menu', 'sep_menuexample_create_menu' );
function sep_menuexample_create_menu() {
//create custom top-level menu
add_menu_page( 'My Plugin Settings Page', 'Opdracht 3','manage_options', __FILE__, 'sep_menuexample_settings_page',screen_icon('edit'));

add_submenu_page( __FILE__, 'BufferCode Submenu','Settings', 'manage_options',__FILE__.'_menu1', 'sep_menuexample_settings_page2' );
}
function sep_menuexample_settings_page(){
    echo "<br>";
    echo "THIS IS SETTINGS PAGE";
}

function sep_menuexample_settings_page2(){
    echo "<br>";
    echo "THIS IS SETTINGS PAGE2";
}


?>





