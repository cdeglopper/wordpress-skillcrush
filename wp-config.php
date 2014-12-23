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
define('AUTH_KEY',         'M{)|~ptq)Nx_$->W-+^<Rafj`->G}Z/Dv5/H]:%}Eb.O(VMO)utclTO*!3q@,hi.');
define('SECURE_AUTH_KEY',  '-fI}FEI!zbq#bH<XnO5Ap(Ou3g9!bfBDFp]2|E8[%loa&0S(|1N8;NM:DwH5R@T~');
define('LOGGED_IN_KEY',    ')Q 7en~ndjh[sWe]5 7.91+B a?xQdL1;Wg$DWG wOs,K=YiONf k[54u1-{Uv?(');
define('NONCE_KEY',        'KRwo*TPC( m%>A]G)xbXDHj@N,E9|pAH(_dTQNd|l$P^Zto[he]t@CWvj]|+7}@!');
define('AUTH_SALT',        'o%KJ%Z]^{^a#y%OW/N9abr0d90PPh+k,H|EWO5VYn1om `/+-g.Q1U:@A!0iP$B<');
define('SECURE_AUTH_SALT', '97jPrjmA~|vCY`FSfp-UB3@e6A|Y%x;u+DFu$0ck:*T<PE+$oU?j6z2ZU4M2I!;Q');
define('LOGGED_IN_SALT',   'Mj4rL>|x.m-6)|MNc.yGJ@0y5*I|}[D)`0(d2bQMfL-q~0)Lh:pXdUH-yyRM]{ z');
define('NONCE_SALT',       '5Yb0W9#6.^2*-cPQ_u<Cs%HL-;xz)]tTywHT74/MCrIW-4c)A=]Tz1u+`GgXV}a/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
