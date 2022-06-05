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
define( 'DB_NAME', 'bdtienda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-wD<JdTnB4b#z~yjAw&nKOv&|t>IX/e/pSBRq2V;~.|$io)2ji~lP?%SW2h6I[8^' );
define( 'SECURE_AUTH_KEY',  'T_ox_SkY>ald?A.QA8e[>9c <Z0Iriq8.ygf!b2<#399/AM47# aAZc(Ush:>/c[' );
define( 'LOGGED_IN_KEY',    'ph$Y+h0il-qp<_@_xHnTO`c4NLvW`;C5*fQl>p8f4:aX6fxN84ih,Zh<JqDt2FJ`' );
define( 'NONCE_KEY',        'h- :Br`NeBh]V@l2BXExU7Zds}{bt24n.#L2oE)3ao1o?mLL{o0WcNl((eP,JYQ[' );
define( 'AUTH_SALT',        '.!]LIa^d9+j.kFQ4NHVYn1LLNnY -a#@H{Liet.=B&9OX4y[[$4m?lf@8Se!N2!s' );
define( 'SECURE_AUTH_SALT', 'm/QWd)b;Y,o}d?oE*E=W6a5uWPXqe$68ZC{dLG:B:43t/V9mR*L~$A<[Cafj1D)O' );
define( 'LOGGED_IN_SALT',   'q{KZZ7y] g-jA}vQ2G}$`^_n>S/!TVrq Ym{1#0fyi2b|;`6~N,<0LB[7&UF*>p6' );
define( 'NONCE_SALT',       'qS96,ASQe,`Z;zHx}1qhWb8n&%ZYQ?7IhvUsL~3{6Y+@VzeOC9*5;D-3?r%~0XHX' );

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
