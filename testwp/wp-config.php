<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zy2+Ga6j@{h!e!&M^.J0.8yr~&;.&w}q]4Qb/zG:b|EgSGE&fnfyW|l>,nf6-s]L');
define('SECURE_AUTH_KEY',  '>duFz|5]^Sigsbej<bd=C=^Jhx;5tD[`n:yKa8#mi$4,*DZBI}iBbpZ:ayq}5W;y');
define('LOGGED_IN_KEY',    '#Cq<B1).]2{{x2oBWAkQidt[`Q[+BX_b5*]+Jv+VP6IbLiwY.a_;*(H@L02e}9zj');
define('NONCE_KEY',        '|Uv^Pn$$2.m1va-AEn[IG|sSwvic)-1EB|oG9k{84lgY:lh;I}5p1J~&I`%_-sL4');
define('AUTH_SALT',        'CS55v-z_L+AEug9Gc)SwG<_gutJSbGfLjN-w D wf/7xKv}J~=^;S)|1XvV~tJ2|');
define('SECURE_AUTH_SALT', '>XwTa|ZZl&Hp~2@ jzsT8]0h|MXW%m20>vlHa&P]U0|ln1A]sY Qo /{N1>|ETSf');
define('LOGGED_IN_SALT',   'm,a>E5j3fQg7YP_zrIter?+1S[V)5.)EP3iFn+=:|^`k#Jf)[W/<A~Hx_romxu#G');
define('NONCE_SALT',       'R;RHR2N}R!;[WC&UmV*ZTZhzX?CKdftF$$}6zKpgSJlMP!zCp6!.EHgL-776!%|I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
