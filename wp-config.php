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
define( 'DB_NAME', 'maths4yourself' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mathsadmin' );

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
define( 'AUTH_KEY',         'z@t@Yg@luqrT7tWwexgW]C! DS9W=^-;u/]g-J3e: ia(My<ig7ZLIm:F[i^9*7a' );
define( 'SECURE_AUTH_KEY',  'M(,ZWxz!C )e$Pau[x+o1bf>wQ`-7Me)QJ/^U=LsMD?Z7}X#q2=?l3wtO9.LV$+0' );
define( 'LOGGED_IN_KEY',    'ca9Xsr(~-Fb5NVTP2gQa#tX$xiQ#{btPtF0OFqE9RLfR~~ +t)kgc/y0;hvr$1F:' );
define( 'NONCE_KEY',        ':2w![@ $s<^+U|,>6:A2oyh^6u69=XBvK^@/^AK!<Yk$S?].:M#KSt!KF(FC6)(f' );
define( 'AUTH_SALT',        '1lJwadc(_$2$]9ts(eM1|weDWnGq{$MwbOSY2{[6k@V-^+8N59Ai/xsSX[xviY7Q' );
define( 'SECURE_AUTH_SALT', 'ooG.xe`)QfPvmyk;Q]b*`+$*+2W2BBAc+?2E$@r_W>h|Y,,#Onpn 8b+w;3Iv6f^' );
define( 'LOGGED_IN_SALT',   'o47S#AE7:2o&<<)=]UKZo{1>l< X*fNh!x7K2x.B,_`hzZ*3,J1!S{]^T6UbD~Mc' );
define( 'NONCE_SALT',       'AL7.&yAjp#I*96/bom^Rl67#ZuVjXo~lE1KGaUjnP1jiKX!j#PKs5;cRLyTcPbpv' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
