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
define('DB_NAME', 'internatiocall');

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
define('AUTH_KEY',         'X&zO-9WD)*}WjQ0ON}qyhI|8N sCuGRmXkp%Ekuw)e9nY(h3%ok[cv|HF^Fka@2<');
define('SECURE_AUTH_KEY',  '3?{Z|~t3!fL]D>+hM*}l]+]/=Ccn;LL4[^mlrJy=UvSHT=ivqJLfOz$?7`%)1jm3');
define('LOGGED_IN_KEY',    'fr Wb7@x>T63g]<I%e_+5)IR+?kK>;=0A|y Rf:I^&<:Mv>als;|8.JLb`a0(kMa');
define('NONCE_KEY',        '0TLB^ Q5~SJ4`)6oL)_@z~v-9M1@S#G5dR9`wBxv9=@yVf~{E<JQx|*O/~ujKXzw');
define('AUTH_SALT',        'Mta5E-m(uxnjnOo[EEj+R&_;|d!5_fj($[[z!BD8+F,=GVkNxKzy5ck=*<CjXMZ>');
define('SECURE_AUTH_SALT', '7ii4@!>wjGnqrkdLsDh(eW3{_j_h 3DbuBJkKsA3 srmbT||^{nGC^cONT1xFty3');
define('LOGGED_IN_SALT',   '*GKaW_y&Ym#!ias6{;mCSM!w-I{]u}@4m7kNfy8%c2*UAvYV2Hw~yx|%wAoOA.+u');
define('NONCE_SALT',       'Z10*iAeb?O%e2/{nF&5>8HK9iE0yUOM~[hR:WU$+[:@u|i*)k}HE{wT9`k>Vwh`M');

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
