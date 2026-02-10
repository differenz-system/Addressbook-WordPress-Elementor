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
define( 'DB_NAME', 'addressbook-wordpress-elementor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'DB_Password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         '-!G?k#rz]n9`-D0fw4y[[S`XL}08i_;Ztd!l>)30L4:$22>WY/JJ;$V.(ilt!<hy' );
define( 'SECURE_AUTH_KEY',  ',2MwG#p0@d@V>HSx>HM_N;5r;U#4J~=C1]Y*p{P42SGm$3)udSlo*r9O 5dl#n(Z' );
define( 'LOGGED_IN_KEY',    'TkjEVlFc>6B5vIT/g{C^jHM#rdHp6(.U$B2oOaMPP@$rS!YC$vf=Rqsiz+3;aEw%' );
define( 'NONCE_KEY',        '&2&;}O]Ls!:7?40)$b/fCN7Rsv$#+s-6`(5(H4:jR8#~19l1Bhn>?.@DZD@)]wX(' );
define( 'AUTH_SALT',        'a]m+u[d/`bd~ a&11oPy2{*}syAaFEctHP1T,DSgUD~b%||Q+hb*R)lK5gjp+xw0' );
define( 'SECURE_AUTH_SALT', 'N]2d!1|JFO,.SM}p+~/a^~cDCsqF cl!Al`LArF>aT8<^f:[q_ct{CC([ps~Oz(.' );
define( 'LOGGED_IN_SALT',   ']t~MBZk[gKrZBR_:i4WS{ loS9yiQ=>xe{!AvMm3te;b)MquEc`3AgAJ/j)ECF8,' );
define( 'NONCE_SALT',       ']y#<qclTg=PaLo[x!;[qnpX`u&ZrCFrvZPRi^IFtZh<p2nY$<li|4/uT%W[Bc5(_' );

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
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
