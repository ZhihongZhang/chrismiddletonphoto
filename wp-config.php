<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tT f/maY~~U=Dfn|h}I0Q4 Lng8$2rVI[.f})o3]:Pb{j@&7(Y5<hAh>nd6su|`9');
define('SECURE_AUTH_KEY',  'S|~u{KtW,3-!5Grd$3=IR8C#mAZP1+y)$hdV|+qA]o6VDXR*hQqF-JX!axc y8DH');
define('LOGGED_IN_KEY',    'TdP/-`o&:(1+t{+tezOWc^XfyG|3.5EDJyS8-;NyT_nUoO5HxbHIb#?OUyRT#}i ');
define('NONCE_KEY',        'E<),GV{;FY;<w3LN^5/|8O,yU.b#!W(N)sLq%X-zfR]Pj|z-<f`zCr&S|gri@x/h');
define('AUTH_SALT',        '>Sc2tGmENYu9dl:xz |ztE>i3fpF5y(Vm^EXqx+s(*EwMO@6<[/;y.|k%=a5CvR8');
define('SECURE_AUTH_SALT', 'fhINMd|#eYGowS:}D@N`=|`}DZp+ zxWAS>[o?rukVCa9NI2ur+[Sf|*2TP$vTkW');
define('LOGGED_IN_SALT',   ':o!W3x1IZ7zq_9SVy2awf.50f?M(-Xrr-dv[p&*;6O!]O0J|oYO@U%}<mz3TPPw}');
define('NONCE_SALT',       '$=:1/Du|o.|q6YV_%>[*yCBjyDH<8G;O|>Kb|0Rbv@um::Qdp>%4AUi:KVu-Ww&s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
