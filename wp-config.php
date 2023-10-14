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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'downhill' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gwZom~Wg_b}nzYUme<=xf#E(?oFkDVU>q8cyT8xObNA2*A-Vi?kl8=g]Px ?cqg.' );
define( 'SECURE_AUTH_KEY',  'fw+${)VOn5aeN&]~[Dlr.* [u:}wIG!!&G]s:Qhx<HLooYL$@zc2XxexFbP7Rl.]' );
define( 'LOGGED_IN_KEY',    '~Fqq:KN#ieJSvky:=Vut8?GY^FmGm6vWT?n*@mSt&0$x|dQbMpI:rD+&egf_b]Y]' );
define( 'NONCE_KEY',        ':=4H^GKbHD^u)a@C0OBc-`o_pp@[HnV8#>wDcNh)M.2[b&P]L?u-+mT?]L0S3@4n' );
define( 'AUTH_SALT',        '/Cb6V.V-y+&ga@m$97c&x8OV}VSksc%@lB,_orAcQokAN$SG7B3WRc,)mNs|v9[Y' );
define( 'SECURE_AUTH_SALT', '(qfpis+wWYxEHU,UAPXmh>?66E1shZh=r4D63*C}=Cz770|PE&F}FF&V)E,y(tNp' );
define( 'LOGGED_IN_SALT',   'TI<O-`gT~mxHz2v)ov|{<ttx=h-mWpC5-0ktwafe$fkt+_$0qON);!Ty&mR_5CpJ' );
define( 'NONCE_SALT',       '+-|R`ZOQ{X9d&~J5v*gT^ah4RZ6r[.oUCrt&9q9)6%%,0Tmc%55Bb+/pSO]0RLCS' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
