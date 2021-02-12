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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i7274311_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i7274311_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G.9p7eN2heSRxlRE8DN12' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PACZt5A4FV7a1bOWR5PcMAz738m9tTUqOY4yu3OIcWtznpDjfUMhP0nMC6EBM3yG');
define('SECURE_AUTH_KEY',  'R3PIJpNyZojQykbkB7hHJoj6ce2DvGwL27oB4sQ6tmhUKykHh7t9nUddDCOf0gLE');
define('LOGGED_IN_KEY',    'gsLZF4oGtFcM53WOcgGZcPTSLimFiY6ATpKjqwxwsxmG5qbjI4CJI6DVbOcRSPvj');
define('NONCE_KEY',        'yggRLCyHc00QZkXyECMJhBgxrIJtkagYfxrI3kekgnR89FkLjooVFb89YMnBcNsm');
define('AUTH_SALT',        '6nj3a0SqVIdNtioTRwt7DzomO85a7vMker1aZIreqo3huVqHbuzhoqSJTINW4Hoi');
define('SECURE_AUTH_SALT', 'kY8Y1vGDKadoiOmmXtnpuk249m0gKMzMfOe9jKaPGAsphiq4YvqZTzdMwq6b47Rg');
define('LOGGED_IN_SALT',   'epsVfaWNPbQ8RMoVgPoNKZ6pmrsKe7H3kIaKp1OhiZOb1vR9jPs7lBf05v1uJGLH');
define('NONCE_SALT',       'ifbcQT3lG9De2Q264tRxaFOHMpFge5Mkx2YlTJu33hbIhhVbGKIVUjHkDojMb2wN');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_60vqy9gj1v_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
