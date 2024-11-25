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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'R=T+,-M>)4|$*j5lvS*M>h4o>hIL;B0$+^4Rg6vFIMGul_SeM%H7p$;Cle$=R=AK' );
define( 'SECURE_AUTH_KEY',  '.kw79Xrsp/#e[`2}J{HmW!-rg0u,tK8VZ&4*r1Zf`djyqvb<A&S8wN=/nA,AsD,;' );
define( 'LOGGED_IN_KEY',    '%_eRNd%!uLG:k<`)s:VlsU=h0;$T+~%aTCw5&$AK(b,mUTZn?lhDt@$nB(~_|iwm' );
define( 'NONCE_KEY',        '>V?>f|F_#U6&4Q)%9x<P;E;Zvym@75DqNsUgVf1fuD+i2$1Ee6{)V{H7be@HED7-' );
define( 'AUTH_SALT',        'Z4|7qa~AG~Eu.g.~HeDI5TI(OUI?8m)47BCL,_Oyu$@J`9!LDv8)tRls?yg-b%Mz' );
define( 'SECURE_AUTH_SALT', '9YTz_PLrTQQ|5cNp8knsBXw{2  ;[=wL{-={W9Ru}M[odn$p3P={Je95Ng}#AwNP' );
define( 'LOGGED_IN_SALT',   ']KwO&5@CdE/nyiozb/@dg?_Bgh2Ed^K6c`N0DYZBb)&mfulah0$Hwq8;Q>_!;w3{' );
define( 'NONCE_SALT',       'M0qVD@]oo*%8&[[bzqXy#bU<JCV^?;t,%f;i!5A.8S5i+k4;-h?/M.m~@R5duz&&' );

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
