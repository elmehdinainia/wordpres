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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',WWdqax*igym.=Y!^J,,Que0]^kVwb8~ @98}_Wb:3KblyKwo`lDGekJ|t}&V}Z(' );
define( 'SECURE_AUTH_KEY',  'lJ`!.F9y3- irJdXIW}f`.+A8-}MUMeA~E[Jm,=K-3hwU5CmV)x)ZA&#:P_%8Z$q' );
define( 'LOGGED_IN_KEY',    'wk{$kP:QZz@C5]ZQX<.)!(:868LR+Rt:)S4tyW5S2.f9<T_mnm}!MzKiiqB5tQfi' );
define( 'NONCE_KEY',        'p4<yT-JJ5GkMmJ*,SLp7!k_%&2|0Qm##R]L#>kh_/4`jIVb$md%OC!@%=r~N5wf2' );
define( 'AUTH_SALT',        'F0wG4*Tr=Zw3^?d?)s-( e+a30mdF`)*61?K5P2!|kv2TMfvOs4_TFj?{I@DvVy/' );
define( 'SECURE_AUTH_SALT', 'LXTzG*>wX2uB$YK|}0`C5x4x:&E9z}Vq8*fZ}+HQWgbyx8g;c^[jN%n4hH0wk}ZE' );
define( 'LOGGED_IN_SALT',   '5LHfI-)}L}x[N,VrXk+MnV`bFDs-IF@n}.=z-e^u*zJEBCK).k++B4!?D%iIz2V>' );
define( 'NONCE_SALT',       'nHxQI+g=5h45z%2hr/Su}XiQ%01N|be8kpp_,LcRHkN}<`P%lg,0[3%n-zv(Rz2I' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
