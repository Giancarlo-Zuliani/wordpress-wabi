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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'wabi-test' );



/** MySQL database username */

define( 'DB_USER', 'slaigo' );



/** MySQL database password */

define( 'DB_PASSWORD', '' );



/** MySQL hostname */

define( 'DB_HOST', 'localhost' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );



/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'qrwM(rI +0(%PLur#rHe(d6!).@ Zn8Z9wFyY;MJ3a0Zv&D1$o:ZzL$;u%K4{?o[' );

define( 'SECURE_AUTH_KEY',  '?Wfrt^qAiXbN[g;$AD&pi1r,{/Dnq!P.G yQomR+l`NKeFK(3>*OgGJ!t4J>/a(9' );

define( 'LOGGED_IN_KEY',    '[4LfdGMU/ii@&i?E|QC<s.D[Gl*Q?me1ZHI9 L0_.gjDLkSSek+@vK70Gqv:4s6>' );

define( 'NONCE_KEY',        '9-Y8mwrx5rUw~dtl_U%{_ipXzqH{bZm{KbEG$u.eqLy@0wIiXr)asE81H1]<`Hdv' );

define( 'AUTH_SALT',        'g~$+F/iidk__tEBp.]7*Ejfg/hE)v7(;5xdN)|$pk!&UV{$/T|Or$/X>Aq*Hwq`x' );

define( 'SECURE_AUTH_SALT', '2ZMZ^w(</c85>(`Mp8ttpeFmO)R#~1e$%i/+TkvJof_/]4lWWMx1xw_$*g*IPxy;' );

define( 'LOGGED_IN_SALT',   '2zp3F14:2[AczE9rZu/!/aNVFvD( )}sa2PzZ&iiVqHL#$wZZ?K]v #TKS;3n`a2' );

define( 'NONCE_SALT',       'QpK=6H05&8gi]0<C @{FZB9JmC@_j%oS/M@Ge}WuO}cU^Cf=P5`5sG|cN|]lQBNj' );



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

