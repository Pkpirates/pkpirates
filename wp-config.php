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
define( 'DB_NAME', 'pkpirates' );

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
define( 'AUTH_KEY',         'Qun*1EWz&?-%GEh.5PJE.0f~ln0YWH<k@!ceuDX.skSQs]^4U onkUB|sb8,l`pz' );
define( 'SECURE_AUTH_KEY',  ':~^7sm+P@ihBw9H*,4hl>-&)A})$n!mfs-AS0JU%_*c:8`!:zz!nH|D|^[&y@g9n' );
define( 'LOGGED_IN_KEY',    'M]Ki.vuM.F~x)iK@nJU,VOJw;u~E:]DuXbY?P27YpB3g^tD-5Sr4/~64YN,bBJ(p' );
define( 'NONCE_KEY',        '8Y9xVR}$6~u2jNUEiu]xT_~?|Q@LKme#7~.y;Z4mG;^3[_&$=<KnYFvJng&30f#_' );
define( 'AUTH_SALT',        '31#P{I4k}I7Wk6fLT~m]j2_G|bb*`1>+7?lu%%p6*V:BJo73(lk+n;t!k_k_,~rN' );
define( 'SECURE_AUTH_SALT', 'm9L^h=s8 +|{ee{OiWTji52~ }[<[y ptYjow#|ohR&#KB6{Bt[ma>S.WD*6fg,-' );
define( 'LOGGED_IN_SALT',   's?l=`+.Z]ymBaH+>ZK9!b4L(.*/OAoXB|9(}AH`t/k4pTVpab|i19htmWE[DHY@9' );
define( 'NONCE_SALT',       't>k|*{=V#a;JhPoZ&,)5OLh,|9[4V}1.bl[>Ej*0[ `P RuWbzO]IdB$J?!w&@O4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pk_';

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
