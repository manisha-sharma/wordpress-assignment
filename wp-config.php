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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'P<nkol9IB5{}~(1A=.1e-e@gfFa`95S1AJ6 s3_|(ee0ct&A/qxD(SKS:precUR8');
define('SECURE_AUTH_KEY',  'grDLJUD}-v;<)H,-/09hpDR]jnW}d.JICzf$-+E){1X<a5~7bre5>5lk,e5][RW^');
define('LOGGED_IN_KEY',    'g`Tjn*sv`B:m)^;pC,&NxyFEK?qr[X>FCJ]%3dbIsl=Q?jt~,CM&E}<_UBg*F9|>');
define('NONCE_KEY',        'j39ZV3G BwyY8+#E+) 4sTT#%n^4Ck=w5xY3A4n_H|479 Z fp=JY8lbuSN0o_tY');
define('AUTH_SALT',        'Si: F@-wly@x_1njg^7X%T_F,to~!+2?F8@#0;*1DP:},ysAGgncG9)mgN5J%}SA');
define('SECURE_AUTH_SALT', 'j8(iAiL)><bzYPad:{)eYg?ikykY8)IR3jURQ{D*Py N&IQnT{]}+^kRax]y~je:');
define('LOGGED_IN_SALT',   'jiwBirL>CzUr;:0Ndx1/+8`}[KM.Yfq,h|{;I$pNnnD:e~lh2FD5Eq!d->qy|wbu');
define('NONCE_SALT',       '68l$`6<w#?&2v(zTqllq>O}1^6lT$d/0nAnlRu8^h|sz+@ucQZaS8M3B:J%uGou+');

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
