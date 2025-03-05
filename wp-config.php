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
define( 'DB_NAME', 'newsetup' );

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
define( 'AUTH_KEY',         'dnD/bTj~JOI.6jv^6aV*?XC@_*@r[{,s:2;zR5]h-==~mVoyCH{TkFmw0>@Im[UC' );
define( 'SECURE_AUTH_KEY',  'nu,$rKl)B8Vtt,Qf!DaT(3_`eb`@dpImuV@&?V?SOR)s{%lYB%bJd2;tzoh[^vCD' );
define( 'LOGGED_IN_KEY',    'Z(=A:/io`>!iNOQX3iX#@7i`$4S >/uH;y9TfqhPI0:&tVW6(H*Oxb<W(]w^|3)-' );
define( 'NONCE_KEY',        '2V1W_Fd]WV~3gIqS{Y4Sn#fsL?,0g36pezov@!!7sqv_#L.eC_qrLBqeYcFLZWr#' );
define( 'AUTH_SALT',        '?`@s)umdRl3P;[qW PHtp,x?yr!q-@=K^TV. qtHNX?rL[3~F:;v2YQ;/dp2X+oQ' );
define( 'SECURE_AUTH_SALT', 'SZw5P<g2Om{<{5x<dI^MH?9xiDdD5rT!ArcOlq])J6D)0S}g%O5`RKz:K<?(dWsu' );
define( 'LOGGED_IN_SALT',   'yVeH2,lV4mM2k1M_QLF{p!+e.[8qwk?q?.V]zinW@1QC}n}iOiWD4Io2G|?EebLm' );
define( 'NONCE_SALT',       '}V0R-KynGQ4og{jMV~9<eoKIUlF25&3-@BHEzJ$K^oYpU-/Ie - 5FI4[u:Ps%>d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
