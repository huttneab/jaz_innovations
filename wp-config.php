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
define('AUTH_KEY',         'wIOtu1ebS.uHb%7p--Vi2EpX<$L-) oOp>B`yYk9t{.Zx!cobz~~4Q/k%lm~EJDO');
define('SECURE_AUTH_KEY',  'Ab|7&0:D(_Xy#=5GeIzQeH>()v~#7d4C0^T_Pljvbu|7*|hiZh2-sfRS9HvaIO|B');
define('LOGGED_IN_KEY',    '*0}Q@k_xR:H4)ounj;*~+Ztki2E~i>@=tP`FEEK&7V-Q[<F4#rq(JsC3>e,Fszr$');
define('NONCE_KEY',        '/=&[?A+<,w?-0|-cNBy~o+Ei,FCe7s+5.C?M%#4%i}X^MZhI2j+n)Din{N6j<(U&');
define('AUTH_SALT',        'n-NR/?S-[17d3T#$j j`%h!uU+(+=*-SN?Hl&JBl4W]HptHJ+i=&NHJ+|h-k6sy{');
define('SECURE_AUTH_SALT', 'w;DF-M=lji0pWjVM|ZRyG4$u^J|,p!38}Kt~%|PQ7ldfYf]/vWy}+XRZMyfH-gj-');
define('LOGGED_IN_SALT',   ':/!mkZV^8+xjk6o{5&buGS^-rr|/6M[bMpPk+C.=@/%I[cGj>&^pa~rm!*+2g-N/');
define('NONCE_SALT',       '-58Vm6KXIQ%X=o1%pA48-tu[6S[]$v$IzTLLIY!|-O|2 ;v=&@]x=Z27aNQ$|:DH');

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
