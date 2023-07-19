<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         '/WsD5UVPt0oKPFJOlskdmML9/xqI+SSFmgIv3GGvVNlNcffNOnlYF8RmTErWqTq5xAbOeTHWRP34COuXV8RkPw==');
define('SECURE_AUTH_KEY',  'ARy1kvI59cJCIHlM29KCCUPdIz2OTVXVJz0Yc8o1bJsU6gYI8kQsUvLPtSH+8t7/1rXNCj6YvyVnHY0XEeRJCQ==');
define('LOGGED_IN_KEY',    'cCMablWCkSY9hwK4Cxphmh84ncM0EtcwbjGCoGaeqabut9MI2KNBJfRSTuErN67MX5MS7RJ2TNIMOAVh7831jw==');
define('NONCE_KEY',        'wJbH6QGik+no401gSSUNfJj+z21qP3ZD4W78C9BcDHdHTtf/NUJG3LS2nXjlZok/h2o48LysCwsLdnn8gMcnaw==');
define('AUTH_SALT',        'Vxv2YNXdxb8pvML0/OgB7uaFTD7p6ebBhks5L/8bbhxo88/D+XnogkcXRWOr3Z6s3g5KamSRpNKGo2MilOJdig==');
define('SECURE_AUTH_SALT', '+2d/TkE2E+vsm2uZK1PY2e9ZSlo4PXJsw1b6C4MLf+OIRMIKyp5NSiSSjMFM2gAh2qCyUG3psb7Ev9yfwmnw7A==');
define('LOGGED_IN_SALT',   'qidw/A4cKFeiWE9Vn9JUO/+wITEBCxGqKaeOqG4my0L+B9t4zkAOduNBMNc41mR7Xvt9H2yUNVR1S8QBoLLr8g==');
define('NONCE_SALT',       'eBNqjLR++7pWs+tUWWoYcRf1GUKAu5hPOs1WMsRfrhzDwlU1NS+p/4PfgN4uQOht4g0nZ4oaviGje1R8f6RrVQ==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
