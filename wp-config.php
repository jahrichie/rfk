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
define('DB_NAME', 'rfk');

/** MySQL database username */
define('DB_USER', 'jahrichie');

/** MySQL database password */
define('DB_PASSWORD', 'brat1124');

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
define('AUTH_KEY',         'fwGQU2T-^+8wp?|&JTB4@~.He+3%gss4Z,nV=&s`et2,M<-Jhdw9?&Sa<b:n]q!_');
define('SECURE_AUTH_KEY',  'anl+nw,o](3.ne9e2-l9,nG7*3KK? @c (*k!b+-@aw|bqB+X]XnF6bT-qY3dE|}');
define('LOGGED_IN_KEY',    'ol-Z<Iy-5znn;}AD(F+6-y8k$w_6# ,Mr7jX.FAm3bg`gwd>5~m96g1Jz~tQu^SD');
define('NONCE_KEY',        'ZN+^us{c^C=|7|zs]aN; i(rWY@<v[L:=D* xPPPi>.C)KH/6+{,f3%gVeKM0+ZH');
define('AUTH_SALT',        '>0XF$q~uK=-np^MqA=X)s!1-cuK#|F7#,NO-n-e$NN=]|C/S%@Yu.|@-E3tMODU-');
define('SECURE_AUTH_SALT', 'QwaP>NXAqgS?pPqnS6+(4-]v`f9[BLnm=#hA}w8H)RX|/I? JZ^wUZ-A4(4+jS,}');
define('LOGGED_IN_SALT',   ',6bekNfauwpD-WGBX%:m+Jza;-cWj<<v}B!Ud+P4Cw-?6)^1fGzBEEK~ojL)vEH:');
define('NONCE_SALT',       'B!/K66[_n(YF|tF6}jq~Z%5XXYO84u?3U%V>vC$  YQsS8G+>X$Dk}*)<ix7JE,m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
