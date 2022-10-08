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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '<P?~%EXMH;nuzW}s(%tXs5:[QLhD!CpYmGn4$BRBtMs&32F0Kk!@,eYu2;H?8%4m' );
define( 'SECURE_AUTH_KEY',  '&.rc~R?61@Tn8u*`emp:2n!KW-=A,~t%9b19&4q`#@</~Q4#,Ily_`k5PO%{&gVP' );
define( 'LOGGED_IN_KEY',    'E0LF&Rcw[=0(g-hp!*8G1tZpd_O~]v}/}X?}fL}CqqXx%:4wORLnbTIq9b}p~{Kp' );
define( 'NONCE_KEY',        '>7f@Nb|K|P98sj>Va 5@#b>-ta2ZbnP<OytJ6X;aB7q$U{cI[lpY9tE.x2!>~r*F' );
define( 'AUTH_SALT',        'YSej*gc%//aw6F8cn;<WU|1G<JXwJh-E=H9dx{l@{d`lT)i&s/UTo!BYYh|%P0Sr' );
define( 'SECURE_AUTH_SALT', '#ufRm1l42=+hzXwG*H3<#GLCvIn!:rK0n=o|/ o>GA`jFz&GgL; `>`}>B?FNV/l' );
define( 'LOGGED_IN_SALT',   'n|/)7}-U$;<,fSv{.w3_)7X-5pcFEekF{-m~J)M<XLFRJHCh,U(Zq(:Jc;7f:bQI' );
define( 'NONCE_SALT',       'H(qoe]@L:R&+t~9rlHFk26zX-M}(3GZUJr*^d5eQ.+):Cw _%l:n)Zh[yj(!P%#Y' );

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
