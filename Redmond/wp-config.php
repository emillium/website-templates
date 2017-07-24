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
define('DB_NAME', 'C35892_redmondbahai');

/** MySQL database username */
define('DB_USER', 'C35892_emillium');

/** MySQL database password */
define('DB_PASSWORD', 'Pa55w0rd');

/** MySQL hostname */
define('DB_HOST', 'mysql903.ixwebhosting.com');

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
define('AUTH_KEY',         '#DJ#%gCAGxmt7H[e;OsOW/1<U_|VF84Q]Z2IZeDBSLnFE$-<q2&M_{g>XzwGM nV');
define('SECURE_AUTH_KEY',  '!Yzs)PS&@#^=n<2#P{#lJ%d-?y*|YD- TFtpsB2u#yJ;,}2c;1cciB`(`$l)c?c=');
define('LOGGED_IN_KEY',    ']xgJRZwSD@C$gqw~@RM3*rM!q{mb9h$QeH)UMRoIFS?Q)CjwOyTv|1O)Z*@t1zn^');
define('NONCE_KEY',        'c:zlCySN:ZNC17*ZR>-D#|]Hys@w@^N&]g52_(q!@at8Ua!|m4IcekI?*?&sLH0K');
define('AUTH_SALT',        ')9!<>9urdH.C2A5&LUh`DGjkq&>G5a!rn_Z%HT{NrY#(!!~A3#PwncHgMRx3}rg4');
define('SECURE_AUTH_SALT', 'LP%^$p;r)c*$3RC4P}}L?}Dt`:!HJxMRy9c$w&lfsmg/-(4~XIrnmlByq}!zb_iA');
define('LOGGED_IN_SALT',   '#Gj4N.Ui0k|]1uzK1ttNJ!!#|}OS03zsNySXX#I}-E4MpQKI&}eXGA;ea$MUSk.$');
define('NONCE_SALT',       'V&LA%2)?<o5c-`Q0?q|[-{b>Qyb`ZcQGC^Uuw10t`!~6oUBa5]<+$ba`)~[b`5kM');

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
