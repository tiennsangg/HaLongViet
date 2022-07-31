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
define( 'DB_NAME', 'ha_long_viet' );

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
define( 'AUTH_KEY',         'Re&*U9;Dh@CjHae4?d+A38=cecfZ.)ZASTU-7D{{3*[dnjllJfc5Ux.LS8 {3#D0' );
define( 'SECURE_AUTH_KEY',  'CZ<sVL.$kb`iN>d{+.^La+(uPlh{}ZLXhZ1BC[Rul^qe6]D_izp+);L$d!e|l?yD' );
define( 'LOGGED_IN_KEY',    ' ]{Eq6&2 QMhm<u`[INY@J>hH|$%]Xs|..FsG=OZs^:O/C>YM_N^0t&KQ~yajhW}' );
define( 'NONCE_KEY',        'J~w41EGt%6wZ<>Oi:&-mUN=TaK2vv%j3a5n+3%JsbEZZZv`]r;Jy(W}wBMX vj=~' );
define( 'AUTH_SALT',        'P.MJ NV>2`biet=_]%pzBE?w/Ku]O[APukX25;AT>n[43#5 bPW.zL?TE{;[J~>`' );
define( 'SECURE_AUTH_SALT', '>n<D-!IOE|~}^~O{t{SUE:-3zF(gS[TwOL2?erH1D/a/o<*uF2f}&aq{#N6j +W=' );
define( 'LOGGED_IN_SALT',   'ldWbEd$}|Egf5~ur39.CAcy5F)z)9~]O:L$!$eM0DtwqFT;{CMH|/Lz|TT%uH1AM' );
define( 'NONCE_SALT',       'H%Z8n.=-{xB]Z.Cx,;[#/H?{hM[ Bn 28,PUr7uJcRY^I<[7PVq]|aiDlfJnm:mU' );

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
