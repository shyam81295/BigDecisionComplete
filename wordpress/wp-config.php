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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'user_wp');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '|m(}|[{~<-xfrM@((bi+z6BAVE*tZ&!q*r-:nA -H]1Fz?Y-ZMh(-9DikaP-4tXt');
define('SECURE_AUTH_KEY',  'l|YnYY< SFtT52n<RHDKXiiGqE@7ux!W/p5GB/!asFv8SE:o](ru|BVeP]K32Xox');
define('LOGGED_IN_KEY',    '9 AC^iCZ,-IE?:zgc4C,K-pC6c(r=Ucx#^%s` YSWevE(N3]u#OZ8?.plBCXjy7K');
define('NONCE_KEY',        '?Jd4wS?T*+QJM)8G3wbGP|ya:&yOBS2T>PD-4h+Hn_[}9r<t,fuS,{!ZTbpl]Xn2');
define('AUTH_SALT',        'QeLP@T+)ZdETu~}590|)pv/t-Ap!lhR?s0sZm1dYhT1]>Gu SgNejh3j6B*,Xr#)');
define('SECURE_AUTH_SALT', '+/.)ule~wH|{~&Ckp.j_kN4 gQxdAz9EiZ%Sy:+_cQ|)!6zWVv*qAd6.x$pTg;UL');
define('LOGGED_IN_SALT',   ' owR+1Zow,2TF /?;*8j^B4y64=On;+)?p/jgLDg`|B[$G-j_,$h?,8*?cU-wdf4');
define('NONCE_SALT',       'F%dz}]+al[N/!nM1r}vABS>s-4;[GLAM:N$)t0KYZvPj@+Cp(K-|TpH|?V,N]8y4');

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
