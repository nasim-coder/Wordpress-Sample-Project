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
define( 'DB_NAME', 'laptopdb' );

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
define( 'AUTH_KEY',         'DoD2_I{3viY`|UI7zb$dBgs;[Wu1NvDSMxG2f+8nO~)1D2xS{E:4@-;nS/L5rp%t' );
define( 'SECURE_AUTH_KEY',  ']KAc-7OCMaqz 0oIbK6Qq-sa7(F:xuecfR[6Goq![*caxm0hOK(va]Es5fYp.=Vi' );
define( 'LOGGED_IN_KEY',    'b6o=TcS(x78^< c<i)ty%Kn}H7 l#f9MGSGQ*cCb8]Cfx>=9xF)3v+Cd_?6gHEFI' );
define( 'NONCE_KEY',        'V`((HKiK`)*&KGUAJCW1NGFTt7R{_+Vy2+S$D.g?w3,nDf[V=B<`4oX@~*|Li!|g' );
define( 'AUTH_SALT',        '~oO?I.vf5z%ZIl%3oD<Fe[Mbe*<;P]d.`+(TC^Bh1f{p^CKO&UsbPYa:5lv0my5x' );
define( 'SECURE_AUTH_SALT', 'ArOqo0gK8{BxW#+2+d`:]C~&+s.pS]n8=6cGwVDXR75D:#IG27qeeS%hrA*S1/bX' );
define( 'LOGGED_IN_SALT',   '{tx!z0,&-3g&7 mjfb]v(&=camV:Z[~aD[RjrX,~wk2XVyI~~ah~@X.@JbD*2c<S' );
define( 'NONCE_SALT',       'aR#7?cCp]_;W/RcdGm<?)A#EFr!BBi1IvmV9$cq*l[vw:fmY)YMZ*=@HePz~ Ulv' );

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
