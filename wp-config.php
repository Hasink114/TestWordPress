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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'a%6[C`xMcRC5.jr65|WHb~NUY Q3aOE2o/#W9=0~Ru56(;!R:1-/y^YDF^8K+!!1' );
define( 'SECURE_AUTH_KEY',  'R)YqG){vO(5:8Me1e8BGS|0lcVN~V0XRuQ!_&0q@VzRHTO2*=A -:zwn=ibQq_gi' );
define( 'LOGGED_IN_KEY',    ';+qY%(_c!,HM=}hCg6LHDXm E0Z!tL?41#K4^GZ&4-/vPC7FwStm)h|(}%Bh}+{ ' );
define( 'NONCE_KEY',        'Y:X(mBQS-mDovaqY`ZQxP/65wj!i,R =[4G1i&gCwe*m;^j9NVx0yOwIp;P^{#~v' );
define( 'AUTH_SALT',        '7]1k8N.`@lA?%-2ub%PHK$-9J~@g=tlk 1wEhhv)<EZZ<}_d`+@qhx~EY%5gX76A' );
define( 'SECURE_AUTH_SALT', '1/3Hq%/oYfC(7DGq**ZuJjzs>l.EetxKg 9sjL&Pe~w#PTu,0<i iP#G6NJ!elJp' );
define( 'LOGGED_IN_SALT',   ')%>R]$N[_FIn4W^j#XA%f1@?-l96IdFbh1iPh4P~A$5Ol*0xWQ0`&HVSkny.7g8*' );
define( 'NONCE_SALT',       'mPx#OcX+~AH/L@UM:dw7C?wM)Lf&Oi8?u}IGUXlf$% a{}(:TW2ZyI-gvq+,~:x]' );

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
