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
define( 'DB_NAME', 'khadija' );

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
define( 'AUTH_KEY',         ']YXCb5!V]K7L16:B0O,v5Ue^@ZPHGVa$McPl.O38*wC8!|F9g7)7uOWSEMt=d,NB' );
define( 'SECURE_AUTH_KEY',  'fPBC}zy7o&bgWI%3+qwt6eSmRsfoB,81qk~WA&#Yh,X1Lxguu|_N$[#}@v9b:$+W' );
define( 'LOGGED_IN_KEY',    'H1sG#&KiIHAN|xwfCQ).RsS/=3a-n(-8=X$r5$^%[#A!R(81zDQ!PFqCd]i>Ya5h' );
define( 'NONCE_KEY',        'G3H&;lG+dLINWT#M_F5CHlxYK.dZ`x*[?jg.`$v1_kcybgQ7pB,In:SauZAfLSfx' );
define( 'AUTH_SALT',        '~k`>S[lwF=1&vC5[Kiw%0k8(3E_BmJ&YIbbqZZ)G7S-r,9%)+!^vLM;1jh |lC?Q' );
define( 'SECURE_AUTH_SALT', 'M&{NqM;U6)>~F-Eab]S@B;A@{+YB>+j? EOjC5nT#Efr!>ugT%v~*nAEQC_1NLG?' );
define( 'LOGGED_IN_SALT',   '%iLLL,%~bhZ97hB*@.p<8n^i%K&ZL9=[X?6hc<joC2bPM[8Q+Y v-M_(.P,#Mkm2' );
define( 'NONCE_SALT',       'XF,vHVa<M&g-18vE*miUGG.#d+NKFxe}d~S%iDzk;%n4iTPA-KiqdM6TlN0:m?lx' );

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
