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
define( 'DB_NAME', 'b2025_mazunin' );

/** Database username */
define( 'DB_USER', 'ares' );

/** Database password */
define( 'DB_PASSWORD', 'ovcyh97lSIv4zCQokEVbmifc68gprgK1' );

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
define( 'AUTH_KEY',         '24mf$i{uRxApAxjF8?!?FNb]%+>H,D}@P)=5bL_{ !.=jF.rv-d*JZV8><;fBBu>' );
define( 'SECURE_AUTH_KEY',  '[>!7))w@diiw^{ZP!~$B?xd95Y:] 6zSP${Q~B8]Sw)od/o3{Tjcwv:@Z(;(.2P[' );
define( 'LOGGED_IN_KEY',    'xjZdtri;XhtNHM3l%O;7hI39j94-[rlw!k @r~kZwxgQ1_[]gS8D*vDe?cit`%4>' );
define( 'NONCE_KEY',        'KF;thP2*I.O`oWbcE=7fipqW,CTAjQbGRLGLbyFo3&@Kx,z{,ndQ>S1Z$J`5K]o-' );
define( 'AUTH_SALT',        'U~VX(/M1X%F97Dp:lfbbT75gdpdM+fG5gSCnW1jZKS:IZ1m*AP@#3>SZWqx8qrj3' );
define( 'SECURE_AUTH_SALT', 's-6=f6C}:X4+Qm?78WpdTv!R/MrHoiWH2YT%vq7P][r1~r.^?-)o^m2E?JdfGJbT' );
define( 'LOGGED_IN_SALT',   'S[A:Qa86y?NUQJ=YR(51u>0BTfsh8Pti1iA:gD1(w~%%V-<!Fw7JMP;9l9eBN$`^' );
define( 'NONCE_SALT',       'Ajn%T8LtQ?Ef]|L4UUW={^I%I%V.b)iyGDdhsWEI,VC&+jtho9gTtKSEKj-{nMVx' );

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
