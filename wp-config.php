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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpp57' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u^?:Yn0lQSPSyAEj-@)jk-dvFSBp{}*+U|}p<iR/ua-1XvTY$oCN*:;><-}h-8zp' );
define( 'SECURE_AUTH_KEY',  'E<^2Tt5}+Ry=Xgg.xyq)tg+M!4f%HN%mAZtlnm`r}E=5Ee4(B!dPc]hGnm6o|>;~' );
define( 'LOGGED_IN_KEY',    '!)plA%n~.g5nvOoDe[=$*YmqtVBK!f(L4z7GKa1}e,huAyJq~p9F!/%j5^gpNV 0' );
define( 'NONCE_KEY',        'Ji#!ack81J;:u0a35Tj9F)OK<.Q&$9a3z;m<OR;FY@KC9hYswW$KT1vAQrLWY>o~' );
define( 'AUTH_SALT',        '|pb/$c(&$W9]?[>Wo$7x3A+f?_Wh_OSFP.n3IsHDz.FXc!%NNz-^LEOv@/]V/XWn' );
define( 'SECURE_AUTH_SALT', 'p7;&)iR,Kk]>z/@^r}PiWlL6P^+Jrf0+_I-<jLkySDJ6#I?>;{IJ9iJr,&$nw&CV' );
define( 'LOGGED_IN_SALT',   'an#Ukl|UEX<+h>!K0Wp^+WA8V#;<TmJ=k`4p4CiN@%c(0&QCO}E`[BWOx:IuZ6ov' );
define( 'NONCE_SALT',       'f9KtY8Uy9d<OF>+=2rtU85Fs&?`ko;(&<]&@C%(H{M3.y:)a}}zlxGZI43=cL}*y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
