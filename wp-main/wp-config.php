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
define( 'DB_NAME', 'revelationva' );

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
define('AUTH_KEY',         'JpfhUT*tCJ2$?f:6)%[51@xbxd)+.^K?+|f<j-tWN;wy-v xvq{*5COu-xfm6eAN');
define('SECURE_AUTH_KEY',  '$yzzRJ#Cd_2hMb|0d-xo$:[ip%o/sn3r>#BnDl-,Fqky%!^?vc-f#*7{89#r0ym@');
define('LOGGED_IN_KEY',    ']^qyUr@c:+jQMn:iXV3(LY^|?GZ),T^1$Q!TGGI9W-ni[%|?D(AY9?tj>n9_s0` ');
define('NONCE_KEY',        'v*VUxwl^:{< pR<,C1OyMg!&I4tyi-P|zQAJ))q5JyL6A`aPtR#Lfob8Z~~Sg+Eh');
define('AUTH_SALT',        '5bid0#uhfDMB<W@WG`:_el4kHGqNz,-c0gJ]GQn$|rom8% !8>$OA#%rT@gm,`6M');
define('SECURE_AUTH_SALT', 'X38#F76D]W VK`pvBnH~S2)S)`w+166EB?F?d]OB+K31Iz>OLc]jq)T)dRN9U?w_');
define('LOGGED_IN_SALT',   'F1n~)9:*_7Z{NP+be@-CgJmVKqzE!0].?~B[h-|[?g>{FN(:qYXH}QabLw<I&y]7');
define('NONCE_SALT',       ']M8H>,1NUT&;]/mzz wt<W$7y(2aBZv?ZJ+uh*:3GO-0E-NkB<-/tbL}3n3.do{m');

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
