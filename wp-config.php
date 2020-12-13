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
define( 'DB_NAME', 'avdevs' );

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
define( 'AUTH_KEY',         'YszAkE6/N{%~sSFT}~V2Pl@ZOdRq(F4+{$%1K&;Nln LAlZ^RZKq017l3Gy1 UK{' );
define( 'SECURE_AUTH_KEY',  '4&zp|^D~gvDX(`?_A0GdOXeC/mis$}k_vdVfqoNTukR5OaB*)NYzij@#n2%85%Fv' );
define( 'LOGGED_IN_KEY',    '7|QI^IURQ/7RU3P=A&2vO#hA8N:f;j~i)KI`< ^z.%l|lNQ5={#L6XNIMOJ4{75-' );
define( 'NONCE_KEY',        '9hE8B#jZLX!mGTa@YSgC^P}Kom~HxlN|a&7kd:H9[dvg#c#{W[Azun2geZ#0l?%T' );
define( 'AUTH_SALT',        'eACRD1C|+;+?~<Mx*$5Yge1*:]zYOePsf_ga8da^P3:9gt CPe+yu Mw/+qg=</h' );
define( 'SECURE_AUTH_SALT', 'E7-miK*{EkVJv@*4%-:#a|Z#> xut WksZL{4q|yx[Q*W+[cK%ohN}Y~XxVmS;u<' );
define( 'LOGGED_IN_SALT',   '1rS#ee1Oe6&m@cZ]]s$(hk03CfoWy}.~t~J}1M3q5h%ucxAKs/of#9@Or{3j&ZC%' );
define( 'NONCE_SALT',       'zb*RQ?HV:6dUVR5V(GbuR<`> /D mIHbCIb#<n1C[Ljk3;c6vfWId^X;JJS{1e$E' );

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
