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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jasmit.me_db' );

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
define( 'AUTH_KEY',         'U[Lh?:KV$q)|Ym0Nauq4m;s8FsIF`)^S!pYS3V J,<Vgf; >$Sx+F1Jq#)5*{gW#' );
define( 'SECURE_AUTH_KEY',  'N|}*t$-^Lx@a[^< ~jxdH*$RG]nt=RQDZ9#n^Dj[q!j=&S0<98*AN$NW>`nr_h>n' );
define( 'LOGGED_IN_KEY',    'B2Kdgq=OF/i`{H%D;fuy91(^AdkKwrP+L/xP_{_f.*9QChZafK==K0}v];25#w/8' );
define( 'NONCE_KEY',        'ih%1w!Bl9=5*$mD|Y4Dk][W(<AQRp#r7n;)Z8wDE[u!LZ)v43 a#qum_(C!pf9?|' );
define( 'AUTH_SALT',        '$vv$X9$Gank0<Wm=2$#GdKohhyzig]WWuQv~I-)KsT{bM9)TNTX]e9q?Vihr8U*c' );
define( 'SECURE_AUTH_SALT', 'C^tTuHW*:#MCoNDoY6_=yCGU;Nhy[6;R(GNyvtJ.Qk+7wdqc:T4Lg)Jzh~V@+{S-' );
define( 'LOGGED_IN_SALT',   '=.7%[>A[>*V-<a=<ex<k#U}jLO7S!j=c11W|!licl4*f6mRUKh}|S;KYQ^!I|=bd' );
define( 'NONCE_SALT',       'B;@m,2N^wN69B?5Tl$tynk/pnItF?-9KgiHvgaP&$F#*<:8,707[umL{`k)5)So{' );

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
