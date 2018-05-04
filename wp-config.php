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
define('DB_NAME', 'shanita1_wrdp67');

/** MySQL database username */
define('DB_USER', 'shanita1_wrdp67');

/** MySQL database password */
define('DB_PASSWORD', 'NGXxzfAysqMlST4X');

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
define('AUTH_KEY',         ':O(|kw)z08;QE2G*EiUjyl:jXLsVE>vBu4(l4$RN?xMwjM;s2=?jbLL$N7q;Y4Qc');
define('SECURE_AUTH_KEY',  'phZ(*hif?u0EB8vO49qkTr:a(jVb9LXI5oi:rifsRV/QXSlTja@h7>Q6Cc>HD5Q#Vv@6z@;#8Wp4U#4EaB0c7');
define('LOGGED_IN_KEY',    'aiBNhGJ5>O0fnP8a^T|cy_oeLYd@8)7fpQP7!L^f<DSwu#(e#=~dqd8SL\`dFKD\`3pMl<gR_p<');
define('NONCE_KEY',        '~zv->Xw~_X1NWKf5jk9NV|6sP$AbZbk1a|#ii>q40rN6DA5><M#OjlHDpoybW:SZ)tgdQgTBy3;EODEtq');
define('AUTH_SALT',        't:^K;i:A>w)6;W|7^A$(@PeDf5or-*FoCM;XaJ4C;N#TZ9pOn>@zi$/ocJGW');
define('SECURE_AUTH_SALT', 'MNuhu@hYPMKi34YjK#Z~!>#_d>JMK;p8dS3S/s2/:Uvc6hBR4>zn-w^=Kju-;P4G2?Fz');
define('LOGGED_IN_SALT',   'N#5=1Fwh8T;)MYfF~0B_#1onKT\`R</FEg\`)iJ1F3WImjc0:gAQI6C6_>ZCcns_F');
define('NONCE_SALT',       '2jY$98d>ezRBUwNxJ;4t)wKio2cRY~)YZleT5r_~oALcZGk*8!eqZ==^Z73RQpEw8>uyWrQ|');

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
