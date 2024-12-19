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
define( 'DB_NAME', 'ananko' );

/** Database username */
define( 'DB_USER', 'ananko' );

/** Database password */
define( 'DB_PASSWORD', 'ananko2005' );

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
define( 'AUTH_KEY',         '{06,3YJ@{j~!-G$$v|f4_}k(eD_)):^w|2];.^U(KHaf9|ya_S@[m3jh)$ qs}@ ' );
define( 'SECURE_AUTH_KEY',  '30TB>$>>CwAn/i?TQ(c]1V sI<zW>YM_*3^dI~R6fD(AJ9T Ul%5:ONIQx=q_Q^Y' );
define( 'LOGGED_IN_KEY',    'b|Wt/iCh*~yP9;SpiII5=vwT*NVif)`$xW~{s|^+g}MDTuSFbI^r/u86*C_T,D~}' );
define( 'NONCE_KEY',        'JO5D&)Y[uCD`9@0|WG6O4dop_@ Yw:P<%#U;ks<Fe1kVQ>rH;opJyb4j2JJolg[&' );
define( 'AUTH_SALT',        'gc&:7R9VINbAu;d1?)`&? d5<_]~eF:ru5(2zScM@i^N+3prcaj&,nw9l.L.LD#f' );
define( 'SECURE_AUTH_SALT', ')%[LosgI~f=SHn{y-Fl<{V4?DP|#mR.&yM(^CZ0ZA.KnHvC8.I[$#a=#<$&cI1A3' );
define( 'LOGGED_IN_SALT',   'Y]e4y%9bQMNi=AVtRtOK91Y0d<?9^?W4yj2=>$FeEoPO.U}=1+/oh:>KiQQnIdsV' );
define( 'NONCE_SALT',       'aX5kXdme6ufC<2+Q8_NoJld84Ej+#)`YS}#W5;m]NqokE x^VR(owCWJdBrC&Ot]' );

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
