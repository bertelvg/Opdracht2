<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WDAWP036');

/** MySQL database username */
define('DB_USER', 'WDAWP036');

/** MySQL database password */
define('DB_PASSWORD', '87561349');

/** MySQL hostname */
define('DB_HOST', 'dt5.ehb.be');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sp#?scGF-5I|:@[0RC$s3)+e1d:bg$-v:,%R9Lx0s$7M_uVi2;|ayO-LKQKBwFRZ');
define('SECURE_AUTH_KEY',  'Dfo,)8f~qw0qF3$/DFSE3J8=[ksi|2dc#6Fa+1OcwOKE&=-)|SVC<_lB^<hJei|2');
define('LOGGED_IN_KEY',    'b0wI;~|vWqCNgq1p-NkauW?W/PtQL,>dzsC,1V@,d&BD^-fEsf3CHR|/3fj:;*</');
define('NONCE_KEY',        '@#c])K2LK`;z=;ea;+_b:kJO+Q%6PVRku7T =i$(+P(%?b{:f1q(jmVLuczJ!RvK');
define('AUTH_SALT',        '4m[L|{-bYH&*42x|U,Pq!c+)u_9&QPm}.?e)W{;D#w@28).<X5#Ryd|2KP!qkqK?');
define('SECURE_AUTH_SALT', 'FV&b?r9_ymr:NaU`8{DP^ca06K5ZqcE7d7 -~,.dUZ-|-hcb@n_@0.o?>]}|;%BL');
define('LOGGED_IN_SALT',   '|ZDq{ebiNov<4fmtnmamV!N{M32L*hp.nvoQ +:yFD50cwT?:>)&UW!7h/M.pJh8');
define('NONCE_SALT',       't(h*f$n+q8+yK?`xEFkx3:=^0o|c0g^E=L]jr-EP|Q]](.[FUUNqjn?K|eqH$Vhj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');