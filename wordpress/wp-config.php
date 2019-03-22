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
define('DB_NAME', 'test2');

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
define('AUTH_KEY',         '}hN8sFXzR(@t<lY0I~WTm)_-wvZ4(5GHIb!P^;OWc6<5#Fa{mV-<{QN1G5>jXw[f');
define('SECURE_AUTH_KEY',  'E1ta38+[Dk&>S[&8gHA:qI#uk+T`jk!g(d$5N{{%U{)T%==]G%jnh I c-d&_U/R');
define('LOGGED_IN_KEY',    'l6jn5:pT.Hiu3y~HhfS4[XcttXqlU^?|JN;{a6|=!!z{`%e&%i_%K`r#zU2]S`=V');
define('NONCE_KEY',        'JAkawaFHjPNehj[_k E]-3<DVE|s><s3;/IoC)v#uK]QGROs_5FxPbhs[]y7P/n|');
define('AUTH_SALT',        'di(F.2-ODw4v}dkW/,^4=Z9~HB^M|y0,E-^s/fe;+DsIJW`z+U88vHAxlb=F]@^0');
define('SECURE_AUTH_SALT', 'E4 |Wfvde j,{83Vy&>DU?(q,k8S.cSs)^Cq*6UV:(JPxfU#6x_G(_AH9PgZmyWf');
define('LOGGED_IN_SALT',   'sQ)[cl~(2tf/Kj#>,+DWK:ITRkMU[ TS ,W}hx@z#][<xc-|q^zc?hSZ=RO)=Mx+');
define('NONCE_SALT',       ';7p*JM+KHO xUs-kqhsG9.2d+!} >.T0>*If%l-C)DD51LV6U`c`M|eo xraNfR/');

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
