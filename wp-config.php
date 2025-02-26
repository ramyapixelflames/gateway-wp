<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gateway' );

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
define( 'AUTH_KEY',         'k DvY==eyAAO9z@_nq;Q^gk^~-6cSm)!F<NEN5Xw}*V/+_KB4KkaBfJ>!YTNkT5B' );
define( 'SECURE_AUTH_KEY',  '5T,gEe>pW51y@m`UPHJz5dI.3:a2on[13zGJR2@atsr:g.EC6+C`X0>1H`#5-[/T' );
define( 'LOGGED_IN_KEY',    'B:)^)I-gIMXhN!VCvW.3Jt[KE[W^RuWKPe=Hvi?1y}y1vwz9)@_q-J<w(^NN=wE!' );
define( 'NONCE_KEY',        '[]hB=mukI?pPSg$&z{,TxR0Ob>Y@v?IN|CEflthewx{]Adri&(!IOI2J.l&|n1!_' );
define( 'AUTH_SALT',        '64-WC@WoIWca~GChQ;s`2B;-} X(}^$v@JEuu8=6XF@n!yuO;R^Ekrv6,+Y)=R:T' );
define( 'SECURE_AUTH_SALT', 'F^kS-!1`k1XgJ2`&Y[* C^YxE;[(Me wI;E.)/aZi2~v.e$uGdOWi~plehPt>Du)' );
define( 'LOGGED_IN_SALT',   'W>GOh}B+|2zq,yi`{0xI]1{Cw1Q[HAaXU+x@dBf6U3]?[ERi<~IDv4z^f]HgZvf4' );
define( 'NONCE_SALT',       '/;d9&~=5(4.$=K83D$@x8=A3xRl*6KrEY/?ZsH]eZX:@)|K5E/>zZ!8=QDKL&1nG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
