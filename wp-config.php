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
define('DB_NAME', 'staxepk');

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
define('AUTH_KEY',         '[x%7DQV1>ty0Eo-<04_Tt$Aa8jQyEr!ea+2FsT K+mGuXvVQ(-M,Iqa^&Kgejip5');
define('SECURE_AUTH_KEY',  'w/e__#/whHk$o92D)#/{rqv.nTW2`ZjZBc|R]b!<(An0&`^7{w^A}=UTJ%|?}f#V');
define('LOGGED_IN_KEY',    '-C:C3iqNyK2qwcMS[7U>F8:U}u:d#@@u!IfW#c|(#SjlnJlO{Den8o-96aHIuTSv');
define('NONCE_KEY',        'io|}}TA6eYWBZQbgj|j!,H^4#pJo$)FYp00>N1p/1]r+({<+F[`]-*+,n]Raa&wz');
define('AUTH_SALT',        '/-)koil366k8<=()@v)xI|O!ZD+(GOkL^?}:R :2ck:f0d-pBUihRQ<ct{4TwmK|');
define('SECURE_AUTH_SALT', '>!te:5)gv $~CPre|,E+J,z(74$LdNs2Y/,4{J<Ll_Ie;YnJ,hKmps*R`)qG^9zA');
define('LOGGED_IN_SALT',   '8kO0~`l?~``pQ%ZVi oL<l}k&dSm!=D+!u /U<AM.Qe<6bzud~K=At=bw}`ZLj]@');
define('NONCE_SALT',       'i4erg ~U7w#WghqZRV./~ J1U%KtYlrM4[N!@MrwTr]w<D:n$`s8)>y0b.| b,sk');

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
