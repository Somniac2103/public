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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@KB lT&i5rH Z_DOqo}|?(]2hSRJ6TK#9(.QJu`2]MQ[dz3j},5@0eW8;=!W-,;=' );
define( 'SECURE_AUTH_KEY',   '#Vb<^R<Ib!PD@v%AK0ea,oKD+Wbdw^Q8O9TwgssuT(/H[VHl-8U}Y,!^3J9k!c_Z' );
define( 'LOGGED_IN_KEY',     'aX8@)?i%],Zko]D,+iu2qOqL~E]g<msEjAg>sOZ2jrrh|9/qrU`zSm69Swop-A,:' );
define( 'NONCE_KEY',         ')piCGh,=xOe_X}~da#pXa~+gq!zwhE2iJ{M:ta|x@FOjg&))b D?Yh/f7Uj]YY~}' );
define( 'AUTH_SALT',         'M+iB*k5>cqHttS)Vx`-MYz#~kvh=X/LCC/8o#]Tc`iNH6e`zpeKzv#0),S%M^S(+' );
define( 'SECURE_AUTH_SALT',  'TWthxFl`rPU_BHYyL8UK8H|razVBp5pr}S-Hkcr4givkr!p:|E2F55ACN@ :OZB{' );
define( 'LOGGED_IN_SALT',    'b oga4y&+I=:X(fSG|,/X.h=P38DH#k#c4 *xLDYGD6frH.4m~@|86_%`G4eU7CB' );
define( 'NONCE_SALT',        'YOK;8APSE$?;F &]0S6EHR1+2zs3<Akq#0(f%vA%OI[*FRXT8(0el-$@I.uE+`S+' );
define( 'WP_CACHE_KEY_SALT', '[jfVuMYBNe> 4Pr`2ETsfkt@uE3]j};Yx;38p)bs8`,ylQr+ITB^+Q[JbI3q/tT5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
