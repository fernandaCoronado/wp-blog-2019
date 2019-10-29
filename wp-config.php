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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UVoRT]9/NLP%#hK7PI1:&TJ% fJo(cNFP3/icDz<]CjYsz8s!wqCq`}K2G*;*,jx' );
define( 'SECURE_AUTH_KEY',  'Bq<~*WParLOVOh|`brAtU{mv,*t VI]GCO%IQBP#T1#? RkaKjQUaLu_</9my0J5' );
define( 'LOGGED_IN_KEY',    ' 87+J{y,d1<e2An(t<,/Zg#np*d5Xb~_QymySOdE<aN^6&9BVUFh]-iO=;5SPO&$' );
define( 'NONCE_KEY',        '{Fk+)N6Yu.&#A%n*6<Uf :=|Hv*P1fhlx~gmM,@Z3d$%HjP_#*Iq3Ee3Or~Mnfb+' );
define( 'AUTH_SALT',        'v8oQms0UgKNl?vD>ZIy/UF%)`#8B=:vjxi$@TUZTgOfXLnL1.V#^bKIJA<ETAYS6' );
define( 'SECURE_AUTH_SALT', '%1w1EY^/4MIi:r9t~enz/_j~@VK2|5$y%,)/eXXIF&?S+4|,i=1=VO(JlSH|yY[J' );
define( 'LOGGED_IN_SALT',   '_b=sJ}>sPnn%fIv-H*,:]@E2BL`oDYPk<9Ke|+pjRR],H::/kMd<_v~N/>m]y@ :' );
define( 'NONCE_SALT',       'yODH~{@6dB>VeJ2=a#$or9ZS[j42C8UKZe[87aD[q:<o fUPdwP7zTvUOTW1XI:<' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
