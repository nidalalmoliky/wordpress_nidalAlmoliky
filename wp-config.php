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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'mpse@YNu[k{~q-r`m7o,ZsP]W^h=Ves0[XHQ/51b#P|Fk zyBKV_FqCTxM?VpK/O' );
define( 'SECURE_AUTH_KEY',  'XL~jSw9}37?z*&9e7i3)q~JJr;AykFM@s%}S2y^&0Y %LY<mDy.L9#+-7naWK!x*' );
define( 'LOGGED_IN_KEY',    'BV--S0P|W;QH9um*4>kk4%:#1xpY<6 ~uZQImf=+QU)5o5WG]SiS2rlf!4yDLtc5' );
define( 'NONCE_KEY',        'Us]eQ$B5qZ8iTnb`0}wH[<`Ee,}+8N#:|CUW%gPZ].ha_?yngU4ypUGA.Z9+n,I$' );
define( 'AUTH_SALT',        'rk)Tg]*9wWLgY/{:F`zk`;W(K`eU@?:.~MF)*L(iMa5}yoYvy0}@PZg,[.b?S[TD' );
define( 'SECURE_AUTH_SALT', ']Hb5:JC`p$:zK)x})@>I7`A2]!O{ISw3Cx2{e,8=@<UTF)^yQ|2FN]OyB^b*bB>[' );
define( 'LOGGED_IN_SALT',   '5!Rm[#[ /BU>g{W!ZN5BDx3 P|82oXcZS[v:(.q^fY0YCj04@;nW8o(X,:rfaQlq' );
define( 'NONCE_SALT',       'kegg#Jdn~b9pNur-:ze,aI+!N[/9FE~:+O}f;`}65DT,cu~oF-Gm(.Hi@!EOj)rW' );

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
