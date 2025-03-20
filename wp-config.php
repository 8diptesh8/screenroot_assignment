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
define( 'DB_NAME', 'screenroot' );

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
define( 'AUTH_KEY',         '!Bn5btITGRH#4~]bpxuXk&CP15/UZMYX+I.?<?{Qx.kH-56.EnoxV+xfI3k-k0>2' );
define( 'SECURE_AUTH_KEY',  'mH>3KGC4B+kOqe@mVQ{]1e%8i7V8)c1(59.dWz*_Z([^>V@sXQ{v{|~Y&k5!qDe,' );
define( 'LOGGED_IN_KEY',    '*p-?I+xUuzct9[hem)[]jF+DG(n[p4<o%S($8TEMjp%8iL><%YO`n*fL+Y8^1+K`' );
define( 'NONCE_KEY',        'K?oZ.qO_UxraoSAA;}Co^9a+o1tVd8I}LJ40%;#T2*5 {~}]<%DQ,9|O^,uA=Og<' );
define( 'AUTH_SALT',        '8btz h9_gf $TOWJV>xjQhqyNXYV{-$:!1@-=C1IGXCN_uL$}`Mn.T37)FI8sr^|' );
define( 'SECURE_AUTH_SALT', '#8zHWxr5m+@KN>FHht.Ci0`4CCIW*WOOto(^N3Z7Pdm[F6|0kID*U!fIfu2lF<#v' );
define( 'LOGGED_IN_SALT',   'I[b[98!VkVG2#@#MYj/Ic7:6fN{0vQKWHE .V(^9r#bopo|o!.%Klw_RbgIH->Yl' );
define( 'NONCE_SALT',       'n!X0Fw3 dFm]lUY$e=?[;V :MxAEvyW[pU!lIMlPKfY@$iDXSY}S,/Xkrhu$>=V@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
