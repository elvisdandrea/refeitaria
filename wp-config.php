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
define('DB_NAME', 'refeitaria');

/** MySQL database username */
define('DB_USER', 'refeitaria');

/** MySQL database password */
define('DB_PASSWORD', 'r3f31t4r1a');

/** MySQL hostname */
define('DB_HOST', 'mysql01.refeitaria.hospedagemdesites.ws');

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
define('AUTH_KEY',         'iFHcz`%6KBG9KMni)S%RgzGt_gY,U&Y%sA>esM{UVG;KWNp|0@$<Q7Z!V!r[iYx>');
define('SECURE_AUTH_KEY',  'tP,Mz|_LL`S_8t>76$0?HJl(-j(lN?ur,yK(*:;hqGwBYOv-weVdn+>5S>=X]oG>');
define('LOGGED_IN_KEY',    ')P23[3I7mF~X{O2&lb;>tWi&!)s^kBPI$%yJ-o-[sYGSs}0bhz80A`3*KQk!P,+T');
define('NONCE_KEY',        ';ih|9f0|`BxS+9lWyA)UT%&d-3@bMs8}|D`dG+->_[IXk7i^kveJe5T[C-Ei_LUa');
define('AUTH_SALT',        '4DGT5Q>(v1m2bzAvjp_u(5qmO$o6)-RR^*6H_>8}ik~tW$rk=AAjE[~|S:PIT1Xh');
define('SECURE_AUTH_SALT', 'TC^I1fqln>*e@|j]oq-:33-nJeYa42b-Y|7+W3.T.;T>zyZ&^_|]lueGXx_$-WUe');
define('LOGGED_IN_SALT',   'J 2m`%AE:aZQ}r4%!i..C[ HdywV~EQs4[_:XqxRnV/ygAy`oX[8PmeP%vp;32p]');
define('NONCE_SALT',       'vJ9(>9J}f#1Ic?3/JmT>vvIs2U0B&Uy%YL}x_{Rz.^~I~.gLSmmL<GG{L@6/4k5W');

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
