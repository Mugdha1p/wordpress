<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'azuser' );

/** Database password */
define( 'DB_PASSWORD', 'ASDFG@12345' );

/** Database hostname */
define( 'DB_HOST', 'databaseowp.mysql.database.azure.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'I*}QVZsZn]G;+KqA@bspO9.kP$k3G^M~w_A6@#Q!M&~->Oy*C?l2qrNdy:N8s {Z' );
define( 'SECURE_AUTH_KEY',  'fFt.WM6!,jeY`<M5SZ9u&5rsH?+Rj22M/IWW/x-$~krhP9@M%otRppOf@C`DVw{y' );
define( 'LOGGED_IN_KEY',    'E {K%#&}{*Z6^m4dj;:_R?}n+PVy>=jg~3=KtvfS:Z0VJVG>?3fn>?&]}wbj@`<e' );
define( 'NONCE_KEY',        '^ksn1`eA!zg_VB~4{$%%Wg?li)^)0P%ZsPh ``f .&PF>ReD8Ty08Av.$7z-KL,Y' );
define( 'AUTH_SALT',        '2{_6(:O( D~o)ir`L6)9V#_^E9qTK0vty/jy8 aHlZ!SCV|O<195qpNfR$;CFxr<' );
define( 'SECURE_AUTH_SALT', 'rW7#0%IDODLM0T=4h7i-~A],>=bH3mR6hy_|f?Is8U<IOe%JPjexw$#m(w6.K.[,' );
define( 'LOGGED_IN_SALT',   'zPiAe<wqEA|*C$qP[2cFM=JN4_eg&h6x!TH]G8wEoj12+`b5GmZ3pJoq.7<?~np(' );
define( 'NONCE_SALT',       'a@I~U,Ka*w-W4FyqMpJ6PZu@J5Bh03^U!uv8{N3{N|lK-p3QYmexCn XL()D,sra' );

/**#@-*/

/**
 * WordPress database table prefix.
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
