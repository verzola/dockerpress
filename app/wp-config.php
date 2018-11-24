<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 * This wp-config.php is modified to get configs from environment variables.
 */

/**
 * Get environment variable or default
 * @param $key string
 * @param $default mixed
 * @return string
 */
function env( $key, $default = null ) {
    $value = getenv( $key );

    if ( $value === false ) {
        return $default;
    }

    switch ( strtolower( $value ) ) {
        case 'true':
            return true;
        case 'false':
            return false;
        case 'null':
            return;
    }

    return $value;
}

// Determine HTTP or HTTPS, then set WP_SITEURL and WP_HOME
if ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) {
    $protocol_to_use = 'https://';
} else {
    $protocol_to_use = 'http://';
}

if (isset($_SERVER['HTTP_HOST'])) {
    define('HTTP_HOST', $_SERVER['HTTP_HOST']);
} else {
    define('HTTP_HOST', 'localhost');
}

define('WP_SITEURL', $protocol_to_use . HTTP_HOST);
define('WP_HOME', $protocol_to_use . HTTP_HOST);

/* MySQL settings */
define( 'DB_NAME',     env('WP_DB_NAME', 'wordpress') );
define( 'DB_USER',     env('WP_DB_USER', 'root') );
define( 'DB_PASSWORD', env('WP_DB_PASSWORD', 'example') );
define( 'DB_HOST',     env('WP_DB_HOST', 'mysql') );
define( 'DB_CHARSET',  env('WP_DB_CHARSET', 'utf8') );


/* MySQL database table prefix. */
$table_prefix = env('WP_TABLE_PREFIX', 'wp_');

/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         env('WP_AUTH_KEY') );
define( 'SECURE_AUTH_KEY',  env('WP_SECURE_AUTH_KEY') );
define( 'LOGGED_IN_KEY',    env('WP_LOGGED_IN_KEY') );
define( 'NONCE_KEY',        env('WP_NONCE_KEY') );
define( 'AUTH_SALT',        env('WP_AUTH_SALT') );
define( 'SECURE_AUTH_SALT', env('WP_SECURE_AUTH_SALT') );
define( 'LOGGED_IN_SALT',   env('WP_LOGGED_IN_SALT') );
define( 'NONCE_SALT',       env('WP_NONCE_SALT') );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
