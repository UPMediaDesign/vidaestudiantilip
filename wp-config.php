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
define('DB_NAME', 'upmediac_vidaestudiantilip');

/** MySQL database username */
define('DB_USER', 'upmediac_vieip');

/** MySQL database password */
define('DB_PASSWORD', 'P]L%dyQxHm2n');

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
define('AUTH_KEY',         'wqDd<WGR4 S?lzA r_<o:HD2M-#Y?4US_Rx|)S7oy#6`}d=_kL[7fSCb9!M[L*@-');
define('SECURE_AUTH_KEY',  'A|4pIO@VpG-{`p@o,!7e9V3#YOR=z^:)vH@ NL+jh5j?Yy0^]|1,o#Mey18R5Hx]');
define('LOGGED_IN_KEY',    '1raX@S 4*}t4|DO(vJqmjVMSP_8D.@7k]>EYI`^U7v)z#VLR~!lf_n4U)w+IIqpS');
define('NONCE_KEY',        'TMI?nmWp!L-OS]t3+42ho[pqzI%in~?v-xZASh^OYTy0%O&-We4J`KgYhfBroXx$');
define('AUTH_SALT',        '?.Tm&+@w^bs+*wv#0-3%=8hW=|9}y$>RU7KkGT=XvbgdIK6{|whbVmm5gspG|n7x');
define('SECURE_AUTH_SALT', 'a`?-xa_^jSKj^aK[sx=w|MWf0t4RI#5o3jsW-^YDlhlZXIGT+an~wl|=IP:49`2h');
define('LOGGED_IN_SALT',   ';FT,VW%,*p-O{/bakq+O^$RV$w8^X+q46+ L$5aLK?9N?qbd4W#Q-c4 Q#-@RI@K');
define('NONCE_SALT',       'dy21fX3b{jMJ_!2CDL(~g:7|){!Cg(5+6+NzWt}<ck8h8dTRy)[$hkJ3*-PifN(%');

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
