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
define('AUTH_KEY',         'B.t)@~tGQ(tN*aT8y((DqNVSkU@o gpJiu(;oNtWG|0:=xy}WI!23=n$7=Fdhmy$');
define('SECURE_AUTH_KEY',  '9 <@*n<B4)@B]`IbY}c0>]`fZ|YJuo*Dyx./oYMRg )~Ns9q+U:b~`e+mX+obw3[');
define('LOGGED_IN_KEY',    'flhc>n}(g@UIXi9iJnt#*GXm)1W6#{)R%vNJd3y6b:$l@q8T%?uC%Hk=P&D!F6!0');
define('NONCE_KEY',        'k(WcItqj~$b4Kxf]o|E%fYTeT]c&vTS(bY_3?<>(.BsL5kADZk!21/KBUi=Xfgr&');
define('AUTH_SALT',        '-1A_w8kM4pIicfgkK4S;`vwoiR`D+!J@IQ(Gzf}e!Q>([M$+Hqb!*vD%_BUSRHDs');
define('SECURE_AUTH_SALT', 'J!+1lTG9*5IVds)7`>?gf):7f]E9 2vXTR|Whb5wdc>EoTReGK0,!h&O2Y2`m1-h');
define('LOGGED_IN_SALT',   'DF`G<GLQmLTNy|SFkUWQr}V#5S5|p]}JQXp{=TmpJ,f* :)Qv!^GFs`?gI0A&fEr');
define('NONCE_SALT',       '#Lh=[/0qtv[8eEv(}9H<Ne)[XJn6I#U;qHS0Nl>=5 Lbo90c,[m_Soy~!?q|L:{i');

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
