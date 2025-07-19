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
define( 'DB_NAME', 'u147847518_SxM7m' );

/** Database username */
define( 'DB_USER', 'u147847518_Xo0R5' );

/** Database password */
define( 'DB_PASSWORD', 'OBopgKwDSX' );

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
define( 'AUTH_KEY',          '7_2*a9%a`gY%d)O6TQgsPHq`goV8d8cUf~*q:RTl-s1rLUdEi^^k#azJ}k>9#rOw' );
define( 'SECURE_AUTH_KEY',   'GmH}JHAm`nO3Lm35s3ewEvGdA2Z; k%01 RB A?~)FFm15~3HO;`myA>]gz#{bi ' );
define( 'LOGGED_IN_KEY',     'FnWX3xoh626lvB`8doL 2qN-+g}/0aLd:83-m~8o o>]=->R#,g>71`kUE1!LOTz' );
define( 'NONCE_KEY',         'aAh &,)KVNd6H=b]/CL$UqGGs]^27nBTW#S1nc~-2}eef+[V#36ahU2q6A|PLu!<' );
define( 'AUTH_SALT',         '.kr_rbq0^Q8>fySiYYeq9$Lf[zo5PTpx&<P%m4VU/a/L*w{6Jk?}KYfX|/0#Tzi8' );
define( 'SECURE_AUTH_SALT',  ';X7hL_eYufdeTrv.q/b`9-(rB_;IB5stG%6h@s@s:P)(pN}Z):<aZvp[-MPS`!tv' );
define( 'LOGGED_IN_SALT',    '$w$jn+@#9-G0Ne*d=0dUIw>bxbM)|qUNxy^a]Uutcg@@9[.p<diY1QYjU|wpS,k1' );
define( 'NONCE_SALT',        'ACE?^V)M_RLi0>SM>OFo(W1,f=b&)0 (1.ek#IcMMJdl5(h>h.na@Hu{J<! ?2#(' );
define( 'WP_CACHE_KEY_SALT', 'qGu7s0$%pxg+F6rcTUfbSRhsg77;_E&mNFW<X^{<#_<;ewuS!B^s;Gf$g*G-`hbC' );


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
