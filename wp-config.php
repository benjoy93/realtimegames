<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'realtimegames' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '+MMs4GF:_(KcY@HTO`[i0M2ufDCOk0| rt{<Z~JYgPbubwt0D2phDQal~w7+WfS$');
define('SECURE_AUTH_KEY',  '@@L=aTV.JI^b-4z-5>p3:P40<?)_;yLf/ TN0evk}2q~Tr58v/o,q/QovWSYW-fr');
define('LOGGED_IN_KEY',    'a=o,Hn~X]ZBrM#-^/EU;o;<Ej B;|c%8c*Mu~dl#~4)&;VqeW*G<Vk?VSJ+aW| 5');
define('NONCE_KEY',        'g<k2BN5B&`TQ~-cdEJRUI7o&0OVg9$I[`[}w;6u-[Tdv/B%j~:oFK4zdjBnX)9-E');
define('AUTH_SALT',        '.A}sx_onG(J0)2!ux!#-_Pl/Xk+m1Fb&K#jUZAyLb4a&tbD]qL|O+@v-k@i[WarY');
define('SECURE_AUTH_SALT', '(mJ-N.msA%WXXR*#@~!W^+H,p8q uzh0#Fn8he,])qH9$7-j*-(`f-;0p7g..YOK');
define('LOGGED_IN_SALT',   '63ab|P*al2{lL}ja8:xGrC%qqt@*|6RNz_&/K,wfGlnUNV(uy9TM:}J&U S,Gi@w');
define('NONCE_SALT',       'IkWZh8L|}6ck}&f~sS6.4jqfmlAxmZ+9EjOI1RQ-CbOm]+5X(Rs)!C/6XCneEOgX');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
