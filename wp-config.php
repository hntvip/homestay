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
define('DB_NAME', 'homestay_database');

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
define('AUTH_KEY',         '<IT])Kq^JXsjMd#3krPdDC.`7Q/Bp!&;GZffe1nf3^ET[C]([g/Wg3-3u,~ie}T?');
define('SECURE_AUTH_KEY',  'r>~am)&J]~T}7KMOJA]R;sjU]qsj8P:_jP%pDwzx%7s:D%8jS51]km:_2uJJjJTz');
define('LOGGED_IN_KEY',    '=5M|/<vi0GN8vm>4i$%iSN$PdW22W._4o9l@nMJ&- Ts5N6I#/q%j@I:yVkq?){k');
define('NONCE_KEY',        'PJ(b{R9P=?:#KrL,j>Hj<L|DpV}!%f0CsOY&6@/1HV>v|}>Zr~u0aN!F{N9bG/3i');
define('AUTH_SALT',        'ff7+c0m>q82tU$@%nTej?)8q#27@><6Jf6rY:l1&KVc-^Vh`;`49DB{,1pc-]4e*');
define('SECURE_AUTH_SALT', 'it_{-EIiNhTJ_Omy1FM}?U1~1A?M5f<~+fx@6kkCRrI.>LG9$ !Fat1^32&oqwI1');
define('LOGGED_IN_SALT',   '[*Wh{~Rrv1t&IqfU$10B9,s`xYBuMu]r&DI/+?ZE#.!kmBo_1][f6]/{?lNDGGGu');
define('NONCE_SALT',       'ZB?!i( $wUon}S!74EVwr6,9nhamFVro6r/h (2|#;}/gdd`i/8ER(X)kMJBf&H7');

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
