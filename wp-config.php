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
define( 'DB_NAME', 'bepilates' );

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
define( 'AUTH_KEY',         '}yt2OTdczju_ MRk|b2+sQC]nRBz%sQ c/yUsX0w2vG9;&*$<KZ1hy#%y]0(#A_m' );
define( 'SECURE_AUTH_KEY',  '#dSm{rb2,^nfg:)%|vK{m}j*S{o]B`JDc&9he-r?yY7.ztLYlnDQ-j{zUyaSec-D' );
define( 'LOGGED_IN_KEY',    'hQ@s/q<Iiz.0geR;:ED~_aH%xD^zW&sI;]l:K/5K7aOa::&@ds*4BK^{X!Gio)Wg' );
define( 'NONCE_KEY',        '6QbR7VH]t=Ik6d%@y6%3R@B9RlD5!OtnZ@F~M1P&Nyc:362_f~!J-._g(/DmoYr]' );
define( 'AUTH_SALT',        'Ve*PV,L(Z-9}_n0M_{``1iXqR5zg-FW6/eD&a2#yD$:vBA^OAfD`3?!TB+a443BL' );
define( 'SECURE_AUTH_SALT', '@=k~kuGC_-dn8:[ght_OsdZ0_+9~@<c0`R!~>_Kc0Z|#pjrds@z8$Hcm5tDW+(wG' );
define( 'LOGGED_IN_SALT',   'N` vFb@~1`Mw7-dn*A8Ake>R8g5?z-IC0/_i;mDXxt5`n$k)kV.qc8T?4:sV%%fM' );
define( 'NONCE_SALT',       'x!quhmyz/6>WU+*3k+u~n |r$Vh/?<;VGg/5F*dexX4#ML-N|g8P7S]>=6AX-o[;' );

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
