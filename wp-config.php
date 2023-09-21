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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0rI2`(n/I}dZwu?(B *MU 72XJ@bB@?xB;$f_<da[I4cC.cPOU}YzG~YxHP6[OBL' );
define( 'SECURE_AUTH_KEY',  'i_`v|LFIYpOsQtkp=gzDZ]t1Ot$}v-sCc8W4,mh[)QTt5sEuazLbp~ER<AV35;Ys' );
define( 'LOGGED_IN_KEY',    ',)_Md4y#T-%Z( +=f98TE{6qgFa9S0Uy@YgpA#v1altT3bGhC@2+Soodc9:#a4^`' );
define( 'NONCE_KEY',        '(9v1%R(B~y9}X5<W7RA64TGz>pB@O6n^>o24(ZSG*UY-ZxdZU3dtKsHI,=ekZ@SR' );
define( 'AUTH_SALT',        'qD<NQJx^{LrgOLq3a(6UnItb!*mE#E6jo:JY/t7O=hT9-|iTS*v{_8Bh$x%TvyD:' );
define( 'SECURE_AUTH_SALT', '<Bd39x,H|To+o{_=r_Pqm<b?+7MQu0(~=>AZ^H)nC5^RClR,e(c*ia67u2~X}P-:' );
define( 'LOGGED_IN_SALT',   'paY-%8|?( Ta+sW5hE1qAd+5S>0W@g|i i{a<&DTE<H0ms`@Co[Ggj|P8PZ!|S8 ' );
define( 'NONCE_SALT',       'F*gr^[*Qi4<uT8Ik_M0/2bHOduHL}Tvd,(889WB?[pVMYAe#wWSgi,oo< PHrY)i' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
