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
define( 'AUTH_KEY',         ';3h)5MEXlK=(9O,MXtrr!4(P5t)I/(A<>#lmF4OS)8!@+r0WZ<`=c_Rc)6~z#*Ax' );
define( 'SECURE_AUTH_KEY',  '^S8Ixq-Db,$ph-Pke^!=CEKxC:C,TB;) @B#OI9>8/%{bfntm*ne,VQR]*sOD7z:' );
define( 'LOGGED_IN_KEY',    'mrJT>MFnhi+)|1jrmD~$tfDLu/`:$A+:Il$r`{iN:4ju;r|9&-jd0>.wN1;dd`sL' );
define( 'NONCE_KEY',        'AdZUGXNZxO[,.}GTAqP}:#a{b3jo1|)I,L$$>,:o=EOiZ6UD_c^#Cr{f)?EEaBw[' );
define( 'AUTH_SALT',        'oI;3n#C);QU6Iq9yzfYO^lv=SD)Ld<o`KT8=(g3IZrC+,c[}f>#:4{o5u:[pma]5' );
define( 'SECURE_AUTH_SALT', '%e{WMW^>?C*uKS/Qv+sefP|45$w|=~Vn*F(Vt)qcXG]nAA70YRar4j`3J-G;xNT*' );
define( 'LOGGED_IN_SALT',   'm{2Cx+tufq<oot=ZN~aG:lm#my5.&M}Be0PN^WE`jXYrD|<@keMQ%JGh<Y)n32&=' );
define( 'NONCE_SALT',       'oU{GyO5y.TCkKSo7!TNnTMh)uU|:QI,eOzffo2e@x`:MOY $x.~Y<pDETq_>z21/' );

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
