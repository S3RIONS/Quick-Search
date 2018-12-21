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
define('DB_NAME', 'cleanand_db');

/** MySQL database username */
define('DB_USER', 'cleanand_db');

/** MySQL database password */
define('DB_PASSWORD', 'dqlSPedp');

/** MySQL hostname */
define('DB_HOST', 'cleanand.mysql.tools');

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
define('AUTH_KEY',         'pE&(FV^%TLJFNCPArEgBei%m%88kNNjj5rTmHmDqpk*j&R*WrbS@o^bx8C%S&bK1');
define('SECURE_AUTH_KEY',  '%LqtY1QEcFu*lUtds8CpQB)az0NuobjJmXfaZGeRi6U%0%w7L5EAl#Nnk#WL(xWb');
define('LOGGED_IN_KEY',    '2DnHmvleo^56^@Y%si38Rqp#!RL@q(in)tz@olx^mxL489o@UrN68MavHqrhOgDT');
define('NONCE_KEY',        'P^aE(x6BNAhfdVyRLTN5uar8Rcp9gPSol2%i11E0Twtw8qneKQB8RCk)jvOxO@@Y');
define('AUTH_SALT',        'dvhnZJ7@T)Y0MHeXylt)zW4cf%oEwZCw40nXlis%sNT!Js@7eAJokZwTSqT@Bm!Q');
define('SECURE_AUTH_SALT', 'deR1Z%k7ay)qHL79qB)Cp2aK0&dnBmtKAj!1xuCxVaIhdlnnf8rBXqmwv(1dZqVD');
define('LOGGED_IN_SALT',   'vvXMU2d!lq##&#N3zBS*QhqkUWk5iU6*^XJo)2wvj^bnZ#5dd9gcGAE^Ox^FzSqb');
define('NONCE_SALT',       'dqI*@T*6&wG^d9^%Lx&XTLaa@qU^h(QYH&(4WAbRl9eY!E3Upvf*ElfKuisAEj22');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
