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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '192.168.1.129');

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
define('AUTH_KEY',         'LT3AX$wp*5kC9yH?TCoFWHs_!s,^M|{vHsOyM)~~8|we,RG`bv7x]0.i8YGlH/Md');
define('SECURE_AUTH_KEY',  'm2J;}cE&%!Pz*Ha[wS5;Pvqej]7A(V Quw  oz2g=}kYGi=L&*MjQbRhA~ nR-P_');
define('LOGGED_IN_KEY',    '5? Z{B*.@&zHRVn1:WBr9A[UZHjs`TkulzMC=QReTvG6xPC7gYk$Vz3yvE;RmdyW');
define('NONCE_KEY',        'bbL  Jc|&ubZm{->D?*g;YUAY{-H6xz8_G@W].02juL=y{q9-FCtyLxeQE*z>GVs');
define('AUTH_SALT',        'E&[j{i&LBfXoEJp}8Cf)<gZ&vB|TX-0LrNZE7V~5E:Onu<Y]{pwsk)/[YFJlQANc');
define('SECURE_AUTH_SALT', '_:kBru4p!AFv$6?[^?rS{1Njjp jXt*(I;0W}*cXqA .A69-R671.ph5Go$0OpDG');
define('LOGGED_IN_SALT',   'D/-p&W) ?eI}>dXD@6K/wT6<L/<(vM],TcW`8c)rx ;)%4NWV$Vnbax?t_ChTOoW');
define('NONCE_SALT',       'D*MjMq;yq0QpLTr:;tLXTjBX$EH*EyN5>i+iFOtF|}QxvgmFgB!X:USYI:~jbuw;');

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
