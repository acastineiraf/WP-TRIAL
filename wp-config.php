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
define('DB_NAME', 'wordpress_0');

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
define('AUTH_KEY',         'G`VjbPhw*(X?c)wO_L*B+f<]KP5O x[-,E luARQniz;$+LtssB0-iME5a -Jr5-');
define('SECURE_AUTH_KEY',  'xm3[UOitY%>Z4ox,#p z=zkbyjImcs(Izg+Kyc&* ys>2=Jd/EO)5~/D4$zP1<O(');
define('LOGGED_IN_KEY',    '6FjiBB,TN7+#QD(B<}nr}IZKr5UXXn[,q64Vy{-Or&b53saWWV^IYd;xd/H6=]rW');
define('NONCE_KEY',        '*zHvb/EkPc7o2>4w]B6WD<st:k*xp WJy7N84g;()jZJNDRi*OQbn[Ah7&eKQC*[');
define('AUTH_SALT',        'cwW=QY3YZ+jl~G~:Wp-59R2:{[vpgi^jeK1bq(*whEbh|R{MHYis`xdf9 Ck~PdY');
define('SECURE_AUTH_SALT', 'hL2O 9GpiXCgPMb]y1T(Cib*$?-B>k4Lhor/v0~KG?Kfz)1|SQ-Q0(xre+3?^N@b');
define('LOGGED_IN_SALT',   '}dP?e+*@P|9Kk$1flWTO033}B&^,BW^~I!6,]A1?f:26BAp)BostK1?w0!dM1rGe');
define('NONCE_SALT',       'Bhbz[?D`RYBkOkKiSco/Czt2O!MOj!oObQ/Se~lg myf~5gS$/uqKGOYMpIQ9Yic');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
