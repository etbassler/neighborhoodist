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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AVyGC6dQ3IaM62QRULLSz16imfZTjj2/3fplH+7Nx2A48qzbIPjFtU+CnuAN+useM0yZNFECCfpG/gdvXcC2EA==');
define('SECURE_AUTH_KEY',  'F+jhT6nSRiIK+I1CRuMnL6Bbb1+mq214/eRynhX5BDc1nyQXW27w5tVTyYwelevRj4Qa/lYVRA70LUljhHKKIg==');
define('LOGGED_IN_KEY',    'wKq1I+Z8DF7Cjl+BdlMd5J6xAu61sgZPxJzHRWD1rxDs6FXv6lPDCNvssKaWy7+VEsAAQJXu5UtlwEJxMz4JLg==');
define('NONCE_KEY',        'TBwy0qtsExDba5YUf6U+ewLBkIBMd8TvMtV4uHxqO7/9SzCjg2qp1zbTQiI1o5Ebfa2KFumje5FujERku/0C3A==');
define('AUTH_SALT',        'JDq2x/DEhib9HJqYoN4rblzAmjjA1L4oXTAWC2vQllAkfOKfX6Ho5Ef2QS5rwerDFQOVqkXybHBK/OA+G4YTIQ==');
define('SECURE_AUTH_SALT', 'gLa25wMS5pGBzOw0itHuXtV2d/kB/x/FOMTMBYuU3SLsqCw+psPcMgW3MdTSMxwcX3f/uty/gCebdIiUQzGFcA==');
define('LOGGED_IN_SALT',   'JvzCvP40Z3AbysiOmgidWtQiETkrID/Vt3ueNcOosTOQTw9P7QRnrtRJM8qMU5A0ayy5O5Wt7QHimyYwktRm4A==');
define('NONCE_SALT',       'H9VHaDIuWph2zF1DAlcmHrgGAAGkcCXQdcHw/rvOQRjLGGXlsBJtrkr34Zck674OCCf8xR27THAgVHcdey6/Sw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
