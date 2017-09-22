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
define('DB_NAME', 'neptune');

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
define('AUTH_KEY',         '&r!-$[cq?BN%2lIx=1@._yEC0#22NO~6Arq?}hyU_uBd5j^o%NE@B7f*,dUd-|rP');
define('SECURE_AUTH_KEY',  '%4K5m+Ie)LB&z$$|r|7L)WOu;d@;>C&([0&* @L!LrRnl: R} `ETEAA9+Q0GQ8U');
define('LOGGED_IN_KEY',    'P6u]SRj{]xg9r}PK$UbaTt=i)1=jQ);Zx:D~f79Uf_U*lrZb]!31RDU],|OElive');
define('NONCE_KEY',        ']{Wi/^~?}PGc8*I_&[.*Nfy7QrI*Eq`gQ}Nf8zZl`UF[nv6@sJIm_*URy|-eeu>4');
define('AUTH_SALT',        'TvZFw&&Z<Tk4H@P/YIAVAp0*5:`,::pm?VWCl+Y6Yd(e8EEwUW)YR-66jBNUgBpI');
define('SECURE_AUTH_SALT', '~im:=KOCQp?B)~NLaXyPr-:3~cAF^qI~{H8~r{s[;%!J9^3N7pX)$7FurwSIZQ;S');
define('LOGGED_IN_SALT',   '!)ca0Xc4Fq-:q;*fJ)JvbISh2M~#O|~`8;rlkqA(QI0t#&|hd4At;mu72H(:$}{G');
define('NONCE_SALT',       'IF~}qD1q`=M~A+}7umA}g8O=#<#2J,wcylhul{]Ek:`!Wx%2Zk8 .j7*8!.e(^&B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_neptune';

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
