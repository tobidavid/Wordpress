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
define('DB_NAME', 'dunamics');

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
define('AUTH_KEY',         '/VdO&y)(4G(2<.!<ZBQ3q}k+y:Xpj]CS,&DN:MH6WE12Ye^38M[N-kw}h0[MZteO');
define('SECURE_AUTH_KEY',  'FgdxVs)#S8kwI.]4PS+D#MIwRp-u~!fr?0/6WQ~2vaECa0_ QxF,0.Af}0M`9QbR');
define('LOGGED_IN_KEY',    '^T}NHR0i$lOBU3zz[/kUg=y=Fc$^!KxGnxrJ)uPX_z*&~(u%FWbP5Z-`h=!NWc`$');
define('NONCE_KEY',        ',8TLS<sP/ib+0Ca6=wyHy{n^G^mA`fNE=PHcU]{|h^t+Gn;4!:6IL!AK~07WWq8;');
define('AUTH_SALT',        'QI9h@Ue^&5kda:0UI.Z>&HQA=ex_ksc/OMm uL$4;U`5KKz5fZlF,;z@Ob5CugLW');
define('SECURE_AUTH_SALT', '0/CY5U!u=Oi#pNm#zj8JCy{{sy`puf1!f2kX5,f48rM1T@mW_ZR7!F[1|8#Mjk8!');
define('LOGGED_IN_SALT',   '=k*ITJxOpp.]nBdmOTU*_q|T-|V(2vG2%wmDe02OT9DEtfw:lY6p #YR1-^B/uQy');
define('NONCE_SALT',       'ts7q2(I:]t4q#>3]<Rl)$~vz0PX=GY|nJh`WvbUAV0bY{hjaPuI:,gi;3I1Rkx#m');

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
