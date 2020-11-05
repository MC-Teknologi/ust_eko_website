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
define( 'DB_NAME', 'bayt-al-fath' );

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
define( 'AUTH_KEY',         'R}W_@v,]jY[Av99r?4n5rE.4b2p4PoVxoaybHQNPydik:1hIOeGNZm`D8%VE:BRG' );
define( 'SECURE_AUTH_KEY',  '*LJ&6REO(8xz#w%?ppH){[@L*Sr4[M;,u@q8@Qq v^pkamf2p?9N&z{C$?Tf@1>k' );
define( 'LOGGED_IN_KEY',    '{IxT*_HzqdCr>6Y#4md-P.b06ObK8wi9&!PWW W]em.L22ydON~*)(u-,OS@S1F`' );
define( 'NONCE_KEY',        'yrZ8qh%onu3JpF2X8vYb8[UtJ+eHkCj9]ll>+3WPO_Tq:k.,}F&=cczf8HfQ*I*F' );
define( 'AUTH_SALT',        'i!?w1iy#$1zBzB- w3eUd;M_%F8w&rLt;7(@WzSC#_.N^]3l@1FFo/IsVO9Y0R`#' );
define( 'SECURE_AUTH_SALT', 'HX)$5sLIKV1!E>HwpnV|D](20u(={W{w#?u|EKunLpVM*]w6Hd:ffZm5RD#80z*N' );
define( 'LOGGED_IN_SALT',   'IEjI$s~Ii<{k#gC {4Bji.yDf@IBk)|k1=.ZDTp92nYA^~ib],ubpiF7F=@{=`DU' );
define( 'NONCE_SALT',       'O,z_m Jkb:Vc] [t)_Qu04hl,KU)L!|4/KW8t`o=bfz) 49d@uA>G g}O&13Dydm' );

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
