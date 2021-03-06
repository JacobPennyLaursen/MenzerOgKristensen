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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'camillakoch_dk' );

/** MySQL database username */
define( 'DB_USER', 'camillakoch_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'JCi4eC5A3wSWZnQ74yaywBzv' );

/** MySQL hostname */
define( 'DB_HOST', 'camillakoch.dk.mysql' );

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
define( 'AUTH_KEY',         'VqqOunvubbKRwJ+~Fp*>Z[o*Y,>fDRPk7cY2^T&,P&A(ed(@TUeUQB~.hN`dWH7q' );
define( 'SECURE_AUTH_KEY',  '.js}gm#CQEkWk!XtFb?5*fsba0*mCQG;fB06:[)}>0+v}@DMsTi{]-^uYGBa@Pon' );
define( 'LOGGED_IN_KEY',    ' 6|UhYgX=L^}T1h2h]s!G^6yF:|/8KtwHOS[;LmDO5<U[(!tnnd/E)X$3 x(*X$U' );
define( 'NONCE_KEY',        'zjEAhAt]sZ._,HudPudZQVo~<]N~54U:8EvJ(Xcw{Ur5S!61>*FjZ|B,#c,xN;D>' );
define( 'AUTH_SALT',        '$2*sPSo^h$iv3JRg+WR]&g3v){)XalM%#>k:%Z!x i>/aIgdXaQA`Q/=#N@wXB}E' );
define( 'SECURE_AUTH_SALT', 'U0o7SDCV9BA[qZ|gd1N`l[Jz )AG`%3O-%v;mry}^VRX7c!M2?mQghJk[t4%3k>_' );
define( 'LOGGED_IN_SALT',   'z<G7D}SX$l>68gBJZJ K9~9R^{1>@Opcx$[]m+qQYUDK6O_CgGV?u<GDK`kL,XiH' );
define( 'NONCE_SALT',       '>I[?zI%+4^Dmq<vZz7NM1qpppk4uG8K~H9:b:7Fxf)B=bTvxHj/#|<__[$Sd{6uh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_menzer';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
