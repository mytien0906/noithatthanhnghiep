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
define( 'DB_NAME', 'longhai' );

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
define( 'AUTH_KEY',         'WQ^R/V9RSd~;U@K+_,f I<f%Ph66EeTjv]#8GWRB5sW.Y3Bm`XbbRmgU KBG0~iE' );
define( 'SECURE_AUTH_KEY',  '5_OL~<QN)vL]&,<2sx>$n?]N1L-O9&C:vCFrDmU`<XmBDhdG4#q$>~QC(kkAY*%g' );
define( 'LOGGED_IN_KEY',    'A)MFl~}pk{NsiQR+`?x $huw7(GVbcaSs^1BnJnO@JC(~@3i pQ|K{![C,%D-5ZU' );
define( 'NONCE_KEY',        'UUb^R8vtrhB9=>4D2qo9:{/kq)v7&c7tQ[{8Ni/v$lcW5f78LU5v*a)JrsnAi~/#' );
define( 'AUTH_SALT',        'WIV1ax?<y^CPRgA9z<;(7q~U<QcpYo|WPI]`m=jY%H*<28!hqV1}_E~Pu&7]8t2)' );
define( 'SECURE_AUTH_SALT', 'Nq&^+5ZBk@>gKr$(k|C4Q V+zk`Xxn^,HpzThj]4NWzO1r.myq]U.[BiD9:5Q:1:' );
define( 'LOGGED_IN_SALT',   'Kx#z.^T]RVM_ra%[bw|<vpL`8bl=pHMzb@nBJYG Xl)Cq{dkxENES/T&h>F<f-~U' );
define( 'NONCE_SALT',       'M[D&tFDKkO>~ei~l?Tpy6=]|,JQ%$_1r5lAF06Eo Kq}7W}<>=hV>yw>8Br13!pn' );

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
