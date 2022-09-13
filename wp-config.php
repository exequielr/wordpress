<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';z;f0[^jYV<UVAp/tC-u$i@it(zAoCYHVGOKZI:7_G=74 ;5i+xZYs9$t?hphExU' );
define( 'SECURE_AUTH_KEY',  ')T[o3/O!~9(Hgg%vMGm$GWHv0q{h;^J2KJ~rE06R>L2(_u{]B^`&=,3nWrZssD;O' );
define( 'LOGGED_IN_KEY',    'Kk(gl)mfKF6~:-]-RLz4>v!^1]! C8uL!~ZhD$QxKoMRz(+J~j9iC~5)3NsQs]h-' );
define( 'NONCE_KEY',        'fFQ:o1HFS=!2=R?H569c13DULhbhveY:)}W[zI)q5u-gI8,u#.%fQ{dat}6OX(b/' );
define( 'AUTH_SALT',        '~H8+pD/ACp9jw$<l?],JX<FB,vFqOl17!s97QT=.nWlodXNZF_Y6Ly)Wy0B_NV~,' );
define( 'SECURE_AUTH_SALT', '*2ttD/>R$RMVv>7.ZECxtU,5`#fyk)?i_I-5]U-Er4M`oK&eRi)eU3e4O`.O8U??' );
define( 'LOGGED_IN_SALT',   '_N!p!3|ilmqq#i`$2(AEc;e4bDod)xW^@@j6T3rXf zkoZ#ptXRPoBQxNspBGwp[' );
define( 'NONCE_SALT',       ')K-N:2L_A)`EP9G6}.0r.0BI5STS[AnWe<}-Ly 8x+Hal.en(nv0Q&Jk/I1~PWj.' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
