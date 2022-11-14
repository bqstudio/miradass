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
define( 'DB_NAME', 'miradas' );

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
define( 'AUTH_KEY',         '&(kbyGCIx!!hj7)VxU88Ee#W.e 8(4rimhjMuK&J!594<8*VF>{=7,tg;f{P3wG}' );
define( 'SECURE_AUTH_KEY',  'Uik4MYU8)DsK`>;?)E7)Y~%V[aEEJo}mk.NUsvn!-85p(@L?1Zq0V`=r8vuJP0bz' );
define( 'LOGGED_IN_KEY',    '-Mmt*p)l4o4>_,-3-M#OD7X 1fyDyn@;>,~j-1;ySkL+z4k6f(E?[}+{<bV@&HQ~' );
define( 'NONCE_KEY',        'jm]WWmNf{xGc{Z1Y]KzBZf1&UFNgPIhT0.`Tq5aEjK:g [(_Q#*(r1W5/ T,diF_' );
define( 'AUTH_SALT',        'lDTM<e#Isv 1j3kmVFl(h1u<d[/88tNK<hiDz]k>Pux.B{pn6;,^~?`-I)E=|s8h' );
define( 'SECURE_AUTH_SALT', 'U+9 #Zp{c^>wt9sN|y@*u$+u-@bO1iq /):sc4d<[dj0plq_Cc7_N37y@tRZJBc ' );
define( 'LOGGED_IN_SALT',   'N.eP|&<s3x6vZt11Be<}-K`,K4pq`)2l6v87FwB&LrjSXyW:;/4VToT#Z]./5f0U' );
define( 'NONCE_SALT',       '4*=D;/Z/P{1c`hQY7Hojst4wKc;CaTW;vl8+PZV2&R:f)[;K62%[b#DVcXVLP^&}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pa_';

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
