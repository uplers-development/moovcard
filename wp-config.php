<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'moovcard');

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
define('AUTH_KEY',         'q9D~7d?0uJ{WfZ80]V6U%`?=~2X%Z_TEi_dVuAZz79{nwNm 5D&jBt(*at4iu&-G');
define('SECURE_AUTH_KEY',  'CC+gEqg2+Qb-/-R)*]7(i;ezD]TuiOThhX <]T@,<k)2I(N5Yr2=ra`q_aD5B~Y5');
define('LOGGED_IN_KEY',    'w!sg=4^L_3q6g#O<47h&poQLpi$~abrA.Y-<kL`}!zxB-+13+iZ,Y5x;{ClBgNv]');
define('NONCE_KEY',        'Gy<h+8$5iE+l(:+W$>DN^1aUE8CaniWiIc-bGs0$rtdo#tW~w5U=P8[]YVl$t|wB');
define('AUTH_SALT',        'y3}<e(?)3Rj0<HW7b>Q@j.X!{5XIqUF>|R^]vZtr^+oELiIA>=yj4n;JQ?]~,An3');
define('SECURE_AUTH_SALT', '{AE1+4XeKi.BQ8[$w65o0`JM](+oXcO+2WS6Wl[?f.yKqz6]j%k(6NYt+Qlv;9Gd');
define('LOGGED_IN_SALT',   'tF+DdMAG/||&o504@izn=E#%zIN}*q:)R,kQj(tC#`cqgmiGKmLA@GC<u2u2wh]-');
define('NONCE_SALT',       '>(8V%a-{[Ez9m8-JSk0,mK!yE#@R,+4di|s+D!m>/C6(TJNL48I^Vh:V9~ +3k( ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
