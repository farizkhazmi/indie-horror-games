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
define('DB_NAME', 'wp_indie_horror');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aX8p.V1W;<aK;w%X8mr;3ey.H*h]yDE-_R-Enl? N07#C-Ldg!r4{C}=G3J/f$,D');
define('SECURE_AUTH_KEY',  '&Jgm]{u 7M@mbTX(|e mJO1{?mpR/^E37ya)dOM-=gYm9T7m88e0h%pB]6W!e>z`');
define('LOGGED_IN_KEY',    '}FyFL:a1~Z{rrHP 0*-ynpp~YXd6=0<,b9SJM8YJ9?}uJ|04tvZ# EAJi>{LDVRo');
define('NONCE_KEY',        ')b6hx>hp3Y~MhEzyW+$}YXCp3SH.fpg_9z]q*WMhY]2&bPg}M~G,U[(~:d}t64Dz');
define('AUTH_SALT',        'yj6pLwW3ORZiD7d=4LPMh;2n&i<#zX&Wu-Wdh+KoT=?+M*NP0JAqchPemR+HAv|c');
define('SECURE_AUTH_SALT', 'zMqD3zJ_~o9EXBX/*R}R[f%j,_K;EUxGh{>]E.ka5/a{diaDp)YcKW&@AtK!B^on');
define('LOGGED_IN_SALT',   '{sFx))WCmYZ:L@)+J_)fQ}m~?I@yJ!Ppb*nMg~qv#j4<U/u)zb|knqva0aGpDoQ&');
define('NONCE_SALT',       '_)]MhdlAeRA{/W^1aZ6UOsp}sfa&0 j+WELa?3Bgq}*#KC*D8;5dl_UhmEC=8VkR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
