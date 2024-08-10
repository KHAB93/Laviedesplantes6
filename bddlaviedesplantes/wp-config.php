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
define( 'DB_NAME', 'bddlaviedesplantes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':XlXp1)>OARS-PXN&.k+7y4^S.2y#C<*`^&p* :Q^IrQQ,G8].2tW,L]Hsl:Gq[H' );
define( 'SECURE_AUTH_KEY',  'Q7 GQUYiy2rlo$46h;ULGb.&sO/vRkB[ZSB5?,RUwbzj,bDEwfWk@Oxr_7R}+F#i' );
define( 'LOGGED_IN_KEY',    'A=4z72H&j-vx%xWNyagc6^k5*I=GN2h-E+sPw:ZHC3LZi}[aEF|S#d2=Z*s~8=qG' );
define( 'NONCE_KEY',        'L(=+U-e!|<pNd9d|qa}%spbpC!F{g]U~?;Rl||;j@@HT:#YdgzOBKj$kz:vYD?gW' );
define( 'AUTH_SALT',        'uH0echOlHWXhhfV7D<0Se8Ae:]Md8CwV/|W#K )ZeBgM,.r`4DGxn6v:wS]Wf}j?' );
define( 'SECURE_AUTH_SALT', ':#E&q`=YQT:(0+HhV3-V+YYKl*}XnPa%39*`~&6=3fq=+Oa(@}U},C0ADH^h4@VT' );
define( 'LOGGED_IN_SALT',   'fs,i~=Yo<g3;!.=6cW0f^vHu*]~rw]:rtVq!2ADOYQ|beXfdp(0yoV!abd^hyi(|' );
define( 'NONCE_SALT',       '/4>v=&^KN+hyzdxs(p^2KhkvLRSkMM}FFgX@cGPis&FMn+`LLDuRU7>h[w&hxj4j' );

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
