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
define( 'DB_NAME', 'u147847518_7X1sZ' );

/** Database username */
define( 'DB_USER', 'u147847518_JL50Y' );

/** Database password */
define( 'DB_PASSWORD', 'eclvcNJzlp' );

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
define( 'AUTH_KEY',          '7N$CghWfqW9=Q9y#=g*zd`]8cQ.3}Gk9HebE(-cssgE0odo&wuoz7~UHB`av%#{m' );
define( 'SECURE_AUTH_KEY',   '+6g/gK*qanB~$+zw8|iT-g9$Do*f[ClhI++wyDOXpmYnJRq{~o$=,(^@K{1St)L{' );
define( 'LOGGED_IN_KEY',     '}J;s>8PE?wDc:Z3QJFq(,|<;IAZz`5jyFMn5>8-CtbKu:4BS*-fGOJV!H(9VgM~o' );
define( 'NONCE_KEY',         ',S.0zz>kN6;yT%ZgVg>#=a9HMHh1USr$4b{/L{1I@7(ZhM@ArdXLx048(UjL|{F7' );
define( 'AUTH_SALT',         '1.EXXBJ8IgR]Dj1ukp0cib{8w6eFSRf_&E w]fA48e/n/UOs(h{s[Zh^q)wkJV^3' );
define( 'SECURE_AUTH_SALT',  ']j5Lof| af04~Dei9A[:*vRuUK_4~+Q)W ZSLQ!1aQxm^]gN:d#:sm2^4*$=U*gQ' );
define( 'LOGGED_IN_SALT',    'kleBN.nNKewBr@ ;s!r#&$T^BpRN[JQD.UB:EU(@!T:T!%gr4idn,sE@R /M(Tgq' );
define( 'NONCE_SALT',        '@R|5bVh(LBe&>V9g2R_}uOvZ[YTp(=^ORE(&EOaCr:!!?Li^gy29]+U5~tWTn=^#' );
define( 'WP_CACHE_KEY_SALT', '{e:QKY@vWTbk^&qJ#hFl`.[%b{Lsd]_G(,#$FpVkp4H,99-9Z6C`}6I<Vis5W}M=' );


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
