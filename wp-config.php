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
define('DB_NAME', 'db_sushma_arora');

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
define('AUTH_KEY',         'B.S)dQsu=QBc#<^)Ytlu@H.g$6fBwhx^%EJKz=eQGqDg{DQ.yBcB-AMjSy;]:C!B');
define('SECURE_AUTH_KEY',  'Lk4nnMCiUU&lst;z71%veivr/fS0=VYA5fUSlX`CFTMHj> ~>B}kpMxt?j;Xo?1/');
define('LOGGED_IN_KEY',    'oA)iMPNy%./d(gL*AzT/V*Xbke(dVQ`8AHt.Vcg@$Z7=Y~901 %@hcGq60l#|dr.');
define('NONCE_KEY',        '>HgF(PLxaR9tH!nL`0GFi7`z_I$J?<&JpS7{bu~Y>g,[+l($mG5bi7:b6d22E07i');
define('AUTH_SALT',        '4Q{Tcf.Z%:KBm9!}fR/0 E+J)Rx[my~|V7K|ul]uDw:Px%AM;bipUI}w5{Obnzm?');
define('SECURE_AUTH_SALT', 'b%|sI;D%Ik:,=OXQmScXkA_N/^TBrhY2[DxiB6hzrp]v3nJ:Wd~6xHRg-+_z[E+ ');
define('LOGGED_IN_SALT',   'i%Uz?lXTX^@ Fl|fmr:Sj3<Rm.a4 /-pI3cN*h^m75RwKZ*CH1e&H->mcv5J2zd]');
define('NONCE_SALT',       '3My&g(d AkfX3l]*?@,3rU&Py##A]JpWds<+d3;pC-V?m,eY5V!&&kp#U}fiH).B');

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
