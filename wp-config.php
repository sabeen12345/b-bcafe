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
define( 'DB_NAME', 'bandbcafe' );

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
define( 'AUTH_KEY',         'OaY&TY&us%[c>t:jUe95q_|D l}Nd&@-g{v]9^2:Th6!s[<Xli|ni#81_#&p6b]V' );
define( 'SECURE_AUTH_KEY',  '9#.w_fY}b6d)>Jw%cr?kY5tA@q?#TlAwL;}>KH&4s!dS|][d54TrnlPLOg?*XVJy' );
define( 'LOGGED_IN_KEY',    'S6_$gR|^KfKu8e/P`%zAR$p/AA}:X7.m?S[yQ(T7hq1o*NrQgws.zVhZdcoPIJ4~' );
define( 'NONCE_KEY',        'T$4@nMy#QHReK.fk_I2dz=]q*boD9Kbyycp7[<h#)p_onHKKT`&eq~V*x0rpeB<v' );
define( 'AUTH_SALT',        'eJ|JE6X_{5uMj^NlDyQ ^YDy:AwFG`#xnu07xvY&u9DlhKengT/@!v#-zu>=A~K)' );
define( 'SECURE_AUTH_SALT', 'v ovyEcDp@#?^Ea.E6yF_Y.X<.;%V=2Y!I7dOFK-2ExGmH.MM%IU~qHjI!;X2!;,' );
define( 'LOGGED_IN_SALT',   'p/@:B#5,9_UMzf?u7|7GT$2*<QCoRYrJ]ec?6(D#S6GyAj~{SD-tauuRI6UX2-pK' );
define( 'NONCE_SALT',       'CU{3?UDx_2?.U[>7c=p{llqi[EyDw?^Csf}lAiDreS!&U99*wTNnr hj%AH4283#' );

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
