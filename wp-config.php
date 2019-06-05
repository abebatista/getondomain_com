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
define( 'DB_NAME', 'getondomain_com');

/** MySQL database username */
define( 'DB_USER', 'admin_getondomain_com');

/** MySQL database password */
define( 'DB_PASSWORD', '*Adm1n_G3t0nD0m41n_C0m*');

/** MySQL hostname */
define( 'DB_HOST', '173.249.58.200');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7b8ae3ffe28ea8a35dff3c2cb29a8bcbdbdb30e2');
define( 'SECURE_AUTH_KEY',  'f02d9ecef1dbe10c5282a321d0201d87e5193ee2');
define( 'LOGGED_IN_KEY',    '3ad73c37fd9858c3719b3fbe66d2ab4677ca4cca');
define( 'NONCE_KEY',        '9066c6ea6bc2ab4a3b7e1eafed08f3c66f842497');
define( 'AUTH_SALT',        '2dfa57c7a6f5b2f199cafb495b16c060ed5742b7');
define( 'SECURE_AUTH_SALT', 'c76bbcdd4aae12f6b70af532b9e06d0f5cdb5f9e');
define( 'LOGGED_IN_SALT',   'c1bda265d7612708392c4cde7cd6cbd7584e50bb');
define( 'NONCE_SALT',       'e4253df5c7bea5f19de39bd0b3dc10ab9a232112');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
