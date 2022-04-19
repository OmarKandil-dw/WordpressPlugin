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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'zTuwiXnX)0]g*b}ibsu +bHAin!J m9lej[K;^^p7:XL:~HE4%x]9))Y&8>!-!~j' );
define( 'SECURE_AUTH_KEY',  '9!H|uS14yzn<w0ocG>SlE2n$mx?d&T|^jDS-KO<FJKH#,@X;)+t{K:Adg_bXO,v|' );
define( 'LOGGED_IN_KEY',    '@?]vv2i?;9#A9esVmIVF|UlX_FA1cBnJ47}gS30EZgZQ4wEneV6b1G<tZF@Ei_l}' );
define( 'NONCE_KEY',        '}}?S!>,?.*/%?= ?yq5}{nxr1w6x=0r*A4=iB_$$>|oZyXi7Rw-Y0C[=4EW)0~_N' );
define( 'AUTH_SALT',        'cAZ411kj.,F9$8is=GTG?hT{)|mC_pHf|h0q4i;s9`!H2/iP?I-?J5QL@$++ Lt7' );
define( 'SECURE_AUTH_SALT', '5)#Hv47#WM[$ml8I}C|3yGz{~!EofEu`H*BlzlWZve7chgI/3lB+?U%4/cg6%79T' );
define( 'LOGGED_IN_SALT',   'MiABc#@WJmD~>0W.dhZ%:AoW0!`CLg5N$s=1>h/%!cox`Zg, -|{=v*wft>@x!84' );
define( 'NONCE_SALT',       'Al,#pZ>i#{$pdzh8r4z= Y%82%(.e?fS({8zUN635pHrw?]. 9VJ<Dt?FIbkagd%' );

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
