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
define( 'DB_NAME', 'beaver' );

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
define( 'AUTH_KEY',         'W=8Gtqv_P(f@,=0R(7wM97srMJR{R^j#c|7S:.ZP|s!9bjS0QZR-`96AX@i_2:bA' );
define( 'SECURE_AUTH_KEY',  'i7{~TJj#jy%=H_Tl(Y9^l|*[H6l.uA^p!%Q)@m;a?(a` aY=lH<S--PU1{{)X w^' );
define( 'LOGGED_IN_KEY',    ',uw2E2RrT=kqKY]gqC>@)Iou6Z;F26uc.w-Iha<6^m= <J?(WL+thgQ7%5FF|<}1' );
define( 'NONCE_KEY',        '|Ox%U)XfzO s{UT2MRj;/R*1f1c2IcKsIcx$12/o_N.SNl+]Bg>QPBgt z f$45{' );
define( 'AUTH_SALT',        'yW;;PU<zEv,X&ekBgk!FVkdl,p2p&/~E;xR@0V]A+0U (Sgk[]TO3E |!m[j942;' );
define( 'SECURE_AUTH_SALT', 'cY::,,*+}nD.%?M,61vh.jUTg(Uft_2KT]1 k-/NzHJ47wO:R,]~,}SmcV1|QPO#' );
define( 'LOGGED_IN_SALT',   '7w^36mSMp6y~Pn`_tAfE+RzaofQlP$0nY^T3Wf)DbM;v&>}OqzCsYll?wr$r:M#^' );
define( 'NONCE_SALT',       'QY}w}n;>L$[^1uMz{R;8WuUdhuO6k3(ZUE|hMOYn$c}!`uvhA|fkprB9g`^}$YU;' );

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
