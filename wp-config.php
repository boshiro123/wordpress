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
define( 'DB_NAME', 'wordpress7' );

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
define( 'AUTH_KEY',         '2qCly4IR>h<vgHu.O+/kzhr6jLz: o {k7L*>C{rX,b},m7] ._[%{E=yzNr^YL>' );
define( 'SECURE_AUTH_KEY',  '8$?9w0Xb);|AjSudcCp/Wza|EAEAgqwkpHi:vQ~%,Md(0kK_of,iL:?1|7RM%c`Q' );
define( 'LOGGED_IN_KEY',    'M)ap}Gc.Q]kwIoyH>kp9Iopvcj;U~v.PU1fT[u0?L},*E_`Q}PI3oNTe2D_NCG&?' );
define( 'NONCE_KEY',        '*7:BGjce;Wf4VBA;,C`rY+v/)yx&vmlBqgd,E_!i1%#}|Z<M~V .,DH;$pmJL/OF' );
define( 'AUTH_SALT',        '150kAM!li+]ov5xV)<UPdGlNQfKr|*D85vVnD}Gl=igBh:]cMGm>!:+Kx>6Sc8a-' );
define( 'SECURE_AUTH_SALT', 'zGnRzHUK_K&~@f`Ivh~006YcSs( |E.4uUX76:_I}Gx?U iZ&<|Ts7B(0u3I~cZ-' );
define( 'LOGGED_IN_SALT',   '4.6--45MhE22R/SqSl{*/](9 A]ruxHk6GFFbFciNGe-~*i}?JIC6j*QU9/}.gRo' );
define( 'NONCE_SALT',       'QTRbH~C#VmzK|)%s(>`|CVyb1gY,5`TYfg8b3&i`5Zd[n~.EZ=fN$GjjQ]mwKLB4' );

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
