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
define( 'AUTH_KEY',         'd&i>f:|j9A{aFh,@sq.t;qW50bm!$7cl<uZA$NGR.e>Mb4aj!YnF?<c4cud(IdP`' );
define( 'SECURE_AUTH_KEY',  '&%{U>+L-yuY%bP:,!@h[a3(n!x7mNZ$+#fSU!B*UQc8;vYXtQX~W$gIBe_U>3+-d' );
define( 'LOGGED_IN_KEY',    '4x?;u0(uTyYmCt/(s93rhSawr.j3Vput:c[_iXhNS_G&cLPHM(9diK/i_Av($2mM' );
define( 'NONCE_KEY',        '{od7$ZTkIjPnCjV<XLp0Sn?x9=1dPCmS2LUROhr<=c(cN{V.JPe#D0s:y7n!1Nca' );
define( 'AUTH_SALT',        'VTG__5jeB>hE,;L.>uH~H6`7;5!kMo8,0?ASoIs2/nZXn(:QLT1xy3/TJ vI_fbm' );
define( 'SECURE_AUTH_SALT', 'XL:9*#FQ$}cA_Sw>Af-T.4~$VR9jr2RnUb/uOc+cY}_JynPT|nOnQq{lOykg=eP/' );
define( 'LOGGED_IN_SALT',   '=+nHz:~r^q@ i2K#*vLcE>/)C`;]vchQ*N9)W`xtD69/d9[EIWmKo=!,=]iYf{.e' );
define( 'NONCE_SALT',       '6d1{dU,7^|j2 ]#{L__rl1qXl79>GpvR_2$|lAYy.B!qp3,{Nb(P[qMQEar~$OC$' );

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
