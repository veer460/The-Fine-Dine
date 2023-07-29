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
define( 'DB_NAME', 'new_website' );

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
define( 'AUTH_KEY',         'o?h%9y;Q*Y.l/ezgQ$`^L!O~H^.S0hIicqO4+V2cAmx;z@B ;0P3p3X}T@;Xuv8~' );
define( 'SECURE_AUTH_KEY',  ':RIE3h=aP.5w(+uA*[)apeR~nq0^Y2^M8$0j5eahwJVJbUSb/*6b=E4tgCo1D43!' );
define( 'LOGGED_IN_KEY',    'C,dCLq}>6M$[w:i1n7:3~qxzMS_e}iI|4-;(2v_p*~(_d`|cSZOH9.l}1Z1q&ZqB' );
define( 'NONCE_KEY',        'jM6s.*X;Bm>kpCHfl~MNO/Xy??%6BTz#I,$q0zb$`M|uj:rAPv@j>KYS+Qql~oJ|' );
define( 'AUTH_SALT',        'Z;Mg}kd3H0@ d]?2YELKs`:_nyq@X^:vP.)+iN9%h^LOAX7D0y1;wE=EZHyl]k= ' );
define( 'SECURE_AUTH_SALT', '~g<_$@hBFF&51~1KJY(5d!L2Cd^oLaTFPvkx3G2ugr!q G%Df;<jdV^^b:e_47~L' );
define( 'LOGGED_IN_SALT',   ' 0h~OHG8{N@.Az{KCfB_;CQ!DsF KnFpOT]f@=bzh@XxBk<4gIT0OVI=?v8e9Kvg' );
define( 'NONCE_SALT',       'ZeIMiwcexuserprYY%ob}8/{5$=xdIBG^grNIH/ZS)1pB;&^Kbks?Xzg$Jz>M/4s' );

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
