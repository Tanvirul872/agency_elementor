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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elementor_agency' );

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
define( 'AUTH_KEY',         '}+gvb2mnpn3^bw(+XlqK_laZJ-sxREc9uPs-;R&Lw1]{aSU,ri{qzd(T`9XZO?S:' );
define( 'SECURE_AUTH_KEY',  'sz?>JIHn %|eS(<()Y[.ixz1{3u>(,;-q]?xg&a._Ob9V_gPXWYOywYi|Vv7(jNQ' );
define( 'LOGGED_IN_KEY',    'v: W=Gt|x8kQ?bko&pXB6pxm%wx{7u*S=Df/w--oL}t]htpX`W+^zw-BM!Lt..7z' );
define( 'NONCE_KEY',        '7|62`}b&liYb4w[V3L o0 AO,z4c!Rn9 q^7?8]a|oMc(]M@@})C qB0U[JO8z:n' );
define( 'AUTH_SALT',        'Nt+(|@5t]nQ9:]u`0q!+[hAIm1aEa_[g*=?(f)1wwd0/cm0_O?l%dba8+HYR;vdZ' );
define( 'SECURE_AUTH_SALT', 'wx,X{:RaK(Go5kM6;#HXI%Zwz+?b&H>bdTSAg?c&{HA&YaGqk]`m1V^Nl_Ylz)&j' );
define( 'LOGGED_IN_SALT',   '2PI;jtRonjx7UgKEEPCwgS<$ng*|>;*!,wXWx{.~}xp#M-LEiNz;:WnR)da]}%IF' );
define( 'NONCE_SALT',       '6a!c16P.Y2r.P5(h/ggG|ec$ ~uU)PZe^(E}+y{:]rCripq6SJtVcLl@6!}a=-2$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
