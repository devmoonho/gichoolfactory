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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gichool' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '2020!!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', '' );

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
define('AUTH_KEY',         '_t[G5821B^1WzherC.tvf9Qy2;BwbERoA8~O-`cu0KmnJ3#GInydqG{Q^a`aZ+-1');
define('SECURE_AUTH_KEY',  '|ncue1-![,2]M}O?{kJUc!UE}rqhi2(W9+te?9AC3x4kp;<l5/%]/rJa*x[)|?=#');
define('LOGGED_IN_KEY',    '|&M{!$ckJ|Y+?]?I-3kJ}oZmk:]a,8CC*mT^>dZoc(0W6MR#s}:VUUopm-~%cgs#');
define('NONCE_KEY',        'GNaQ-o:YXNDv]v{@gW=_gToCoXB1+k>?nOBY;HHlWT=ebSD|ytd!2a)BT]u#6;+i');
define('AUTH_SALT',        '(T}%bk(D;<|9a+;2TId4~%W9|,-)U~%Y~*A_Z<E[wB|*uN8LUVE~r2/s&Mo&sD(v');
define('SECURE_AUTH_SALT', 'zTwdPY011S@r<|NvFP[S_F. p_a?RNBK^y#YNVoo-]lol787V/-kKN*EPaj{$IF-');
define('LOGGED_IN_SALT',   'T7256(daY})S[cJiH;$ev=|]mfbR[C1n&o6j|T|85=TwzU lHdAMVz7QIf}D|^-#');
define('NONCE_SALT',       'r:om*De}]bR hv*hh/QF;Ylc/x0QBZ 3@PJ`=ty3yL3/&z.[+`D_4hcW?Qd|qH!P');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
