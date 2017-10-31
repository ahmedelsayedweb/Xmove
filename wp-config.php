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
define('DB_NAME', 'next');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.rQW%FCdyHOdB^u-nbLRHr-zOr!B## 2GKSrc] .wXC<d`:JafS!(pL2DPNz`We7');
define('SECURE_AUTH_KEY',  'BNB&O-WPD=3%Vz^OWo 1>[,>8?mn->}WL4IK29#-odJ?/rSv 2PrA`@=K&*QD2~q');
define('LOGGED_IN_KEY',    'yN&7r+BM|$3Mmwdr .cqnA#Kf/$~LIgW!hvZjbWj+?R~rm=WhgWxl({0ssn=x$;,');
define('NONCE_KEY',        '$thOCl1%vSvm,LG~4<qW3OdRR.mf[bACLV!hV/vY35j06>4sX4G@Y*|Z$9dm(9n,');
define('AUTH_SALT',        'PGz9Gx6S/u[#[nf?jVu?opBiZNVMyF[hCBCIGMD=(ixgD{XADH{T]f8/,&&WQaLp');
define('SECURE_AUTH_SALT', 'IB|L+5Ne3)oRBz^3wZ~4_7d-ff`ws9Q}a51X]J:jC{uqW-DcOm[IAk@/l}J:tom/');
define('LOGGED_IN_SALT',   'e}y}v$uUk|f2`8mEbYm1M|_O|y/r^%x3-e@DNX)[1E~X=q*-OS(t5_|JRwBdle$[');
define('NONCE_SALT',       '+{SB_x1f2zHXH%oYZgeZDCi)|/533S+WED278q2w7r?8z`Km 4uP6Ua~O=e_02~n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
