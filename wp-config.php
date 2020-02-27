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
define( 'DB_NAME', 'university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ANv5ideDIVBq4NGmVFQR0YGyIHLmGMDyP0JILQ8uEXlTtzwj4AMrU0u5twU4LXcd' );
define( 'SECURE_AUTH_KEY',  'FcPtT3OJmgeWQfwrVytKSw3dKOe08DK3JNJjP1n44QIqYtsIXbQpBT4tezg4Y6N1' );
define( 'LOGGED_IN_KEY',    's96eU3OVxGk7HKfUSN8kid7bhHFKuERZU5ThkJUxqvpPJuw4p9568npGMJ4XZHV9' );
define( 'NONCE_KEY',        'mzmc7YkLS5B3RTGgafr10xWIjZr5chZ7kOFM1g2nNfFXKOcKGEeclWPX4bHe5tc0' );
define( 'AUTH_SALT',        'rYGBHNVQxofyDlwla04US6inl8USE87AesFn5riVc94ufI9azfi04GnmOe5fhBNV' );
define( 'SECURE_AUTH_SALT', 'Im5qGuycvFeE48LaSt12uTcbo440ObepB1T6ufIdB0ytgcli6WfYeB5S3S0ZB4It' );
define( 'LOGGED_IN_SALT',   '84OwgMzoHyM8xLWvnraCGbrq6wkKN429DvVQvOVZ3C9JWK3Um3NF4YvPffHUFpbx' );
define( 'NONCE_SALT',       'zqeLEmh21K9MzQA5MdrXbeSm8h0uFkajuYnEigv1sMM8rPuKvQDkH5jtXtvp7cpR' );

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
