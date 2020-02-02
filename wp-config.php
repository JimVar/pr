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
define( 'DB_NAME', 'pr' );

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
define( 'AUTH_KEY',         '4.h&N5A@n]<cnB{v(d_ODrj#|5+;/yo@+)@Jn,k*WfyWq,VP?l&~e^c@Gc87>Kh.' );
define( 'SECURE_AUTH_KEY',  'kcG3Z/**5K#}`1E-~eh&.qt_GfPY61nrX.bi-cR(M[%z1.;i47OSKm.[3e,3(X]N' );
define( 'LOGGED_IN_KEY',    'aTk7obpIDp#qP@u9bBXn0NIjCx$i6gz|&p7}V s9g@G#uM1+_$] J`u3|aq?N%=9' );
define( 'NONCE_KEY',        'ucP[!eQd5?=smt9S0U. X^Yvu53X/riK5/<saon{RANIa60!j,Ze+vZ}P~r#+e1P' );
define( 'AUTH_SALT',        'p3kfpPiW#byihHvSxo};^h !k0-mgx3x`Cu|1#klHJ&4@<5xs~/s%F#n<^A~U@c:' );
define( 'SECURE_AUTH_SALT', 'Tf*)nzRCtrBdlcp;dIn&.7v ]xeW&l/d54:A[?I-]b)jza(J2]Di:r8s]Qmg[`uc' );
define( 'LOGGED_IN_SALT',   '.o9`+?%H3uA.zTnGr-Aq<RsvRM?ibZnMqh{A}/>@3(T8WZ+jb(D7Pl$e^Wp3*{M*' );
define( 'NONCE_SALT',       '5)Z:I<;cYV0j.!F%t(xkLIep9&>[7n7$(1Ek).Oi(*qHkJ!@~$M%7h);SI`YNBb?' );

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
