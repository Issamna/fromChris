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
define('DB_NAME', 'fromchris');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-?jB~;+N3|uabMoYTx) b)<>5F#JvFg7c+$!I)pfpx18(Rc_qU!:LAR;y47h-V<2');
define('SECURE_AUTH_KEY',  'V!oV,;c^Mu3o:hAv<EeZc(,AT>R O.86DB]E)jWjm1}9@tHNh`b.<K|`#1 9_XV%');
define('LOGGED_IN_KEY',    'fC_7sY&:TqxUkK*a; aS_(Ei,x%2y3D?D!*Zih!XLblcVV^99TmIf_nYr1s6|RH$');
define('NONCE_KEY',        'jfRX22jn6_)n$.$1bY4iTaH/$YK=XhnGZ82#>;@h1+hFK/SNGDQUiIoZIV!qYmhz');
define('AUTH_SALT',        '&N0A[z32Z_G,bk|Se*]j)fR@.6}r8=pdMDz{g&Sb=MZ(w$19=9`dHUp:`0v}Ca)n');
define('SECURE_AUTH_SALT', ')CL[D$1q_7g=_cEniUxB-pq;}F-j]p,*1m81Z32/{xDJH31X`5]:?jf9~HIO4S+&');
define('LOGGED_IN_SALT',   '@gxzkLb}qw65RRc9Df/p{ua4PCe6/>$mnnXMm|F>k%g+55Qq6o(yvo4ZtR8aB7O9');
define('NONCE_SALT',       'fr$zI7z6~_<v-L#}FE6pcekmJ<NF10dD2VZxrb.A) WXd]IO6XcZ[vUKByex*sG$');

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
