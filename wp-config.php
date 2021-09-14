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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'h >|1/]sV}LLkaUAw8I6*w9+p:cxlrzpHNJ1N[:+)mJu[1`g<]q0#QB/o)[p/Xwu' );
define( 'SECURE_AUTH_KEY',  'xwAqfsmIRsrMo]ZNYuyvuH;Za;Ei8!|m@hL3}CAeN@et].v76=ko/I,m;O;S_GhR' );
define( 'LOGGED_IN_KEY',    '[_egLnej-ZyIFANN:L+=s:UlcL%US?n}[@:d_$0X{z*jE.5HqOhrK3WH73xr._i^' );
define( 'NONCE_KEY',        'vmd6qRXmf9~8=sviNj>Fq;HoWyqos7twB;ud8wDj`a?/mE8SK&&T@Mh(G?mQp&+>' );
define( 'AUTH_SALT',        'q~}?*:;$m#y[&fGlhzJpZ:`OQWDU5P]GV&Lk@5%hqyZlZL>u,c&,~C!=BW]W8ms:' );
define( 'SECURE_AUTH_SALT', 'L6!Yl!V5N%807,VDq<V/bjXLaxLOkm,p8=K2gDQ*+bKBN!H-W{D)pNx6?nN:RM}4' );
define( 'LOGGED_IN_SALT',   '+aOQ(~,vj[1*+V?tn#tI)BTGt2te;e5XCW>y/R{9cS_+A;U^S}dw>9mEHzk?igQ_' );
define( 'NONCE_SALT',       'T|<h?M8|_cr48ID9-AffSuHT_h) `YqM]rp#.~4:q,&zZI)xgBoB#es/Lu41!K?n' );

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
