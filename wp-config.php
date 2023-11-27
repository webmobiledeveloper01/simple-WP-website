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
define( 'DB_NAME', 'onepage' );

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
define( 'AUTH_KEY',         '}bsAWkorj&I/7[O&ySE+X{Rugz i/8~d(cCH)m Ns5zBt[kx 6,@4>[O0LOS1=&0' );
define( 'SECURE_AUTH_KEY',  '~%=|zNNb`~(u:;PJ;rGfLHU{7A?zn;=pJj;h2:k%YSTbn@8$qSEI#zj(*XKCv%n`' );
define( 'LOGGED_IN_KEY',    '3Ix.,[!*FF85t3Yo?<<Hog5+#2f=UD<P/1jc]0KW[y)tU.^Ef/Uzr2lHS4+t%=^E' );
define( 'NONCE_KEY',        '?*KM<]Vyu?!?J7<c:7{j?$ebt`IPm6R#X}hW-gIH_G4`{aD|qO`a&#yjGBa$e#+`' );
define( 'AUTH_SALT',        'S=Gu>gjXo,*;HW0Z=1,W7O)/5T^vxL;X8S[.BXaPXbJ3=R%;yz u^&qel{5dvlg<' );
define( 'SECURE_AUTH_SALT', 'oU{[^i-N0TK?!.0z$!=rhL<B`(|Q~enX{A.Nq@I.etVLqh,AnOT2zzLp#a7911O9' );
define( 'LOGGED_IN_SALT',   'RG(3e{=[,~O0F Ol|Q??eh+JF7r$UzWReg%*^8p9,<4EZY@Hk`/H%ZT(|2Bl >A?' );
define( 'NONCE_SALT',       '9)Qn-AVqvd?{.iPYSd_M eHtV`XH5ssPS=!{k%@$`LOwH>~a5ya%Th;OuAIyeMUo' );

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
