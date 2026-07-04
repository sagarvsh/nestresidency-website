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
define('DB_NAME', 'belave_wp235');

/** MySQL database username */
define('DB_USER', 'belave_wp235');

/** MySQL database password */
define('DB_PASSWORD', '8S7xq0P5hs');

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
define('AUTH_KEY',         'xniipj46ueh4jxday0ijogcwtarxyzfxnl4zypyz7t4cbhadjygbmrptb6dehjwb');
define('SECURE_AUTH_KEY',  'jjuloelzybl0xw9qhu9akdjhjk5nsqw626lxqugumoqq4refyyzrvtbhw37ysyvl');
define('LOGGED_IN_KEY',    'ljgz0wmlmonkx2gqxboontdoggsewwzjbkuvfvkctkrvoihdxbpbkd4roy4q9hk5');
define('NONCE_KEY',        'vukvpn5x5d4wavixfll8lg8leb5gc2v9wrkciwp8mwz2db4pvrho32gvukalkpdh');
define('AUTH_SALT',        'amsahdoltuaw2a6bempzgiyac06kjniv6amu7wzcunpwvctznkpyicn3xrafiwvq');
define('SECURE_AUTH_SALT', 'bcsyxd8tor5qaxfqqdjlm8gaeradoi9xqknwaokd6u6rbhujzchdkijaa0djmkn1');
define('LOGGED_IN_SALT',   'bg611yxcbxkwv3z16lme40ywjahkxefbwbu51xg1yifvvwh785csgpopvwnnb3mf');
define('NONCE_SALT',       'kn5zdlzixcohigfotnubbnq9esvdmmerulvc2fkqskzkqfhtyjarektl4mitcxn8');

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
