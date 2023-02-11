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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site1' );

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
define( 'AUTH_KEY',         '`XC-X0Vf)4NV4rgId;r{,zzB1j$7<>1w^wu2G?/$iMm?A_6%IoT:Xbbm$Hxz@uzC' );
define( 'SECURE_AUTH_KEY',  'iy}> 5[R|*`JWJUq Kh6du&^+.C@PD)P%C%8_v`{C_<Yv<hhE_0Va&Y<krMx*>)E' );
define( 'LOGGED_IN_KEY',    '_BT`oxPMHN_LA 8`H8DbGRU<F|c`/qqr+HzKhsI-q$(RO|x@R.|@Tj&%?ph~#Pjq' );
define( 'NONCE_KEY',        'Iz=!:$-#(FnigrCE9-FM8~-i1PQacatQ6`6I9fMk7H4+~!rxgT<<w]R izaz!h:{' );
define( 'AUTH_SALT',        'AEkO>*qv}5/+M$bzdJXs%K0F]r}KQ1GMppc9QFf[.~jS%VMkUL9eP>A<hW<u]r-d' );
define( 'SECURE_AUTH_SALT', 'c%]aK;Z<V$XYgCZ{k~DSMLL}EWz!#!e$i$$Fa*>x-3um#9M]W2c}L?TXh2x2kW??' );
define( 'LOGGED_IN_SALT',   'l}6r,EL:8RV}Y5)j,9/`ufs/RmBbEMc=+<e):VD( :gXS<LO+>;Xheg#8QY[z3E;' );
define( 'NONCE_SALT',       '-=t>u^lK@OM(]]cJn7b+(BGC@A-U;vV..h[xbN6z0j#12A^()aGgfqa[>)7r7~A[' );

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
