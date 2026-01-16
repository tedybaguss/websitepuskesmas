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
define( 'DB_NAME', 'jimbaran' );

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
define( 'AUTH_KEY',         '-oB.0 Hr2*(0[)WKG9M&hflN#5QiFss=a#/-&M(7_S9E)&E5Mn>qzsA<ymp&*ih1' );
define( 'SECURE_AUTH_KEY',  'F?o3l04Fz0&xw*zl~&zDQQE|3pd>eR#`IYqT.X%;c84kn+N2bxfM#OHYzaVx:gmy' );
define( 'LOGGED_IN_KEY',    'Mu3wuUML/r#ilC_UyQ^D.=|C^Wu0DPHem:,Qhy1[UK!HchW2?A66h7mZk{y}/>9O' );
define( 'NONCE_KEY',        'Jg w~!/dY_y&tu0c He}e:B^qBJue51BNGL$)uJpSr^4_#8#G&b*kH9Xpm.)jY_;' );
define( 'AUTH_SALT',        'FQorO:DdTpi>o,}::grP><5VFe,M0OT?yeA.&;^EWs,yT{WSE/v:>|>=S9Mo*-fN' );
define( 'SECURE_AUTH_SALT', 'Ih@.qsj]1oH2tixu_xwQ$cLRXY{%-4Ilv2Et<D%&5}=zaeFmPC)DcW3D}tAh,5%|' );
define( 'LOGGED_IN_SALT',   'P>1X~M(,n]tV1|^N**vaTqt8G9(aaso1q?=wRr :QabtCoBbZnTk?M.jd_ZTam&I' );
define( 'NONCE_SALT',       '_.jG^gHxJrn{c*i+m2idr4g0[w`#^OiSo3,^i*,m8e$N1J@:wY$>OTXMXi%$eM6x' );

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
