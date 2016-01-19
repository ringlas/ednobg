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
define('DB_NAME', 'ednobg');

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
define('AUTH_KEY',         'OZFY+XU%L[-KxMxzP0,JT-:(?z!)+4( _/Ea7%eaH=ouW{0^`.xX-IZXnK5V%[JD');
define('SECURE_AUTH_KEY',  ';,UhXU 96L>{g<KG{t>53T32-?S+9gI{tQA8+)9D${C{g$k<]D5^%;$9b2@.|d@6');
define('LOGGED_IN_KEY',    'lfgP$^#+bErihnDjzd[_e|,h[qA=Y?B-EoDx6-Zud7rbsS)(Xou,r82LkH/) t$.');
define('NONCE_KEY',        '),Rm<&/EV+~-4QFUW@`HJk)o{q55zyQx2iJHhDS[+YXc1vQ-;X$LGHw%orr,B0pH');
define('AUTH_SALT',        ';:Qc~i|mR{}3Zqi1xe}wi1Qo+DM[lpQgdOQ_Ia`|3p.r-,Dll+bgj|SS|Oy6^-&J');
define('SECURE_AUTH_SALT', 'hbrg9_> 0-3%9Gtjw?%lgea2FNU=]3*m^1.|_mY+Y:o()%xyt@pc>+EG_/O[Ec0K');
define('LOGGED_IN_SALT',   'kH,}$&WQ1Lrxaabnhhm?84yI~-Fy_|/}Kp]Q1#u8SS~-4J#$368O;EUW}h[xUy0/');
define('NONCE_SALT',       'u!!qp@x/w}G!xrF${(fIr^g.6+c{4?lo?5%1S?S;=dznL&m%H2RNpLz{QbH?2W/#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'edno42_';

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

