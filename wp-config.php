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
define( 'DB_NAME', 'evawp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lestat' );

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
define( 'AUTH_KEY',         'J3.7CkDd>=]*6N:)_PCXJ@)usBQ`E/<M7*}m;JMy<fA2<~!{c2As|4ui+F+ (zG]' );
define( 'SECURE_AUTH_KEY',  'y8GpV)3ofh^SBeVM<7]DklbfrT3LF-Tp]3`7htg=L `:0Hr~7id;#~.]H+_cD|nH' );
define( 'LOGGED_IN_KEY',    '1CkembaT[.ic|U)AJjc{yA<4*)rjrf-DOS<q2q=;>atHcYOViDSU8u/{d#.{`4cf' );
define( 'NONCE_KEY',        'hZMdJpn|?_.VXf@E4qya[[5p_@*|>q3&?j.$_.q ~L8.~G:G-^o[G=O[i(@,/M 0' );
define( 'AUTH_SALT',        ':&9DvX_[HKq$u1*:AkN{*hfu*ff>Psh]QJz{pK=Ep;mwPY`&^s|=p&od6I?2pNlb' );
define( 'SECURE_AUTH_SALT', '0twkRt3vk/hK>1^E-^)@2llXbDkw;e*(H#[T1:>DH6Qk9<WR)^5K2yvkrO>%dK+=' );
define( 'LOGGED_IN_SALT',   'Eh;*Pm^7-S#_s^Tg,r%qku)~L9k7G8_+I6QlVwp<*^:kF?;0S~bqf|9M@Mh#^S:8' );
define( 'NONCE_SALT',       'NxkJ36fr%DJyzifuy,Z;iv 7$2`_LYk!VN?Niw^I<jQK<u}`z2X5eM)B^JprK|5*' );

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

