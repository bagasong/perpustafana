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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password asdasd */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '|lepA$WRM_vCk2utskQK92.Pno-x[DL^I/U%A`~^Z|7.LYQy!.dNI.%+W8!b*Qis' );
define( 'SECURE_AUTH_KEY',  'L[1^Alz/XdEse3K>WuzYa5~JhM_IvVz@d985iuMI]<LTQtmyBpx<S62&DppUM}(9' );
define( 'LOGGED_IN_KEY',    'fX0<zb8OY}a&GQPha>j@mM}>>`blpThclUmy/`N8#ZqDHPc%ybM=.yRbrhedgE<u' );
define( 'NONCE_KEY',        'w6jjQ;dzbvG<y/t+PV6w1p&OFcIvQ|xJ~hFV2o*XX8?b02I|s]HOD# >KhX:-:CI' );
define( 'AUTH_SALT',        'EErs6fJ55zE[?^q{=vK`=eD,,m- 3CexL;~4[j30Z_f)->aw}q*t%IQ|Y67WYU* ' );
define( 'SECURE_AUTH_SALT', 'U5&#?. 7$pg=Rib4Y4UF]t3r1H{XR]:H^2$:EQ&N?=XTU!P[[E Nwl=j*1`MAz):' );
define( 'LOGGED_IN_SALT',   'H|iK!aC@V,V<y$)N!pzMV<DUa%sEdk AxCe`+Mw5Vv-jfjI/^{J@Apw60.O.v7jl' );
define( 'NONCE_SALT',       '`?2tdNy`0(|o&ziEy=.(x^$YIGIw5P=#)9$nX?Ue^lF}Im)U/}mJ0_CRpo<hK7G_' );

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
