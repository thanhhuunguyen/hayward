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
define('DB_NAME', 'haywarddev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'yVrTAcB-nd4}/[LX-~&uz{B~@O.%cLXN{3l7{neM[HpA@+}OmTs`T?V{nhr<vXS`');
define('SECURE_AUTH_KEY',  'aE|nZ);Nn+@f!8nOo0I,m.AP{6u)[aUftk6P~:5ocsWe _d16lF2 ](R>[f}<YqM');
define('LOGGED_IN_KEY',    'w!.q_}7rZFwrU$8!x#wOmSM]fFVUB.`i[+]NBl4$kbMF%+P[ckute+Q;(Gj-kFKg');
define('NONCE_KEY',        '?:`G?;d8|Z2m_p,,G_fm1lsj>]2QV.x;n_wEgL5<=;ybf@Rol ?37rCinjXe(XE[');
define('AUTH_SALT',        'Y~Wn>!I^kt3JtkZhkQ]`nDntp,/[Jnk<$U%ilT7^`/{3X*&U-Y1@.JFPm,G(UB!g');
define('SECURE_AUTH_SALT', 'xrAVu9|R6XsognLzg_DSuF{|Hy:HG2.KAn0#1<2QiK&~Y/B%>fH2Wnq/7mMQT2Bb');
define('LOGGED_IN_SALT',   '%9mNYMJ0,y~5Si,T:->pK=wj 1{Kc5bF^GGu7~E20`aXG0H)PeChF(*FJ(Jo Tn~');
define('NONCE_SALT',       '?^1tHeHW57nKsQ>utlD5]BIow^gtLuk;spkMOmb~!H|4yC^I&^tj>}@D%_&mlg#G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
