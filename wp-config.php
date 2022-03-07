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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tTY25iZk8XyKMfjhp92BnMmMpQnYeWyrbrwhixJ/TSoWV/Xam5CxSqe7PHWZXHlJ0eLRfSpRzhtJ2roXQ9FjMw==');
define('SECURE_AUTH_KEY',  'XtPPwuGHeOFhqYpNwn5iSYwX+V2L/WYnc7tf74jf3LbBZT9BjTA76581sOUSkjUwuAv93z4ixXXADcugwgT3rw==');
define('LOGGED_IN_KEY',    'SOn9nCOIRgkFx9T7wSO55cS240zVYZHBTstYWbY+k+B/6J7n2tXKj9Xh4B8SriR/WdO1KO+5/iWigzudnN+4PQ==');
define('NONCE_KEY',        'e76jkNJivbQS2Nu5StcTLgc0uqykBsTqfVovhKJ1GApmqYpz4lAl6R7uqS3dkcg1GC2X9VX6T+PNPWClP5KrMA==');
define('AUTH_SALT',        'D3+QzCIMRmxYanBMOEBxsA25lyIsuNshY/Cgo9rxG/BVz/KckrQLdGb75blSDeVS63fHYfwcHBIFwcqR2VKIiA==');
define('SECURE_AUTH_SALT', 'UvLAvNlAmINY7uRy+xKJl750UxSqbmxLJDKdsJX2mhWjHYQCnSJCYUmEuQHqHRgDAt2DV+H0GHxR8OA0GTd5Dw==');
define('LOGGED_IN_SALT',   'Y4hGAdMvHVKn4sViar+C2vysGJPxLv+FSyxoaY8fYqHwpF/mokqrnBenB0yElX2394MQrGlrwzkW5neej1svGg==');
define('NONCE_SALT',       'Qs6Uz7QVCxHJCmzgsBbgqIvem2I4aWeII6pR2V/Hv8/iwV+02kJpRi8ZJFTTmBQQn86Ew0j3Ysfx4OQLNo13Dw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
