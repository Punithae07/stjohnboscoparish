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
define( 'DB_NAME', 'stjohnboscoparishdb25' );

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
define( 'AUTH_KEY',         'b2Bag7$6@sbW{e*1[cDuLxTb6<5P<Ns9DSiP0YwaPm9.MtFH%@,Q#<zpHa)zw^?)' );
define( 'SECURE_AUTH_KEY',  '^RF^B_m*[cM:*|~|%ISzfok(N,j4._TlrKIA#?D1p?N>ZmTn!DUYDY<3%-C 6=/ ' );
define( 'LOGGED_IN_KEY',    'kD*4H8CKdw@>+WyM^4orzFMyfsaU@1G };BREl)3tM<SuI`SAQ^wmJ$S9q:1U^%%' );
define( 'NONCE_KEY',        '@X{786zJgA9u6bJ>dsg--tb~c*r8CsjSqA[3X=Sgr2Rm~hUM^5%f<`AB<I4&%uuu' );
define( 'AUTH_SALT',        'VK`;##N Ju =!v-gHE#(WYnsi)mtxjm_h(1i/!^<]|m[V~}12$OoMfo-5ra`V[i-' );
define( 'SECURE_AUTH_SALT', ';))wCm:K.y-h#GU;VG,dAVVKF:#4M/<9Svl2zJwPD=4nyqXHHg]Q AU2po*fDjt{' );
define( 'LOGGED_IN_SALT',   'XdCe|:l^Zmf^sYvBVdlG:~,9Ki`nM}<9ZKO+;Hc9ql25srZ<yx0WN[KI8!93b?Oi' );
define( 'NONCE_SALT',       '50pt [8Ks/jT0{{7.8}Rv G}#FVpnm+gjH(QSqp2P)Oo}5/Qt,:9qB&R-U!)ydx3' );

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
$table_prefix = 'stjohn_';

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
