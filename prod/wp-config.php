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
define('DB_NAME', '631_bdd');

/** MySQL database username */
define('DB_USER', '631_user');

/** MySQL database password */
define('DB_PASSWORD', 'yHnrHAPB');

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
// define('AUTH_KEY',         'h|LL9y+:Q0#_v,ntEXg)vW?eH^+lz(}bntedPxipiP_a{6<Ta|h`|RM!e/xHt1xo');
// define('SECURE_AUTH_KEY',  '~eYTE8c6q*S|{x.+i7]qJx|?(RB:4lwpdjKWJNsdo-M-#fL+`:VRhuOOPsW#uaLI');
// define('LOGGED_IN_KEY',    'ogWF$WG&RbWVFk!@$h|0C-18$fnlHYH*Gv=v1-PO~B<tyid4z[iN,@neYtmu-4vx');
// define('NONCE_KEY',        'Ldw`DXO0&R7j0kne^z`eTcHPD52L}0}=z=<hNwv9N~+E rcWk@<e,,Z>3fPU8t[D');
// define('AUTH_SALT',        'ESzfQw|8jB6d[>BNNMc8fn3:r7W{_~H4%{|3/ljbtYyJ Zv2PZX_e[|A`uFaWtO1');
// define('SECURE_AUTH_SALT', '1]8YBPK:V17+nf|Zp^E~+@;ZO8>}I0Ll`YWlIfq.x<|u+I5/z+!pVSz-jBd5-x|0');
// define('LOGGED_IN_SALT',   '6pQ=^QJ@%-Rm;JRNaAV6r/r=Two^NrgW$Fa/6X%FbY?!XZ.^gX-Z37( aPZ<`<{o');
// define('NONCE_SALT',       'FrLpQ:eMvFQn k{v>)ypr+A*[J4Hs]EA@^c-`p=bFN;BDXB6ClkAhs_wNz[96]Md');

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

define('WP_DEFAULT_THEME', 'fpel');

/**
 * URLs
 */
define('WP_HOME', 'http://kitdecom.europe.bzh');
define('WP_SITEURL', 'http://kitdecom.europe.bzh');

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
// define('DISABLE_WP_CRON', true);
// define('DISALLOW_FILE_EDIT', true);

