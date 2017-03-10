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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'b2w_admin');

/** MySQL database password */
define('DB_PASSWORD', 'DwrVqSeyqDux2PKu');

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
define('AUTH_KEY',         'Y^mbYOPa]gmmZ$y|k|-KR4dFln;VB0UaLK m)@.eKck:j`oY$.sc4|Ms^DN7,G|L');
define('SECURE_AUTH_KEY',  '1_3JWcx_3CY=`i0A6.7Yst<A4GPJ+3UI`wuUG2mM<7Liw$xd4esF*o$ojB`)o-yj');
define('LOGGED_IN_KEY',    '2j$|,h l: (T+*M-hj&`q|PS{fi4N!QZ[Fhl(?@IlW!!9}BHc7QbT53R*J#V_eNq');
define('NONCE_KEY',        ' xM<[l,!> B40F* ABsE!9t15:NHom?>5TJmX=62ChfA&f3&?ruk,.)`K{CZg|[9');
define('AUTH_SALT',        '4{Sl+bM}kE|4Bul]l,#^!RZtSY4j}5Eyrh9[dRY_%hJe8^A|$j=HjZ:1<-(Il5TS');
define('SECURE_AUTH_SALT', 'i/2R_C>vMyHq|9yxE($~NwB}@`m1[6.~+cVRw4eN7+ZTHa(IUbBh(2iSOC5>TByQ');
define('LOGGED_IN_SALT',   '|(BcHKaE}s{*k!dso+r?+O7]fI}zuU$k(Y)EPc /A-sBWp5?%:NZ0Xz7;C`P~,D`');
define('NONCE_SALT',       'V||V[gg?]VfC<&y&EEmI)!1zh=LC}wS;=:[JOMg9c)wzS>)iIm=e$g1kcX1Oa @a');

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
