<?php

/*

    Plugin Name: opdracht3

    Plugin URI: 

    Description: 
    Author: Bertel Van Gansbeke

    Author URI: http://bertelvangansbeke.be

    Version: 1.0.0
*/


// DEEL 1: ADD MENU ITEM + SUBMENU

// 1.1 MENU AANMAKEN 
add_action('admin_menu', 'sep_menuexample_create_menu' );
function sep_menuexample_create_menu() {
    add_menu_page( 'My Plugin Settings Page', 'Opdracht 3','manage_options', __FILE__, 'sep_menuexample_settings_page',screen_icon('edit'));
    add_submenu_page( __FILE__, 'Settings opdracht 3','Settings', 'manage_options',__FILE__.'_menu1', 'settings_page' );
    add_action( 'admin_init', 'register_settings' );
}


// 1.2 OUTPUT HOOFDPAGINA PLUGIN
function sep_menuexample_settings_page(){?>
   
    <div class="wrap">
        <h2>Opdracht 3</h2>
        <p> (Settings in submenu)</p>
        <p> Werkstuk opracht 3 Advanced web development</p>
        <a href="http://www.erasmushogeschool.be/opleidingen/bachelors/multimedia-communicatietechnologie-multec">Erasmus hogeschool brussel // multec</a>
        <br><br><hr><a href="http://bertelvangansbeke.be/#1">Bertel Van Gansbeke</a> <p>3e Bach Multec App and web</p>
    </div>

<?php }


// DEEL 2: 3 PLUGIN SETTINGS

// 2.1 REGISTREREN VAN SETTINGS
function register_settings() {
    //register our settings
    register_setting( 'settings-group', 'font-size' );
    register_setting( 'settings-group', 'font-color' );
    register_setting( 'settings-group', 'font-weight' );
}

// 2.2 OUTPUT SETTINGSPAGINA (SUBMENU) PLUGIN
function settings_page() {
?>
    <div class="wrap">
        
        <h2>Opdracht 3: settings vakgebied</h2>
            <form method="post" action="options.php">
                <?php settings_fields( 'settings-group' ); ?>
                <?php do_settings_sections( 'settings-group' ); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Font-size (px)</th>
                        <td><input type="text" name="font-size" value="<?php echo esc_attr( get_option('font-size') ); ?>" /></td>
                    </tr>
                     
                    <tr valign="top">
                        <th scope="row">Font-color (hex)</th>
                        <td><input type="text" name="font-color" value="<?php echo esc_attr( get_option('font-color') ); ?>" /></td>
                    </tr>
                    
                    <tr valign="top">
                        <th scope="row">Font-weight (100-900)</th>
                        <td><input type="text" name="font-weight" value="<?php echo esc_attr( get_option('font-weight') ); ?>" /></td>
                    </tr>
                </table>         
                <?php submit_button(); ?>
            </form>
    </div>
<?php }


// DEEL 3: METABOX AAN POST PAGINA TOEVOGEN + VERWERKEN

// 3.1 AANMAKEN METABOX OP POST PAGE
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'VAKGEBIED', 'prfx-textdomain' ), 'prfx_meta_callback', 'post' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );


// 3.2 OUTPUT VAN METABOX OP POST PAGE
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

// 3.2 OPSLAAN VAN METABOX INPUT 

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










