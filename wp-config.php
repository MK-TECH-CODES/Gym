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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'C!B2lr|,sop9j fkWN$/[$d1x2XVoQ,A31@o|FKg?%6($,=RFD6Htz= cxsA.1tD' );
define( 'SECURE_AUTH_KEY',  'K&afC-.1=,=bgtIEkfH_gD^lDr#$:qv>l>:Fs|ozGQcFW(VucDGO)SRf?1xf+zD/' );
define( 'LOGGED_IN_KEY',    '/zvw|1#Yo.Q|a</*t^,mxS%;dTZyw?A}-{.8,IIdX%bLIobmT5l}bv)KKx:fLtuZ' );
define( 'NONCE_KEY',        '1.w*1Kcasex^.(anF<4l7P8K7=[YL@r{ #-qmaRAKoF,N#KAd+XXr)KTLsc8p]*K' );
define( 'AUTH_SALT',        '6!6l.*+VoAAa@yq,TCb$j]Pyv`u,`S<;=y8T&M1y={)>zZ|qo%.q+]Ho}e+fOa25' );
define( 'SECURE_AUTH_SALT', 'U@WD[75<jnU0/_4ivFLGxLwa)z!}*D4[T+}c``]gzRO`c(~>@49br,0-O,A?&YZ{' );
define( 'LOGGED_IN_SALT',   'J[r}peA2 ?|JI^z*2qn=k_9F*jS6GyO Ech60gVSx$onF7mhK_!uoF[(M`X<rw36' );
define( 'NONCE_SALT',       '+:4{@FN9kPZpp=xo(9N{4$nWi8aVxKn#e`e)$.w-R5@q@oO&B6F/!O~xU`w(vBo9' );

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
