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
define( 'DB_NAME', 'kasuniportfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '?Pn19{[V8UDRE{+q`b@=uTH8kSLaV|nETu]ZuaI)C7GTg|5<2?!#~f0stSU:EOl,' );
define( 'SECURE_AUTH_KEY',  'cYd1==A*}~X6@SZmf:i~Z+dZ7yUFuE|_W@zFd/M~~;B%AS<)no+.?CV,}WfpdK:?' );
define( 'LOGGED_IN_KEY',    'KVIXb;Q80yjAA0f+V*O2[)shcm/pO7Z*b9!-Z@j!=/jWbLqr8-2qn$m=;HB41GEs' );
define( 'NONCE_KEY',        'WyrroQ]Fc?px&t)N1w2= !n:k5{mZq:3?E]E9q6p8&1>`6i:D?CpQ?/EIiwL?PLF' );
define( 'AUTH_SALT',        'nhL,r,Nn!&k06TJkVAPB%xFnBz5khw`{-H51KWKvr_X638(2[9e&R$;ka`2U<:%*' );
define( 'SECURE_AUTH_SALT', '8H==s-X~2*W2V~5A0AN&P@nT,^aw$bU,YGC#`DJ520*.p%n9_b,21;J}#2{27n$d' );
define( 'LOGGED_IN_SALT',   'mRA4dQ~tQS{F.p0|krO,77u0<qsG5}_ZI7K{Z5tJDOltrW{4qptC/g58)60pb-Jd' );
define( 'NONCE_SALT',       'wY?9|V|}C]I^4^w+e6.*,z&THiCWM KlmD,i<s*dJEYl1%hx1p$d1*e:*OgX Ucl' );

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
