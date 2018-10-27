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
define('DB_NAME', 'wordpress_test');

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
define('AUTH_KEY',         'BnXg81b+K7&otCb;76/}btqZ=#QlsSN1JJ,ct!yrLxO+rc7J);ww>)CXqs/t,aS<');
define('SECURE_AUTH_KEY',  '7+ogD5wS.TCI1{KJRyA@=EURMbiB+s+8d#UO[]y3ZeC7dRug?z 6S%Y|/(D %XS3');
define('LOGGED_IN_KEY',    'j7=<U5HAw;z(`lo`62E})zL;,5LN#neFrB;#Pnwfc %4TJNxOuD.)TO^j`o`a%Ff');
define('NONCE_KEY',        'IF^NGrGv5zTjpbXU]2o@OQ~]Qk]S U0xnO8M/q@`IcjeTrkMrag9/HYe$hTZ[ibH');
define('AUTH_SALT',        'c2(H%}wK;A@3OD9>%Xe[D3S02xQ33j%UM[T*[0HKIvR48`YLI$a}c^lz!,ceakL=');
define('SECURE_AUTH_SALT', '.v RnbkBf6RI94W,+tL`lrLavPhB}qtutq^uI/|JupRv#xa+E#OkAUDP~xE ypwX');
define('LOGGED_IN_SALT',   'M:oXdK#NX/gQX $TVguMU1Iy;t7GlmH ^lm?[N^;:rKzfM}.u(V!xd$>Fz>0%>^ ');
define('NONCE_SALT',       'ukIO:p/v)52n&G1Rmx(ys9A0&)pnB_wXT>/PVcDf1J>>b4V!4p[w7erJMGPlJhDf');

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
