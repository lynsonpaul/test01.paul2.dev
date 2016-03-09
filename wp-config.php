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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}t_zPRvpt6^obyj;WH.Z{cwP>d<<];18Oq&{h8s%^2*AU/gqc):$08ypC~sw?:gh');
define('SECURE_AUTH_KEY',  '-ocB;SMv-M}Kd!zAE7jn<%)lA-RBc,b})B6BUHKEDCoXGi@{<^!%7R-;,a}%s].y');
define('LOGGED_IN_KEY',    ' ]n^<,21.yc#ccRw+yZy,#w@T-A]:IXIFzqi- F^o_2:6!|mFc5Aw9)xl_u)]O!}');
define('NONCE_KEY',        '%mx1ki<)wj+_fM4qH7L,{)~;<,AWOp:(#g%l!}/jh!69VAnwQHhXE(_3R2YL=(*J');
define('AUTH_SALT',        'V0W@S5r)faEs2j#|-$8Xg-uiObuMVL0G4_^7U)jw;Tdk|o.~tW<4N|+B=Hq.6R];');
define('SECURE_AUTH_SALT', '+Wn(@cI)F`xyVp+95h2Mf$<*G@SG5Uy/w)X`g{>*yX+r&cTNjXRX@;OOe]ReF5hk');
define('LOGGED_IN_SALT',   '<2|z5qJ `xrb;jy]N +2o|KT_Px9jhqeA~iu!:^y%nF6N?8#;&iV)>iW~YqiQEz}');
define('NONCE_SALT',       '+@NXluOT^f:ohwpk>];@>c) 1CMcI=!eP#*.}Mp<6Aj~Av%%F9|||j4TO&@}@TeE');

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
