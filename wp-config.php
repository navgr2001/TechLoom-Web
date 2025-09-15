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
define( 'DB_NAME', 'techloom' );

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
define( 'AUTH_KEY',         '6TZ^d@{;fxnush(&Sp>0b%HHWB!(fo4T>>YDP@UJjB~^#1_m**YTRUiUg]Q.A>}N' );
define( 'SECURE_AUTH_KEY',  ';B&AiU{^&9|mH^_dEL>B&bK ,r:t+hnRWW~T.3u0j-nH@R>1ibs5i`9Jl (-P?%@' );
define( 'LOGGED_IN_KEY',    ')C*8AZa7t5Pb=Q19b0>uq8JWX6 o(PFz^c:g|(s6+*7&rCNfBk.k,7Rg^7:%#-AJ' );
define( 'NONCE_KEY',        ';By|?!O<^-kzcCUxoakI!to;H^-L}Ndufl43y*IC8O ?={Bi Sw7UE3w3LHAd}33' );
define( 'AUTH_SALT',        '<!,c.fwJK{:OtK]d$B}|%2}+nfLUnav_awb<FCbZ?y8eJ?F*cf> 9iz&y]t,bU<j' );
define( 'SECURE_AUTH_SALT', 'j/&4uw!^?iok,Kad^w;,>#RNjNj,]&fDdXViRE%R59>kK&1K%EsF}VCrbxoy*1:F' );
define( 'LOGGED_IN_SALT',   'HC,;x7_Kmbpu|i<.G>~dM1X^Q9kI_XD1S.61;PSJ:r,m3MmJ*p1lvE4<t<KMMRz_' );
define( 'NONCE_SALT',       '3z:37r<g [M{5Y%39A:KrtO_)$:5UQv9$hN(H%*3a9S<>0W@O8+:Rf,)!2_b89K.' );

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
