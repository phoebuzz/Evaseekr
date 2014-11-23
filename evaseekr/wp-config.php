<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'evaseekr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@uE19WNN2WI-xz_jh$9J!E]*3-]JTzvfb;!1#7t{+IwbCrsvm~{lR40~+UpjKEP~');
define('SECURE_AUTH_KEY',  'WYWx2[F#)X$]YDk4C,<k8HYb^b C1/fP:0|_D.QS`bA%-8q}IhUUI8:A3>dU86th');
define('LOGGED_IN_KEY',    'BLq|(-MS@m1cN}~jH?1TX;p (lk8I~Y^AQXhua2z-lbw4vaPq2#a;X]7U(78lJo,');
define('NONCE_KEY',        '.ZA%XaDTUI;x-*p(g$B(V-Kf8$xA2i^d>}%7R}pb|+JT~?r!$|t&AcjThoD%z4iy');
define('AUTH_SALT',        'gD`PpO`zZ?3dIo2]K6+o]nLA7NGb2m,/#Qw(K>$^@mTmxkGIdsYnz$1YoeC?8z/I');
define('SECURE_AUTH_SALT', '[DOE_!X+hc5Dgt-J{|7|HDy(t-<y[-`hRD{{k_08&QOZbTH/6inRBm6o{xueR9z<');
define('LOGGED_IN_SALT',   'u.T!-xQ:S^U,$cW&|8}G_] j+A=huiJQmyYFs!IC|9* BCj.D?za7!0 <qy5%8Lk');
define('NONCE_SALT',       'n:@($AjEv^z-0KvfhYqKV}U:AL#|TH-6pd`b<(Ub2s;u!YM{6.nZnud[-3wM~BYt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'es_';

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
