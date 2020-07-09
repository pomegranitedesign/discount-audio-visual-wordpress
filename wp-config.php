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
define( 'DB_NAME', 'prestashop-dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'stL/;mHqBCYsn:jq_zV[Poe^d!jnGDYwE{Gcqm{g5+ef8SG4os73*d+l#jkpewzW' );
define( 'SECURE_AUTH_KEY',  '=La1ykoPT&Ed.Ztk:lnN^9iFB_kT/mb(ctp[vAL>Y&QWC{vnOI<jeqSr0Ek,7dir' );
define( 'LOGGED_IN_KEY',    '7DGnXh~&7xz565/!B#?L/uK?srA lwnrXHdKl_~QaO_;ChTJDo;`~(]RN;:-<zns' );
define( 'NONCE_KEY',        '7LJ{;go}3P=-hgCJ6&5NJ67`0 Z5@TT4k; ;zRL{#z(iz3N@eCVKIB9l;cP*dF/$' );
define( 'AUTH_SALT',        '+7SrIE@R3@Ao0NJeo4PvfW5W_n+!Zdwc[]i@&&_,T@wT?eC[b0|nP?`In0/3e%5F' );
define( 'SECURE_AUTH_SALT', 'Yx4ljdNH8Y}qr 8z^f$%yHF7M<VG^|M{g3s~3* A=e=I|cmYk:jT!zP>~`LPENFP' );
define( 'LOGGED_IN_SALT',   '#A!!ZnO~wXU]@xVng}x_nzOXkO9_d|;BY@>zDHuYm$p$pr:xu-due<u#.O.R2;Je' );
define( 'NONCE_SALT',       'c3%(]eU.l{!u?R1%6N=+Ag5%l[&[.J`F?;qLlzR,zCzM$kl(@Ltq|9lVpg66x0i*' );

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
