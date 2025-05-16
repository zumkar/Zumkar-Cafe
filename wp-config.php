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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '[OW0Z,J{&DFx|}3Q(p&%!{u0l#1pn/fA>M,s_4~(Rc6]Kbf,[YlL(<)i`Pv9z(}X' );
define( 'SECURE_AUTH_KEY',   'fD3mAfw!?,OIvUQ+/PKO9^q:qblCb4Ff@[zER5duxus_A(g%Kni+]QjkYov~>V;d' );
define( 'LOGGED_IN_KEY',     'l0hmZe32y QF3By9%eh_o3V7f*$d{X-_]AnVLMn:NlzV*1^2:]75w[r}0tdF&w`w' );
define( 'NONCE_KEY',         'ib2eIHJO@pw%Z4RUD/.]~#])$YmV1eVp!&w8;tYu 36IVux3<}Z(>*[&WNATn/#w' );
define( 'AUTH_SALT',         '^U#w(qk;R+w>*bXCoOMAd-c^BVr`fi7ZHkxU#lvZPDuhNY%pp(r[]5)b`YEw)(aG' );
define( 'SECURE_AUTH_SALT',  'o%-JlY<~CKzA??%%R8<-l[?U*BoOW0CkoGn!FLu*zES=3Y*4=B5Q&!A/F$S]~w8K' );
define( 'LOGGED_IN_SALT',    '6Kn<e%L*[or4xGT6^g1~RFC|+QiE4|IJjmzUDaq>t-aA}Ykx&eo#6dAAIsG6ysJ$' );
define( 'NONCE_SALT',        'Z!JmhD/^&1PMX@~<F:eh|7{v3Ox!TnMbV(<3n?:`vttwvL+ke*`9vF3lg{-s?D&D' );
define( 'WP_CACHE_KEY_SALT', 'i;mD-I)pm8Vlt|Tz@?%=zA,uJ69Z[2aOg6zY-V3q[3Sf++_](_[^T1v5b,>qczZC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
