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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         'aRHN%3<)*Ali Na=H.`rCKD#yG#Vu5wB}|-0Hh=M<yX$VpUkaaQFpQ]xbG@McxXH' );
define( 'SECURE_AUTH_KEY',  'R.4p8Q*TcpXPp-9[W~[9K)BBDA7]7k<TeN/_D[()#zcC]z}<CZ8K3ntmI|r<Z3lf' );
define( 'LOGGED_IN_KEY',    'dQQ7K<O~:CT]eX9aBM7HHf87}Yo(rl~fR)cM:m~2ykXnNdtx1 K#EfXep0}=pS76' );
define( 'NONCE_KEY',        'dCj!N3F)=Ef)($u{x5;g.ySHa/grq^/;hfll>FSU#*a-m-+HDcnuNaK _eK:%/D3' );
define( 'AUTH_SALT',        'OzNXOj=ewOjzu](GY6)Tt;1#oN@bcpuC|wU.k}gW}s{k4`8$2t[`>K5tG&^t{jbe' );
define( 'SECURE_AUTH_SALT', 'JEp_,pH8oGH(~#>c2Oy(arn.gf5npuHM=F^=eAWZc[ed c9j@4&A(m~.%>YgC2Z*' );
define( 'LOGGED_IN_SALT',   '3lG$>v0=N@-c=c:7DpJX)HETxmh{GvYvf0e?dK[T{7EOl:9?6CiG.7FhjB]5`tBD' );
define( 'NONCE_SALT',       '?T#Y!NB/^t.#ShBWr>/]*GcBCS7ctCy(Nsf8H<G*zlTyP`#|mwr#{h4zlE.G2H$4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
