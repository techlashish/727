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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a|&Oh96VX7}PC@OY*v?47@r^%@(oQS-[d445,;gzQ<qFjwKv?S9X+c[<)(!plbEf' );
define( 'SECURE_AUTH_KEY',  '-Mfs~S65)+t?@_V,#xoHu%*dB732K3--!{P}8bZs]6(gZZ60e;6K})UsJ}BYWXS?' );
define( 'LOGGED_IN_KEY',    'c%*g#}9g.@gT?b_k}*|BQH*(HmnhJYRFm,$*_69uT:U/JiiC+K1%R7N=:tIo^>)k' );
define( 'NONCE_KEY',        '(1.2h`:HmPGIpS;kS*/z::pH.e$yx]0,1W6j?{A9<cW+3>oS:y]`Wx+^Z%PkO+#$' );
define( 'AUTH_SALT',        '{!C6@Hx>/MLI(`0! T`kt9YrVk=p(U}ntyMckj*Sw{66sRwX06NBr19]Ap(P.6{z' );
define( 'SECURE_AUTH_SALT', 'Eib,@Ym%C]HZ*/70o?AkW;N$:/GxlDx>q&SnI]dKZJo~jNXp_Tu_e%Bqr+iZ:b6>' );
define( 'LOGGED_IN_SALT',   'j~Ido58QA,JRP9|V?Y>|_wW6::RIs$~R4^s~>xQ9{0VdXBpJ@:2 5S}5d`5ynUd^' );
define( 'NONCE_SALT',       'vLp[s/bz=5|.>i=r!hX!6bjNu*E<p/z&=,guZQ+:CbLNF2KDN.&m)mX=_G@*}%y`' );

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
