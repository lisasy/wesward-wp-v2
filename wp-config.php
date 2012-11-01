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
define('DB_NAME', 'wesward2');

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
define('AUTH_KEY',         '+ ~?Xd$8O/l2+67,]iH5:IGA-MMO,C{B[8io@g?0sB-,94BZrDXfCUb;R(%I;PK%');
define('SECURE_AUTH_KEY',  'AwX_b,8Lm5C;<-t[$X5;I,{ks~{#/F.e:`YzyXQ+o+H~3lZx{;370+B5~i,*@8|^');
define('LOGGED_IN_KEY',    'b5;OEq$s_OHoA28>?XwL&>>[DK;R)Q?(tMxf% -PAF{|4CH[B5)}bq_W^-0v`?VL');
define('NONCE_KEY',        'Ic;Opw}_y} /,X,wfL%9UiMTud[Go`qB`B:iGn[u=Rxs=69~_Q]`I|BJ-hf,7n&|');
define('AUTH_SALT',        '&dbivC=!x|YkQiBt @EZuiENPo$:&pHk2ZL.;xt+t`tu=K!8VpXQ018g4+-R^IBs');
define('SECURE_AUTH_SALT', ' bN+Lyxi]|PC!9][C*r2K>v8|Ne=Zn.rS(9|<cfDGALZpz+upED`oO+Gpp=#<v?S');
define('LOGGED_IN_SALT',   'b;J%-=<-ci+C61]C-9x>71|=g.6JFE[?iAZbNWfl?i`Z46,c!cVcv2+D~E,,ALc%');
define('NONCE_SALT',       '4m*OkTo]$M1u*zve@9GrmmP+=FM+!6d,$xL1v5}PIw a)|j*)3En6-WCAd{j2z#g');

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
