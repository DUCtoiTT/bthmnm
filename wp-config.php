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
define( 'DB_NAME', 'trangtintuc' );

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
define( 'AUTH_KEY',         'PTk.[t|BvCK1&Qcw65`E}234=zsd]_OkVsVD?%b{uNT-4:M=$,d~kYACbdN@#}]O' );
define( 'SECURE_AUTH_KEY',  '>edI>r|#r1);D$`ZfFx.69DZqFrLRtank^(.;%FpxNKMWd1j1](rEZ3BjX#iNh:f' );
define( 'LOGGED_IN_KEY',    'r1M)HW:mD[Z)[`PC3Crx/C*No=VtMMzej)QVQ4,nYHvmv_80E-5{W9>Rj!yl]h[U' );
define( 'NONCE_KEY',        'P>jq<Ebq>r+GKqBnn~Gkm$UZmu.{5yJGvGlc7S:C %wWHQGkii(.AoAtPc&dTsvH' );
define( 'AUTH_SALT',        'pF48k_v52SPT,y#8}zPCfP:j-#7j Wzk-: L*ptd@9^*/b~R@)d>718!~m)9wjv5' );
define( 'SECURE_AUTH_SALT', 'yeHGB;{:*#,ZS[XfAGS[4uqeT3ei$smSUb*uvlxS5:7(WB:`Hkl=x1g?Qv@bckG>' );
define( 'LOGGED_IN_SALT',   'sT-_.@),@_N=eWeuuVeqF_Cw,l1Wyx4/5a0B} ,4h?V%i}n1hUy~GQid(jX2}4Ve' );
define( 'NONCE_SALT',       'v+#Al]rYbwSm-:N4}Pl/h1{k]e2XC>2qg`=G[a=y?+Z=dq^c@d9T%?n=6BP`wWVa' );

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
