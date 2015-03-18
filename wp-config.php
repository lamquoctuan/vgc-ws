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
define('DB_NAME', 'vgc_ws');

/** MySQL database username */
define('DB_USER', 'vgc_ws');

/** MySQL database password */
define('DB_PASSWORD', 'vgc_ws');

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
define('AUTH_KEY',         '|Ymdbl8i CZ/Xkh)IDE40tDmcW|ie!h[bC,Zm[&]L.t`nfTA=U%sc/+:PuJ$$)#L');
define('SECURE_AUTH_KEY',  '-GEwOA#Bb!_h%H20?^szFb*V?OC`wSg[}B4:v^|T9AUiTw8ZHx]+C>F>Oi:u{GX`');
define('LOGGED_IN_KEY',    '-pnnNDfbb^(z)m3+ >A`Twrg-EB|X!}jW|@%vtPBWk [Zn6N$3*d{NB61VulCZ_#');
define('NONCE_KEY',        '|9BA@d,Q]IO^.pe/)r2=%@V,D-lq`ViN2js{t)~ZgYqv:e:dO+Yr_@06D0j)/K]l');
define('AUTH_SALT',        '<efOHR3%?){fi5!jX1C%qV2kwh-o@S&LKQb/h}BWS`4Q &U|F!qNQEj)*@:^}0[+');
define('SECURE_AUTH_SALT', 'Dr)UY&ysafRR4H*wJ9D>gWM+ICbrW~;sI=MJWe,Wx-rSa,u++0CQ!Hkfql,&2>& ');
define('LOGGED_IN_SALT',   '|Z[+GOV|?F.Iou&A~  7D?A=6$WJZCoSe*07AhVAwL?EqL>Ui4YY#lSi>ZBszq+y');
define('NONCE_SALT',       'C|W/gz^-(G[T5{_!v3y.kN%;@Lu<<UDb{,TMMrL|cxpa|Bf#wvxe8<s;]s)f89G^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vgc_';

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

