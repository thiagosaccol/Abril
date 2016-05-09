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
define('DB_NAME', 'abril');

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
define('AUTH_KEY',         'ASbuU_Ce1_EY2j7mVSH|K(GRY^Fv>P|Ot/yj6cFv.SRZlmJ%f`x_#:&L6Fn4)Lft');
define('SECURE_AUTH_KEY',  'c*RuC1bewTKniuA$t*D?*HOr%UrB_Y#[hd;!1Tm$*=fMxl)FFB}g`G/.IOS4aZ/;');
define('LOGGED_IN_KEY',    '`/hLebYd5VYGE7>#UGu/r=L2R^KBc>}ot9Vij/Q6v{E4+!GhGl68-Ait2 ^7S=.5');
define('NONCE_KEY',        'aZ<|BIVt+G/&>P6FKJPyXS:SydEF9w~>r6:~L~]_eo^ob|?E;kSv`,,PJ>wmZ%iX');
define('AUTH_SALT',        '@P^4kcyUvPvx$Oef)J(?XKD.sQl]VxeE-L+y9 U*#7[Meun 70iB[g!Wa2i7fE$~');
define('SECURE_AUTH_SALT', '1$6XGsJXBxOA?/}hwOK2gd>b/Q6Z@x4t![-P-A/V=@$~Q!4#WgJ3eJy fY#}3L|7');
define('LOGGED_IN_SALT',   ';1rwDh0DQhW3<Osx)xhc,okgf1yVgPwxzJSORv.*H+6paiw(fp6b|k4yiv;a+j`g');
define('NONCE_SALT',       'ai6txKnWyYa<Qd[uLSrf?S#NQhnd/q~,Z!v!S7A4;Wpif8s?tTVVumCqTK!29|wT');

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
