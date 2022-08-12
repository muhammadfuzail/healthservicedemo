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
define( 'DB_NAME', 'healthservicedemo' );

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
define( 'AUTH_KEY',         'k|9eM8l{c e3KfK(lIE8L.woE1*#K^[J+:YWvx:(I%z6yJx<hHj*JOKunq{P,Q$H' );
define( 'SECURE_AUTH_KEY',  'p@&<^xQ!wW||bfH?,]I*+DE!NCVNym<UKX=F-;tXQ|<DF2w}oF(!yn6+UD}OkiUY' );
define( 'LOGGED_IN_KEY',    '1Tb7WE7idkcM/jtREK%0s(L! =CgGe:2ggnobg)Ir<1xlp%K5X7n|Kyt6N32_Y@O' );
define( 'NONCE_KEY',        'TJ98R P5W..3tN8T7|0ez}C0o^]}yKlOWF+u Yg(zR+5s7xhITKuauo[0,r&au?G' );
define( 'AUTH_SALT',        'fHJ>H=OF;(l+JkB?@w3mP<vKp{EP`_r,WX69R?F?+X0bxz*[`k9nt2qP,Pf>l_%e' );
define( 'SECURE_AUTH_SALT', 'O^NYV`_jJ<%*9>L/n:QQ6*{}/ ~YPXXK|e+sg @oEsf)e.>0C[G-qncjMphz=sJ ' );
define( 'LOGGED_IN_SALT',   '56%4o^&2)Ve4*HpgaJu@ii O}.B0Bqg-VM|q(`e3f1U v*!>!0w)~ReTf9VX*cA4' );
define( 'NONCE_SALT',       '~n K6e_~O7s$!J*GY|S@Sltvcq2)v,#=##PBKa+*RarV{.%LXQl-$g!hz/w2aYw@' );

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
