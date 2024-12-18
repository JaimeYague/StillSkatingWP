<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PruebaWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'alu3EznWEYcGs4QJqF2rmGymrhQZCz3oQBRbEWnQ2gXm0IgGba2xtlVo0wYPirTy' );
define( 'SECURE_AUTH_KEY',  'YPG3qhlRxoRTXx4aMVnQslsIjxg7u5vxepyENI6btmj3fcmQDiZq0qkWyvA1hcnN' );
define( 'LOGGED_IN_KEY',    'AlODN7gx7SaxPISRrJp3GLPWbY1KDmZl0j13ARDNUjyiQ7bitl6slkAmtUus0Bxf' );
define( 'NONCE_KEY',        'm1Eza0ogWErazZQGmzd5Dx9rT7Di4FML9DuZkH02m4opwQpl1DpR84hyDttQsDDR' );
define( 'AUTH_SALT',        'iOcSwrK33HGL0mZCxsMXkGodqTbJJYVPbnZw5eDQOAQnho1ZdaYErAqw2bzcbgFB' );
define( 'SECURE_AUTH_SALT', 'rq0EGgZhvlFx9gMURadq3XMZ9EbdAIKX9xVFzlsviCVlXiJuYE6L0EoX8WZ5JXpK' );
define( 'LOGGED_IN_SALT',   'EHLACnVW6irvEA2s5ILD3YktbGKRmRTxTEfRRlGqMm4rsJddDPuPFrJ8IyFxE7U0' );
define( 'NONCE_SALT',       'p5cIlucbApTAfEeCXaI9xQTw43AlProrG24OSibnjb4g4aBYdsVXHpMitvRqexZe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
