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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbanhangwordpress' );

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
define( 'AUTH_KEY',         '|1xTKTG,NRo7~ZI0zWZ/?$rko4q%>Q{SG{c*cdx5gG:GAL}7j9BWKq5@sypxX9bC' );
define( 'SECURE_AUTH_KEY',  '$m5#5.%vy3TTb/Isx wSE~HBGMPF)}(IgQUiF9s~7&aqU|a:ehMf$vO9i}@T[poW' );
define( 'LOGGED_IN_KEY',    'g^i@o`r`NLhO<#}!UfKk6N!sr?U>}E4*gl-7iyVo>P`i4M_h!7w|LlEj~rnHUK19' );
define( 'NONCE_KEY',        ',:gDVA8Q=kq4`S&lMPW~bN/d/mD7Si]&+m)6DN|#Ms/`~<>}TIs::`]E`/X*T@on' );
define( 'AUTH_SALT',        'IzK3G^CLZPDg3~:;y?:QY]K}4fk5-8gxN>(6tL;Pc,(&DXx]cp@>&z1gQue^H&1~' );
define( 'SECURE_AUTH_SALT', '!Brk.8Kv<x:SZy@m6VbjT%(ZRN]9o8t%B@;jV@XeaS|h=<<+z,LYm$c#!FhJE}1I' );
define( 'LOGGED_IN_SALT',   'R5=%rg4Z*hlUY8x,>m{%:-41/oT-NCb5* Fu6Z4/16$z-0/f[ l3_lk{vI+OU8!C' );
define( 'NONCE_SALT',       'TS*qn366l#{^RXE>O}Q[+FtE#I-v*yP}KFx-=#Z$6F9f-v67?g^xkp9{N`/>JG,%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
