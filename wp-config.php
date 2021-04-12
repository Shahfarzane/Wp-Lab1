<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E[XK dNV$-0yhS7i|gyDAB8y&W)0MtJ~DH`jipLxr<c IL{S5$jXR-QvD-<$ljK%' );
define( 'SECURE_AUTH_KEY',  'j^y!0}(<}+nOF,z$&NzWYx0zu,1lfY#woR7^N;8GxCZ>)vr3_>N6MEFhI#+:6[gA' );
define( 'LOGGED_IN_KEY',    '3Fb[1w[tj4E(tv(#b/(kwJLDd+~}%>tlr[sLzrRrx)^ ?|#8S1qo& z3-KT<]zk:' );
define( 'NONCE_KEY',        'iA,.faFUfnTCvK11&d^|E=cOC)nKg=Gyb4vztw|R]P^qPB_)!q%i}|cpR^~%Z8Hd' );
define( 'AUTH_SALT',        '.]`{o@v[K4NBR=g1,RjwAWVh`]*J1hi^v{DebY@!2L/somnTW:xcOTYcKzYG_T{Y' );
define( 'SECURE_AUTH_SALT', '{`x?/79T[rys%yFVj71Xk(_Di%-nue7x{~hwJG5|X1.uBhl5?$<{nV5G4FTM9e?U' );
define( 'LOGGED_IN_SALT',   'o)R3&||)q% 0Khf$(@!q@C6Ul$1s8k4H6=uk*uo2+7`#v%&vBTHg9c;:#VGPZcH~' );
define( 'NONCE_SALT',       'F<2tr,~rg@LcmN6IJ0?ki v0.S]K,BVcC303KXxbm>~s$r#UCn$)Pv:,S?:XnG@9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
