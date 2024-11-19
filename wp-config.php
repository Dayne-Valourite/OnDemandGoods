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
define( 'DB_NAME', 'OnDemandGoods' );

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
define( 'AUTH_KEY',         'fhrMS<Mq Rc$E93dE{sFB9~:*Eykj]-v<UfQP%&=EF5Sd7P 3ptO1>QM 5e1=o|(' );
define( 'SECURE_AUTH_KEY',  ')+Vc3_-Umcp$^1v4!ciz<j.7d|F&!0ELMD(he 8~N#e+vg*[-$Y}@3x4$x*:Xe(Y' );
define( 'LOGGED_IN_KEY',    'yIYJis#fCTR(vw$i]G;-}gd327*cd&6QOaF+u;j+Zgk|NL)ra_JE}@*j&Zp2C3[-' );
define( 'NONCE_KEY',        '2!2@p@Khtws|Dyl!> ;8e;]}{RF?TaN_:A?1]cC`Ol:&Ps`8HU*q-do3-fpGpQ=8' );
define( 'AUTH_SALT',        'z1SzVBVCg~w@$T:)_h8lH8}FM<Z%/ii1tc- L(D-A-W;4&z2iXS/7Ki]vr|wtrX(' );
define( 'SECURE_AUTH_SALT', '#*L!x0uXNr<*dxQRs/UYze^YlspXz_2*4lY---SQj?F%TQ3Cl (#Xeao#%Et.3rf' );
define( 'LOGGED_IN_SALT',   'lPTd*?@L=sA$:GwZoNn6|Y:QQ.(6<wkQ7K@Q;me~>I3Z,fRSgRt8:2y/7~x0.2^q' );
define( 'NONCE_SALT',       'rTo6#%KRntHjaeU&-2[vq5b>1l::j=^(FFuZQ8Ry=*W67<yCzF4 jX)Gc@ Y)ThD' );

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
