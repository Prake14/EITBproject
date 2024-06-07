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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^xf~qJect>tN8`Di-fN(7<WLeSp> S<pZ?8JzK5}2Lq|EMKf(H_|)n=Ps:8V@v+g' );
define( 'SECURE_AUTH_KEY',  'u/_6rExC/lPr1tIW0.<0m)Uw5RW[0-3(;GLc6dVacUk_~BNQu)3*NI-J*[45*oW]' );
define( 'LOGGED_IN_KEY',    '/eTK55,_Ul/W/<P%|sPww@`#fhgAw|{~;~PKeiF:DlivV!u 9DQ%Ro@*}WCDW5ie' );
define( 'NONCE_KEY',        'ZoXD!nx.O.RR6{FMzs5?UM7?ca$[[%w+v-,+hoKXma=J1$=9_>-3!<D{;+xwyR>+' );
define( 'AUTH_SALT',        '+jR>[k+re!V+ >(S[i@PU2O{ !vn*[m8c]#q!p)*%IJ+`asq4@/>hYMu](jN:h9C' );
define( 'SECURE_AUTH_SALT', 'JJ8];#b=TAZ3Hq~GgLEY$8k1 r?f#xYb6)D;@$bW<I+#_y?B]<xtadDD3iFUF-)B' );
define( 'LOGGED_IN_SALT',   'Lij/,p/Y?Nc2-LOdK1)zc^>L|[]<har`t_|q&^8Bl6wh/GTl62MC1hiB0).7UEM3' );
define( 'NONCE_SALT',       '~*}:y_!xw+Gf^jd/b-Lq{@{V _niM[wD3jY,4N`nJ(J:pq~9?qffdx#Oul>]V6&b' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
