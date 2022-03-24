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
define( 'DB_NAME', 'escape-room-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'aa235553756' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aa035241568' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ku(nw=t6-jOq-*C>VkRmMS9ULD^%RUR+fK)ZQ pq3!45|ZPI:XKVAGZ^?Vni2::8' );
define( 'SECURE_AUTH_KEY',  'EaYg$F3E3;/gGXWi Cr?>u;]{KdN^m>@Hg-8nW:-fC[kW/yNi1},KIdO8u= ,,S~' );
define( 'LOGGED_IN_KEY',    ':sq]34v$wCR=FJJZ0v*@9IH]-hsnXBqbSmTiD#1Oux(WPL4A97C.9P6!FD8;%Ep5' );
define( 'NONCE_KEY',        'f<>g==z*93*34|EQZfCyWyp~s:hI0hdYWr$to`o7OicSvdi>Pr0H.xgIn);+xb}*' );
define( 'AUTH_SALT',        ':;X9|j>Uv5ry)yMC+XgpUav`!vF82gNwXKY$#fM:<}d@E!(chp*`;l80E}4AV11J' );
define( 'SECURE_AUTH_SALT', 'FkJ;7B@e)13JovVN}v1~qy1676v%j9m+QXXSkxh/~KN%R%?sCR.|JDX7?R5%ujqh' );
define( 'LOGGED_IN_SALT',   'gJ1V?lyUzZfjDuYZq5|QT*LX,@vRmA-0^&ZU|E]dCb^6a$4i$~Eo#,pYJ9:lpGU)' );
define( 'NONCE_SALT',       'AHIdnFO=CHBR2}ZNmkXu?I(+J1U^E? #4q,@y:.GLkA^vkm3k 2sbI%#@*&oO[v;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
