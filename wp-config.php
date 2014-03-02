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
define('AUTH_KEY',         'XqIQ.t0,h9)|vBM3q7nMJoJ#H2D)^t7r s!$8)@eG-0EdI-<7=n-|tf}Z87UW{s|');
define('SECURE_AUTH_KEY',  '=6Glbp2/5GUSRm:r_t`b+W?qG|wKtWs:Yr_0}VNSfd|1Z|Vzdb<6.}<cg|nAP$%|');
define('LOGGED_IN_KEY',    'x1FG|/{5l6l^)}8DL*V5)47 BW$y%:/^+a`uKy&]Pqi(nF]#zlljp(C(fIG&+Gr7');
define('NONCE_KEY',        'kFG$W?GJxS1o2$EnZ<*uWa?:6|if(fuk foganE@QqEO @Op_bV:N ;-q3.u9eql');
define('AUTH_SALT',        '/ucCSVOj|vXq$+ea1~R=J_JIef1wL]nm9,qO<DB_o5p2hpT`v)Z+d??b&7EmFryZ');
define('SECURE_AUTH_SALT', 'x +yR|I*9ZB|$ 4qT;I+G?=8F~5|n*1v|1.p0_nk|;DNas6,3EQuW_+6Y%J#6nKL');
define('LOGGED_IN_SALT',   'kEuew5IEWlhL (`d9NL~ xG0GEKy-uG:K)^]f|o.gR4W0.|4cEt|KR&1BWQtis|U');
define('NONCE_SALT',       '`Gh*f!#tZ(zxWUv4J^anx%?xs25.!/`(dNK_W63RqH>;fs`p~0fhs2g,U7r4}U;6');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
