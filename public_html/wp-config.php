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
define( 'DB_NAME', 'mysite-test' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'o=L4`x_P&oV-eMt .Uk03F)WSjw*0jd.e;`NIP>*mh@Fl,7N x.];[TI*79W:73r' );
define( 'SECURE_AUTH_KEY',   'Zxcmqnd>0Dy{J(~pT>Nk 8#Sx_-#nF{-(S[.T@Yz;yE`Hv/met:qsy4tdOf5N|1V' );
define( 'LOGGED_IN_KEY',     'RM<:oO}73@8zlEgA_tMEv g`)6CG$=R)}F(L^+z0L!|teE;!gbE~i1RY8+C]im~D' );
define( 'NONCE_KEY',         '-cjBdTdx2,:5dRv]boag:&P3eW!S#R_MmIV(/PjjbL_&P <Y+eKx}|06<[w|!Gv]' );
define( 'AUTH_SALT',         '~<Sh$q#/||=T~k0Gz/.6MHpws@/RfT;07^_/v{f<fz#_Kkmn`Tt q?4~NI,^t*fo' );
define( 'SECURE_AUTH_SALT',  '(`D|gwdZwN>jGUeA^DzU/k3;n*=@ZkbYDV&Y97$}SvYo(LrV?v^p)dF!RnB@7_`t' );
define( 'LOGGED_IN_SALT',    'pD`?B}7(gFJS[lz)g1bF+*2kh[Tcvisl.z61pl_R&6FOhMMHZFE@Qzyl@;wN5s{}' );
define( 'NONCE_SALT',        '+M/Pk2M4xexIQ!X_j@5;T)FK@Ti`+JG2;lz]G6Zt*l&qc_gd/5k@^K,4?6d_M+*}' );
define( 'WP_CACHE_KEY_SALT', 'd1) t+@KQrY;}?qAPmRUTH}Joa%*l@uvJwiNg^Mp14L]b4&2+YCigiYE!-kgP!g+' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
