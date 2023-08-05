<?php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( "DB_NAME", getenv("MARIADB_DATABASE"));

/** Database username */
define( "DB_USER", getenv("MARIADB_USER"));

/** Database password */
define( "DB_PASSWORD", getenv("MARIADB_USER_PASS"));

/** Database hostname */
define( "DB_HOST", getenv("MARIADB_HOST") . ":3306");
#define( "DB_HOST', "127.0.0.1:3306");

/** Database charset to use in creating database tables. */
define( "DB_CHARSET", getenv("MARIADB_CHARSET"));

/** The database collate type. Don't change this if in doubt. */
define( "DB_COLLATE", getenv("MARIADB_COLLATION"));

define( 'AUTH_KEY',          getenv("WP_AUTH_KEY"));
define( 'SECURE_AUTH_KEY',   getenv("WP_SECURE_AUTH_KEY"));
define( 'LOGGED_IN_KEY',     getenv("WP_LOGGED_IN_KEY"));
define( 'NONCE_KEY',         getenv("WP_NONCE_KEY"));
define( 'AUTH_SALT',         getenv("WP_AUTH_SALT"));
define( 'SECURE_AUTH_SALT',  getenv("WP_SECURE_AUTH_SALT"));
define( 'LOGGED_IN_SALT',    getenv("WP_LOGGED_IN_SALT"));
define( 'NONCE_SALT',        getenv("WP_NONCE_SALT"));

/**#@-*/

define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', 'inception');


$table_prefix = 'wp_';


 */
define( 'WP_DEBUG', true );


if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';