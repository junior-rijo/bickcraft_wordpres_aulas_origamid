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
define('AUTH_KEY',         'VeXwFhnqf4d2PWhKStxofNv/Miha2N6IB1jIP+RkNoei+GBKzhoxAsuWZzQogzpgI7kWbkAQZvNto6O2xVyHTQ==');
define('SECURE_AUTH_KEY',  'NIgqTCLGEUd/9iRcp+AyMEduSMUvV5tPKsvKuOyL5ewoRSu2qOqwqx3edhQWLbEkgbl75muXO4K+5ywFLWjP9w==');
define('LOGGED_IN_KEY',    'dAnGFtDCnGrYPAy18xYJKjlblbzEVaz9CPFF7CKHZ4Qw+vQVZvuLapTYDmj2aVG4KVRVwMeMuIcanPpXqRp7eg==');
define('NONCE_KEY',        'NkH5bsAai/swseIoUSiWioWuOv8c0pwjMXgelseamo8VS0e3dZKmeltzLGKzwHgT0Ts7qED43B3vAsWhLKTkYw==');
define('AUTH_SALT',        '16naKYjBs04H+6e9Wma+GR3abkC8Ty2Gx7L/M/rFqHnHLZw/jfcpCVYp3v7bDBupLYsZPeYjBJ2qr1ifQot+Jw==');
define('SECURE_AUTH_SALT', 'Bxh84F+3egDEz541gDdjkKZCmbNIj3Fqqz711/7gIkUEMjJ42suy5I4bg8rSvnUWwc77DsoDzLEMb1/82z34hA==');
define('LOGGED_IN_SALT',   'pob7Od766Tu8cDqH86N856QVoujcUYXkJuCuID9i9Q8tF1pN2sTovyKCZANuoqQeT2IzurzwupZSDWocb7RC0Q==');
define('NONCE_SALT',       'kneeTAYbFViavvZ7SmF70TaprLZqr3EqTDPxF/mWcC5fssbS8VA1lanL+kCAJSgK+qKnnpfC1Vlb+yU1oBz8Zg==');

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
