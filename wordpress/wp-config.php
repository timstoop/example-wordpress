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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', getenv('WORDPRESS_DB_CHARSET') );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', getenv('WORDPRESS_DB_COLLATE') );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4K^Bh2Qz)<^Ke9vEr>S_o4unPFKK.jrz7b3>#)~F@,,a5@s7fE1=<8u[4@I@dk;5' );
define( 'SECURE_AUTH_KEY',  'f[on+&DJg<,q#3/Av<c|jo(JB#xA{n>.46AF[`(-Ox$C2 |X,}?{a)(oz@lsSk-l' );
define( 'LOGGED_IN_KEY',    '`ATdxpTCx| 9,l.#~4+,2 PCfRN;yS`,{Y9%TB5h=SPcw*||U?>d|@:(XPb23!DW' );
define( 'NONCE_KEY',        '*dHw~)xu9*z=4O2YWaJ>!o:0lE*NR1M-4DL.YZlQQ/k*4dn*%9S =g817=H_nyUa' );
define( 'AUTH_SALT',        'J5aYhF$}9i$kA(VMMMg9SiahqRUo{>;+LtakZ`xL(5%S*s gw_o`e-cprR/gVcFO' );
define( 'SECURE_AUTH_SALT', '6t)KViB,uU(1{OQYTCe8mG-6!kU3(eI/.qU87nv+&Q=Bk2j/5J?S>MYngh$VuNu5' );
define( 'LOGGED_IN_SALT',   '^HS@RCo=p/468c_M y>EZtK4TL_-3$@y+Fd(*(~7RDM|L2f8_!dz]af2n&.:=fUS' );
define( 'NONCE_SALT',       'wIF9%h{:lu70+ ,N>Q]MTS4~|.&tI$#5[c33^|13Z@c^Omy)DNKo5gG8a6j?-3+]' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('WORDPRESS_TABLE_PREFIX');

/**
 * Always use the URL as defined in the actual call.
 */
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
	define( 'WP_SITEURL', 'https://' . getenv('HTTP_HOST') . '/' );
} else {
	define( 'WP_SITEURL', 'http://' . getenv('HTTP_HOST') . '/' );
}

/**
 * We run the WP-CRON from a CronJob
 */
define( 'DISABLE_WP_CRON', true );

/**
 * Running from an image, edits and upgrades would not propagate anyway.
 */
define( 'DISALLOW_FILE_MODS', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

