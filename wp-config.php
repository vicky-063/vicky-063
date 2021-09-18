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
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';zR>8S)$d:lpQmFFhSUhbu/U@*+4,705!Z9{~(wOPMPZ2?yIDWTzbnDx(;dInTAY' );
define( 'SECURE_AUTH_KEY',  'Dy$MO3s8IWJ$k=+eaQFgQ#vKY#/$qDye~J1n]I~uB.4 qZxQ[(6$Q}vt*J<vT{<1' );
define( 'LOGGED_IN_KEY',    'P~Pq~fE7f~4jEh)@o2 pji=IK[r75;4x5_MRJZUMf4&O|c_Jg58Q/_2&`0Nq+UG{' );
define( 'NONCE_KEY',        '>h^<$=#qrOjU/BK+gX [ 3mAsRY-`Is4@@r>{saij(STbAraz2fU:{:3TWNrFvG9' );
define( 'AUTH_SALT',        '{`~}@N)}?l!tG~B`00ObYT/_{F]8]}&/wk/wX^=e:0qYW%hmL[S}Is80Rh+E|Wz:' );
define( 'SECURE_AUTH_SALT', 'R6^b(xUL07Ts^u/4NhNcnEHw7Yh) 9IC]j3,+Ne5FgoRKo7AnqY]ArM9=OxG8#J}' );
define( 'LOGGED_IN_SALT',   '!r{+G+sRH/{bz;wy`IP{u+g:cF8SKD-3K[O2ap*]*L[:c6i<B[;@S@H4zK}]+vq_' );
define( 'NONCE_SALT',       'dMr}7N>6qeyS4-:]voe7BM%HWGje~KFQ9|LeHA@gDWfR~xminb1K~x!d$cDbro[?' );

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
