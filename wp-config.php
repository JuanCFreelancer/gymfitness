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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\laragon\www\gymfitness\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'PknO%QCSG.C$rv>&BRrB[R_iM}cn1viMG8XzE09=aVb6:*Bd<!Fq1_e8_l?8nGQ2' );
define( 'SECURE_AUTH_KEY',  'DOWz3|2h)t|0gG5-?4EA/2 &+RoRzS@[.TH(.IZ8Et<}aj+R< B=_b^D7llS 2Vb' );
define( 'LOGGED_IN_KEY',    '/uQO(&9]--.${o|tmS-#*9p^JCJP `QMG?Ir+W2Aw2+3 Dp0f8b`N6*M/Rwmk4a&' );
define( 'NONCE_KEY',        'l%-N2)qFfW(2@h2>e<5<V5$64.2:(Q3)Fj5rd:Lo1 MkjV<~YPQyD+zQ  A!G!b.' );
define( 'AUTH_SALT',        '8oZ~ 5}}^w;_bcQPU/v`[< sCzK:)*4|ZY$94HM{Rit:f)~5,{-yX|[syPyJK=Ux' );
define( 'SECURE_AUTH_SALT', 'KpR}{D`FRtotNA+~)9}];~N>lwv>1>AAy8,lD_pFI7wU{y`iF|=2 4TW3laaIBls' );
define( 'LOGGED_IN_SALT',   'sM#^n/NPCSstgJFY)@3 L4pA5T]4VCA_*[L4Vxg(Ja9_3.SMla$}a4B>zPZks0A8' );
define( 'NONCE_SALT',       '36z4_%_m5/NRl@BZ)3IuA[Wd02!>7!O,6EAhJqn2LhfR^-?D?cmwX&A9%0_i_F|Z' );

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
