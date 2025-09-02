<?php
/**
 * The base configuration for WordPress
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link https://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 */

// ** MySQL settings ** //
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts. ** //
define('AUTH_KEY',         'pon-aqui-una-clave');
define('SECURE_AUTH_KEY',  'pon-aqui-otra');
define('LOGGED_IN_KEY',    'pon-aqui-otra');
define('NONCE_KEY',        'pon-aqui-otra');
define('AUTH_SALT',        'pon-aqui-otra');
define('SECURE_AUTH_SALT', 'pon-aqui-otra');
define('LOGGED_IN_SALT',   'pon-aqui-otra');
define('NONCE_SALT',       'pon-aqui-otra');

/**
 * WordPress Database Table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
