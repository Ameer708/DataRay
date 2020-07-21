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
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K!#~)>E10YB73bb=$?pH^ qp4=ZX>wHY!y{Wo K3i`h<y/Wq|+E(1ea4[7LFZ$K`' );
define( 'SECURE_AUTH_KEY',  '76&hWBG^5clc%F0??34`@uQ3sRT#j]s]>5!;P9o1Idb2deVoGzOmN{Z,#hOt/L>E' );
define( 'LOGGED_IN_KEY',    '])@CoeK>;rEd(BIR!Et]WghrBZ;#o0]*(Aplfhs5{ktPBiW&7re?iY#tI+METXf$' );
define( 'NONCE_KEY',        'hR,1f.3{BG~s9G-6K%2%$!0:?!Ia)Cvo7|b{[<Ml8b#(2zAHz6 kLMkp1TKiQgB=' );
define( 'AUTH_SALT',        't9(z^YJvYU^)]r/M4f@20!!`*}D6{bKR5RB;}%?OBojTI(|}LUHg}7J~F#zi[|*Q' );
define( 'SECURE_AUTH_SALT', 'X~8)Ng8mZwW.;g(Mc?zyc]$/:FMFTJTeq0~/N-W{s0m^>&$V e^fb9$F35~Sww9-' );
define( 'LOGGED_IN_SALT',   '{rmzkGS4?nVZ%dX-bG*dQAJ3c}AZBrEO=sjH2 5]UsY~X$,77*%f7z@p~mr=d=T9' );
define( 'NONCE_SALT',       '$l<>[p^aOEK1h:>@=1]CBz{~y%Q5hjwD6UNY{&*FM<2+;/nb)0CndPuwY?$x{y(2' );

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
