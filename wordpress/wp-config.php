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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'bVh02%&aA>4=JW`og[.^# pxSZ=w~3Y(>T)]f4f !UW71UctU]}s)bUz9u;/@a%2' );
define( 'SECURE_AUTH_KEY',  ':i;6os[ 8Oyj)c4oj4q9X~O!X&q)sWFy)9O/`@O Ypo)v_{JUt!orawyJIG`}Mz]' );
define( 'LOGGED_IN_KEY',    'h8H$PO/?SdlsqU5daVLv*VxN+f#RYCpxm}P?C2C4,$4xsvg64.$has@-jC,y>It)' );
define( 'NONCE_KEY',        '%xeACOIBI0,i*qvUGh,4K?JW1QK3VeG1@ cdb[ki4FR22SY$SNZB?m4T-3M:J81]' );
define( 'AUTH_SALT',        'D@C%`9VovKO&9d3_15#}iXLCl4hH!I:Kr>|^q{|F(2VRY`^GI! BqxY;jvISrwSE' );
define( 'SECURE_AUTH_SALT', 'H`aK#7*$SHz:%BZFnvz.9U>8=~}/wO7tM>aD}ooA]! .]#oMYCdzP[yCiQ;r<,Hc' );
define( 'LOGGED_IN_SALT',   'gCcuHT65n`7*_:}~T#rn90O=qzO4s4gCJTGS3PkZ^B2@pOVALIvan3ejf&a7v_|g' );
define( 'NONCE_SALT',       ' J.K@bo2~$2(Iz{JsV{={Q^F5#U2;}7|T>9f@!(h`/3l^bACtHc>S@y@qJ(I-f~U' );

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
