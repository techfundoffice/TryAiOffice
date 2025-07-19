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
define( 'DB_NAME', 'u147847518_qVy4P' );

/** Database username */
define( 'DB_USER', 'u147847518_Srr8y' );

/** Database password */
define( 'DB_PASSWORD', 'D0uVE0GsvB' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'ViYc`s{G/}XgYcMZKU -1vM[dW7V[.6t&RwZoQih$Kh-/X~T4oH]mkr*,1__:>DA' );
define( 'SECURE_AUTH_KEY',   'c_wV1Xg:lE05}8c/}~^U]X(_RVM9YM#)I*GQ$Q4/6 }0H ni{LY2UuZ@DpezDUFc' );
define( 'LOGGED_IN_KEY',     '$N6?aS<k)_Ail~L!4ji&d*aqy%$9fJ3n?QUW0Cg4aN Y7{M8S&fJzwQPv?1QZ}m{' );
define( 'NONCE_KEY',         '13G`2hmA{hgQRoA;rf#HvnGS.}jA9n{ChuhYY8}]J<w9Ych}_woVZTji(GR LQF/' );
define( 'AUTH_SALT',         'EJR}AJ{_=Eufp@7_[7LR<xpfa!~Od>Z{*>du(9Tp/vg!>v}$uLL,|JDy9E|m(~xP' );
define( 'SECURE_AUTH_SALT',  'gLg+r+$=AQ`E,ql-9Arn8(T;_QdNhS$vVt~GXv0.D)[ItZirtFV+4{s&#J}pY=Ce' );
define( 'LOGGED_IN_SALT',    'oiC&c0N!.>j(;|e~ytM-6WMJ1}x*T,Fev8ijz:VvAsQ?W=/DT)1jWgE$S>@[p75B' );
define( 'NONCE_SALT',        ')Eu7kX.PFOg>JN=vgQ{h,O~1X$E.3>~j2o.hg./7RAIDhIgB<efR_2G{@*r^pGHi' );
define( 'WP_CACHE_KEY_SALT', ':$%TIuGn,l8g?tl3|=A=jzUz1d=e(.K&zG,@94p9e2l;C:Z:2pV2XT0s[;-jn+o#' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
