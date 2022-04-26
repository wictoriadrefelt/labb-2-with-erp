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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'labb-2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'TpmBiLTZ%/6wdF:=dNB$ui$vFIDSNB~dpzZ&odD+coS}r&RAM$0.-0Y[(S-6_n#=' );
define( 'SECURE_AUTH_KEY',  '84HLIfBaPVo27F]|.oI^eox-,%&SQGL4gl+<fCnkkWMBY|)zrLGm]7`<>TdeV$%j' );
define( 'LOGGED_IN_KEY',    'Olonft}#+)m<Z&D_( |oPUg+(j@HzC<`m?ofDzz@.U|B %aC @]?,) f0s[~(M<w' );
define( 'NONCE_KEY',        '.%1o4t;x!Mb9(6RW7H<@o>/m#!S#bY6IOAfT1PqpvltGyl[$hC*,b_KCMV;xMZ^<' );
define( 'AUTH_SALT',        '!sH#V`i:dor-OyC7sWoMr E$BI3TXkdUpG!(B.F1QKJI0Rz~~*G_TsUEWVRp=@*w' );
define( 'SECURE_AUTH_SALT', 'erdHQ]K5?u)!=:>H`UvAU%G80EO8;QZ(HJI3Uuma<e3]R74N:;^Y&.&+)M$Yr-sx' );
define( 'LOGGED_IN_SALT',   '{(CroX[l9!51/HuL;5H,m=v3_A}k18](cqM6,{CuRbI(f wS1z?9+T(>~/^)cT@H' );
define( 'NONCE_SALT',       'o{2+j(4l<Jdz1Q4}K&}%{i-lg #q5Dy;Q0,<Fvp0Ao%tkK`quN4B!tWidvSd`>p#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
