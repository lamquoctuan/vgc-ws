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
define('DB_NAME', 'vgc');

/** MySQL database username */
define('DB_USER', 'vgc');

/** MySQL database password */
define('DB_PASSWORD', 'vgc');

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
define('AUTH_KEY',         ';%hWoGQsV_h/yo6-gg;xo5K9rkZ[~>8Ok.6jf#aVvNo1_0i0Ahjd1=y;Y}^f1$C+');
define('SECURE_AUTH_KEY',  'tq!`6[([IDM<x@9^?gr:B`;7jP|4D&;/G-^ -(@6[;SMWAVI:cN}y7/>h~:X;+8a');
define('LOGGED_IN_KEY',    '^nM#I#TCZC>|;>?ei<.b->3`*nHfj{xiQIm~JiXGe$b4g-Y^m:5WM7jIu}p*oYgB');
define('NONCE_KEY',        '6u7(1K-;vgRKRg$>|D};0-Y5a>4VwsgK`BmYnHV/d(uEN7B6_?8WqtX-)#_nyB;Y');
define('AUTH_SALT',        '0>gZ7!jNQ(>9{S}E@Rg9?z#nB~`lI*M~RLtuO<#mHSE(ZWGxF#Y|%Vl&(v4ht2gu');
define('SECURE_AUTH_SALT', ':/ge6kmU29<H$Y+W8<y $MXGb4F|Z17ghXA.gV3o)yyrk-dr]|FPF|Im9FUoK7+b');
define('LOGGED_IN_SALT',   '3=k<+]k--&SycFa=;ca:#!NmJvb72BvL<NZ|<S{7B334*jgmK-`MgdBR?Q4S+C25');
define('NONCE_SALT',       '-sD{s8WKx@ALxFzdYtc[wKROrn&?#S=phdi!7{NY1}ZncIft~BBR,q~YpRn5aaH-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vgc_';

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

