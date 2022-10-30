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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         't16-OQr7xf;izZkd/`/Ei;I?;`xNCN!SFI_n$jl-$q&^6/<1UI@O-<7_HK.60A<u' );
define( 'SECURE_AUTH_KEY',  'O7jPDz0)HG]%4p<0/YjN^u`;JIw(pX-@r bX!idX{B;9wW[Xv-)jrEnY?0_U)5CR' );
define( 'LOGGED_IN_KEY',    'JnsZ{D:g1(ahe;QoVX<`)/EqV9Yt=x33(nbi+cAW]1h00~:f`7y8vfuA[A-4hO~V' );
define( 'NONCE_KEY',        'QFzl>0@j /&(@kG3y!FprJbje}[zCABS8*V{kvUA<4]:i%-J06bL/BqfmO27+zDF' );
define( 'AUTH_SALT',        'm??E,WuD4!It-U:[)V,-ciH!H.J62q<.J@kc{9x%!0Z5J2Uo)W9M!NQ?VcMZ?jC8' );
define( 'SECURE_AUTH_SALT', '! d]gtu&yeK`oT=yWr6+eX!CE*9cdM%DDeO6*f#<`pZ1?a8ZZD3u/7Va`T7D[?e}' );
define( 'LOGGED_IN_SALT',   'l|M0!7a6:dZZhpod<d`wMct{0w[2C*LTy([RKuM-zKV)-mYa(~w2CC]z{R;wD[R_' );
define( 'NONCE_SALT',       'eVp##9G:H@%![l$2RU,rgAp%|w,!fRXeR=.WPlI%5![Tt X%*81Q05NYx -{TU_k' );

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
