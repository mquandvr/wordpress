<?php
define('WP_CACHE', true);

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

define( 'DB_NAME', 'khoedep_moingay' );


/** MySQL database username */

define( 'DB_USER', 'khoedep_admin' );


/** MySQL database password */

define( 'DB_PASSWORD', "Abc12345@" );


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

define( 'AUTH_KEY',         'ZW({XAo!J3MF:+|ss4=}B{4Ts9aV%ZbvL5<vXizzRYc[[tmTKp;r/=Lk85@r ^gs' );

define( 'SECURE_AUTH_KEY',  'Xx;go_[%Cg$y[hSBdG{nl>CEKgLaKcvXJI`4l1/fk*a/3O8le2Fe=O#@1?4s-2z/' );

define( 'LOGGED_IN_KEY',    '1z:|?GoCoC&ViAbHZrCkx/LBWocNVPpL5u|ua:bg0L7^FuqICpk5C{zapYVY~!P(' );

define( 'NONCE_KEY',        ']>}64&hRqv^*:%+dW(2vC?k)-|%PXp{`MrHq0X<bPcbALGQ$,:wn9xA%~_^2 s]|' );

define( 'AUTH_SALT',        'Y9]=- Pn:BW*~-/;@9B#W&0O[|2|F`gp>Dx>Z3.2Kb-yIJ58@CfcA@UyN+t0s_/[' );

define( 'SECURE_AUTH_SALT', '6JRKYd{m`X.:Ee``oN)D.bQhUVpKg0mf[E>?&{C8c[,wT,<*Df@3)d07LFO$]J|D' );

define( 'LOGGED_IN_SALT',   'yX!=Wq6RD^zQdYTW!lpTgb<{DQzI2: PM7x?;9Hlec,m~rZ[-.?}bMi`HDv4y^`%' );

define( 'NONCE_SALT',       'ZE=bm%gB|m9hIf6oJ#%7jv^[91)W<k}On#=S)n9S%BYbzL?t~-dnYX]a.RQg[J;n' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = '5cf2c16e2de22_';


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

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

