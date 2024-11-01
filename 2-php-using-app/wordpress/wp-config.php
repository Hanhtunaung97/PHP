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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'hha' );

/** Database password */
define( 'DB_PASSWORD', 'hanhtunaung97' );

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
define( 'AUTH_KEY',         ']@mMA+$*p(7&y>{9TpExRg].hlsJ6K<.w2O_$>]lA+D=iOl0&_!N6iD)]PZvj%]L' );
define( 'SECURE_AUTH_KEY',  'xA0N^D++|~/)k7C844(O8/]0OhG!;yIvMwN!D!d.fp!]c5x3#9J:CUe!) Y/o!2K' );
define( 'LOGGED_IN_KEY',    'E9G=mHd5yx9c0b?3r[n5M*P{0,8AghNI0@$}q4.YZBeH,<LyO%Jt>h=z|GRZOYp3' );
define( 'NONCE_KEY',        'H,/C=5%M#[1dsC[fA[TRClu(O7*# Aq&7ke[9:=4d&g* Kd:!jFC#<xGvP!zeP<|' );
define( 'AUTH_SALT',        'cDlN+1.(p&MN&sv5~XKSk=9yF%d3)j}Z=wr!w^<oJ61`l+v%9u)t*&].$K/o*i<R' );
define( 'SECURE_AUTH_SALT', 'AVh(>a84jOvE kLc=Sa7h<yQXo:ajV7?(Y S#DWW0V-4u`Fd+XW)K5K(]?$Z6ccz' );
define( 'LOGGED_IN_SALT',   'Q$i=*|>A+06H)rnb>F[2az>XE[wcFpy7n;iH-u(gXyH$y(VW4S@9U4;e L&2c8!4' );
define( 'NONCE_SALT',       '@z[t{M=,/^*0c?nmPF5GC9_I8(J(`zlZkc[l5bq!7Q{eQPkl?g#n599)oO_[l&V$' );

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
