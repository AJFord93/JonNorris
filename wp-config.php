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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
 define('AUTH_KEY',         '|tOI.|10JULzb9HrW!4Q<!2Bzx/!X|D~J7nJY3ye@]GtGMG0PiN4_)r]~YfoGeo@');
 define('SECURE_AUTH_KEY',  'sz;{yQe?XDAdVwY;D-}T[l4@3]/%/;U9CawX#V5jq_Dc6%xkr;zoauM|`KAHa 91');
 define('LOGGED_IN_KEY',    'R7KWHIfLH RiBiFkr0d:A#f|^,jUlSIWCXmDQgvF?1C.Khfy3C$9k)rZI@a8!S+r');
 define('NONCE_KEY',        '1vzkiQ4OB|G$N_Py^stXOiDK#m4j+%3x[,giH1)gM=xt{ttHjoTF,Iy/=S(2w@xE');
 define('AUTH_SALT',        '[?#zRMogJ`wrcSE4X4WkZ-nV-h*c^L0zAEsb~V`tj-EI}/yR7ADK~U/lKrx4:A+>');
 define('SECURE_AUTH_SALT', '-WRfrjj?ZE65kaEO 7c|.n<AX/;nd 5u +Yb@7q|B>a%DY>Okm@fC@4fJ+X<<ff3');
 define('LOGGED_IN_SALT',   '?7Dz28M_D7a0g3WW9 UA|=ZCTji:Z{s,b )L/@-`)q^0X.g$ci.I~tas|2 Ewt~A');
 define('NONCE_SALT',       'N-vaaUqM3R0&B/EaV,&`cVPpEFdW.S?2l+$Z%QG|SF-?dJLw;5.%N:V@gc]Y{s$b');

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
