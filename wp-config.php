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
define('DB_NAME', 'wptheme');

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
define('AUTH_KEY',         '$1{/S )WpG<RCcw`>*ey<4NXuSs|5DmC#2Z(vOud^Bdy9L4(c3DvOaK&lCokx+j0');
define('SECURE_AUTH_KEY',  '&e<9U>~4=!2tnz7;kbfS1$[]?5A]@kTIcsMWW[NGRo^r=+XP|ka_TJ`)#rEq#&Uz');
define('LOGGED_IN_KEY',    '6E6i8zg?a:5*E]ueDr-ppjUSsOnNe*i/d0GOi7<D`)X|3hAtstF<%*F&_FNzbFIB');
define('NONCE_KEY',        'S>-9yNvC-LvoH7xO~+__Xq0QuC0trisx$x4/#uDg4n}I?2F<.5%h82G.%_*o9o5[');
define('AUTH_SALT',        '-I}+ ^hp/(c6BDfiaSOHVL{:B<Be*ALdeikG27p!.oK2`V1xn(lS:pXkZ|Yu}vu4');
define('SECURE_AUTH_SALT', 'kKN<J?jlEDy@QHoto=M^U_FU> *TI8I7`K@udo|pe1QJdgybF;g6bP]qT4F^RI/#');
define('LOGGED_IN_SALT',   '.3gEhycXu4~i(qWaKjaXEYYdDKP&`Ng;<km8j[0Q9GT/-~I}J`=VZl4Qdu~,bZVY');
define('NONCE_SALT',       'wj}YKh=M}3u`2G LEawy$U[tj;kC#xTf!U.%vXLBEsg!2ZkBH/T<X((F?~NJzf!|');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
