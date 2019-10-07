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
if (in_array($_SERVER['REMOTE_ADDR'], ['::1'])) {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'local-eq');

    /** MySQL database username */
    define('DB_USER', 'equator');

    /** MySQL database password */
    define('DB_PASSWORD', 'pN$ds237ALunzjwy');

    /** MySQL hostname */
} else {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'equator');

    /** MySQL database username */
    define('DB_USER', 'equator');

    /** MySQL database password */
    define('DB_PASSWORD', 'pN$ds237ALunzjwy');
}
/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '< $`YkeP>Ik[Odj(^=:Bn2~^?eWJnU`P8{!j^$r39]3-1Sp+Q^0:.qo4NuJq<3Rl');
define('SECURE_AUTH_KEY', '8h[cs!l:XC 7b?g~-MJdbkA8pEY01QQ3SUTBSF&}Rh(O.qKt.NrGp^w#uEI~nk&h');
define('LOGGED_IN_KEY', 'u`gN*(U7GafGgrqIETv 8bIn#/I?VhiuwW! o jOhk=}FXdrA_WTcZU4O.@@JQjM');
define('NONCE_KEY', '.a)R`JNA&FYI}9A0W!Q%|5_m6tpO[`` f-vw3u>,dGUd`sG%Uj{X;^u|#dx`K*k%');
define('AUTH_SALT', '^=N@h`<-m{`#CrcX=Qh}}B56x,bwsJ2It~=5}Om|kY;58$%W8vMup,- bX5w*S]m');
define('SECURE_AUTH_SALT', 'Sh2F-IOJ$^Zp1XxX`Azskb{ <^?^_KY$(kWLRFL*~bLLAlgCSNIk=GUEvkcw}GN7');
define('LOGGED_IN_SALT', '#x3u^Mzd4?H$ffeVjjERMsG@2`(lT>VDi*9r]SEcjM(beq0 ;mV#6X=NR$s/6C^=');
define('NONCE_SALT', '9V8]9Gz_9.u$)$%ew8fk:KC|@ryp=i]M_%305~O2|PcgJ`uC|%&62>Q-qf}zYqth');

/* * #@- */

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
