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
define( 'DB_NAME', 'escape.com' );

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
define( 'AUTH_KEY',         'Hw|8/1W)BA(dY@*U6<G#I4m/rz]A2nwi]MI0p)5M#%uQRD#1=IzrP_A)R;Ul~~Y*' );
define( 'SECURE_AUTH_KEY',  'j6X34jL7VNdOfmWlo$CW8uaRTmGuv R%VuV-f!v[!W4G,CJ3q&nN`prH8f;,1oFu' );
define( 'LOGGED_IN_KEY',    'H$B18@rpvv=(&kRa9+,2~L>v5D,gk+{y3d69y6sJv*:Wqx,74bga~XdUXa|y!n{T' );
define( 'NONCE_KEY',        '?mQc<[VBjC7)lgn|:U[Ein,pwF}sCF5>{ZvZ:tAyx9Hz}^)5I`zYxt~;JPL@i6 z' );
define( 'AUTH_SALT',        '>o8}A%Npoe!^y;@HrZ[c>3)pbZ>{=/Ia?RUW4MJ/xa[y ?+IfF`A$7q-{Ul24*3;' );
define( 'SECURE_AUTH_SALT', 'd!ZcL:RgUZ!w:m={t21;(^7S`z&b_%}iO2A-+.n4cm_o6r2Fa)8Ko,=c/`ZurqL$' );
define( 'LOGGED_IN_SALT',   'k@[]M1#4MjalH`6) +(%ju^E*{(7l;YBN-xp/dXL@L$Z19VM5Ns&fDUQ&?G$;6@#' );
define( 'NONCE_SALT',       'iVd/^HhKd)JZUrm%nk-<UG;<5Fujh4;zEwHBbo4c`|l-`LUr)Ey&Pg7tB.f,`zWL' );

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
