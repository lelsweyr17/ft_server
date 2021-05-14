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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'lelsweyr' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ';|;:Ud2V2)wotd80-;K-0eOa/h!3f]V*:p0O tL9s6M?J/w|}Sp+F@|Sa#&IhxQO');
define('SECURE_AUTH_KEY',  'g%78mK: Dv&tg|E8)xbl ne+V!;n7R9Jxw_xUj%+wPMe-$g@uL7IdrvST|jl3G1b');
define('LOGGED_IN_KEY',    'P$pV0j=6esjp?jvN13=P[&NdRIo><}US=[dpDw+fEriGu+Ff#IJtc<<*?jKmmjb5');
define('NONCE_KEY',        'X.}Tm&EUu-R?c=joih3_amY<DIYE5P.:|Io}dh#P9YV`5:%>z;E%f 4]+t<-?$W&');
define('AUTH_SALT',        'iMU=Xo]I^I{CPGxFwaXybLT,,W|zG#(b+JnE|X[UfT8=xG|-m,n5`Sft*cw0EVQ(');
define('SECURE_AUTH_SALT', '|$fgHZ+~JvTG`=A[(U{PzK-pPH}W.g2PkDjIhseR:iJO]*}[TCMY.^;uSfhd%6Y ');
define('LOGGED_IN_SALT',   'cy`2>;R#+`|xe-hj?+an[Vzv6aOEFNq;GAT+Y(JQy3Jg4p#D&]BK/+w/7S.R=X@Y');
define('NONCE_SALT',       'DoUFa;-`,$/-]0vS7%MUf+{JbimCr]d<W8*Q4*ty4$gNFNTtJ/w&j+e|?n&/M!ou');

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