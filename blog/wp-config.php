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
define( 'DB_NAME', 'i6534695_wp3' );

/** MySQL database username */
define( 'DB_USER', 'i6534695_wp3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B.OxiecaptmwxMZzkj580' );

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
define('AUTH_KEY',         'tAFpo5f4wLcoPF6mrtzs4DINaFLR9qEaNaqxBUfByEZgg9Mflw15vEb0BGPNcBnB');
define('SECURE_AUTH_KEY',  '7I5dlxwY94AGMEvvWn5sot0W7GnwlvkXnT0o1BNlOLJPfn3du3ejmKdVULa1j6fG');
define('LOGGED_IN_KEY',    'L6mm8GEfqz04R2vjITIsPRDbSgvBjwGDrhvR7oH7JyYYcW8XQWKQJZ3sUxjzkx2h');
define('NONCE_KEY',        'UCmkVBBZYtiBeOi2Wd9eTTSfZptRV5wz24LCak01HgW2FJYsdl8qEdVyLsH74JKi');
define('AUTH_SALT',        's9OzIF9HNDTG2XvG6B03fkVnxsxCnAuVpSTtVIzCyRcryhkHHsP28MGQZZ3Fn2fc');
define('SECURE_AUTH_SALT', 'wBmYVX44slGhMwBEv0KHDCL14LnTBxcWt7SBe9xARef81A68HY3zeYuMmbsGhXir');
define('LOGGED_IN_SALT',   'AJEIuJtNA4pEZPq0xFMxdx2ktdiAEyOQOC6oBRFfXfymCunFnJblbm1l0ckAcFhx');
define('NONCE_SALT',       '8piPjGBmTeIObom8cxgJMW8zeP9oKnfj5aiDiEsA7SWwIIeQrucbodCKjc9rMTnL');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
