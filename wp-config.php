<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QS;.t.ncU!r&+U6C:qQ^aiYDZeABS~pE!g2c508eB:<NBVg({z%e]qnF*-i1AL&{' );
define( 'SECURE_AUTH_KEY',  '3@O+>YvA|Gqir,}elQX Vjt&RFfn^XJ1e.C*_!#E|ylL f<*XeI*KOM6cOfxp /4' );
define( 'LOGGED_IN_KEY',    'Xehx+?Py*<?hRbRObz+zX6*`+e6SdHBLGwERmmeM{ UhP;HfU3Pb]QViL5cM,1dM' );
define( 'NONCE_KEY',        '8k-S_Rw~:8EzT&`W;DYd5x%hqM+Z5PRV+He%%I6#cTH/f.40_H2wFZ I/B|!x{Gk' );
define( 'AUTH_SALT',        '2e!v8$WL.;zISWC:sf}yF3JcO+`^hol2z=fH&j}wyd;+pI6Tv;O<epI;ysd,b*K|' );
define( 'SECURE_AUTH_SALT', 'oKBgS@(^Z9b%4qd-Wu`DVP=!|X`>jV}0+G8[jKsChE.?z6`x/mySXkko;<)f!b|l' );
define( 'LOGGED_IN_SALT',   'k{yiv[V7*7Q@Y#O!2f3#b&#n[J^us+}<I=Q!l`0b}:Usy{?vyeSe#5J35oDJd`s+' );
define( 'NONCE_SALT',       ')6AEu]h3c&b4ja8#x50wzo.`Nrzbck%#n&mX-FuEvL![>cAj]5f nq~nD4MDGE{X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
