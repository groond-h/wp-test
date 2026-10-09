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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '.J.HDL[1/nUg*G1?*6<{K;w[XH^58;_EXr9Ms]&k0<u$x|Nc<TJN8T98b{E+Z2Qk' );
define( 'SECURE_AUTH_KEY',   '-~z-jW^(#QatGQY^.G@IL}p8>jZA{2V&QI&A&fGYY_b ;=0_ F5n)}hB!o{bt9NV' );
define( 'LOGGED_IN_KEY',     '?3gEwfF;0Z4y|KIJnb}/hVx(x`W [B}&3Re*OIEf9L.<!9pf`tKgcT&uGlb9Xd-o' );
define( 'NONCE_KEY',         'Xs[[][G P$lN,>HXAfEotQoMuP@&}3C,z;@k4dF=*.20(d|Q&m]_J*LB9gPv;*:<' );
define( 'AUTH_SALT',         'AX_<g!>[rom<4[ued{9wI4</j5os|?C:ps0/D@9kyKj2&_@LOBDRz{cfy;*/qZc,' );
define( 'SECURE_AUTH_SALT',  'mon8Yo)ML6h;nW-e/8@I0aFJ5b#Q8F#yh4+aHLp`;?xAQ6ijdh%&6Dwg=_hvC/O(' );
define( 'LOGGED_IN_SALT',    '=J@9473!E]*8shme3,<buyk[)~eEvF(Mv1Tsqcw`:OLwJX.B5S8<C&f~|5F0sm>P' );
define( 'NONCE_SALT',        'KVm8OiUJ!y23bc=K+3{}I0T^-ijHMxkz1q3VGO)-o;o`hoEiAP+s>Y#6y H;rV{=' );
define( 'WP_CACHE_KEY_SALT', 'DtsooKGdQ,[A5sdbx3kmS`5)1Sx/bYG*3*%uw;NH.<!oPkCJ#K}_y1WumXb,=o:^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
