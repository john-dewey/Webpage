<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kbdwxkmy_WPCA7');

/** Database username */
define('DB_USER', 'kbdwxkmy_WPCA7');

/** Database password */
define('DB_PASSWORD', ')fEDCA%c_W)Us3Y[%');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '8ab29d3e260a630079f47b7e6c12446957d66407fcf8f2c5fa0ed265854de89b');
define('SECURE_AUTH_KEY', '12b1ad3f441e1584d3e72c0560d54def38871662cc95fc1cc046d20ff9b96109');
define('LOGGED_IN_KEY', 'bd08eb1008cfb5c7ef7742c5004ee3bf6d3b53603228357b51f2fbdaec3cdbd5');
define('NONCE_KEY', 'b608e974a6220cb3d09afaf165f2d9aa4de610c68f27c5dd10ce594edc0c2b77');
define('AUTH_SALT', 'd29cd1914a88c23fd8756711288a0c1c7b545235f23505ff7861e7ab681b11e9');
define('SECURE_AUTH_SALT', '9c5c22196e080a8c45c547100e581a9308fec7bfa03785cd3493d339bc1b8955');
define('LOGGED_IN_SALT', '1be6cd013041f659013b58cbc07a7d3b834179939e7ed610d2d682fc7feeda7f');
define('NONCE_SALT', 'e6f9417db4a8c5106ad5defa65b51ca84d9495d28f9f6b141228d4a54f3767b3');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'drv_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
