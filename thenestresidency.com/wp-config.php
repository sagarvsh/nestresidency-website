<?php
define( 'WP_CACHE', true );
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'belave_wp426');

/** MySQL database username */
define('DB_USER', 'belave_wp426');

/** MySQL database password */
define('DB_PASSWORD', '7erSpPp36j');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'l9lu7sozq81gdy8dd5mpgnmi7hdpkfdq3kriyrm5qtcjpnqnhdep5xbxuuu8im4p');
define('SECURE_AUTH_KEY',  'saaly9itjhs7rhi7psam7wsffmrbiokicmdjhenr9duvoo6kuhhofqospz7kb9jv');
define('LOGGED_IN_KEY',    'adkdw9c4m1sw1sencv8pvnzn7fojlnqaxmrkjxtp8vd9jdxj9pnbn4dms42vay3v');
define('NONCE_KEY',        'nxxcxz31hyfklelznyrpexehlszhuo6h8kn7oahw6qvufzfj6kynw7tmyb5yxncr');
define('AUTH_SALT',        'vrk9ff6knm1f9zmkpczmqjfafsh8s938jiy63sdtxspz9qkzedpf7mdgez6emdms');
define('SECURE_AUTH_SALT', 'ygfmgavkpjdndomyuljjbeonuuonyai0a5qdiw1layicizrwiojlao6rvdd6e45m');
define('LOGGED_IN_SALT',   'ujmwrsycelflhqmwdwaqjumkslediff7bcetfbpac3utvrx2ftto6kupfh1dokes');
define('NONCE_SALT',       '9ph1ljz4ew0g8v1qesioj9hbkvzuctkrpf1dcdvlo3tmzfgswodylprxpww7yue7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
