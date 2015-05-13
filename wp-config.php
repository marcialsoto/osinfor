<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'marcials_osfr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' Slt+Coc5wpxjeEh#r2J@$Cmia15WJ+3|,iY_w~<j702jB^=~q-;s5;IIn%^y%(^');
define('SECURE_AUTH_KEY',  'FX-)#C_0FYxo|X_}gG+qj9!9DL~Q-*I{zEMB7x6)1XQXE-EDg38g@!?C#;7#|r]l');
define('LOGGED_IN_KEY',    'w;=|/zk+pmM94#`@z=7Tdm,T-mY-kaR<~k5+8-NQPbJt:2^8?^`S=w7b8#$c||U*');
define('NONCE_KEY',        'h{K;.I~q)|>{+a)A|bpg7SC)Fmb+/t@D%IT&|LaQ~u+ :i)GVN?jFs4o |<6R9_y');
define('AUTH_SALT',        'uE}q><lXr;V_h6i+^]ZI>,@+UR0?d>)$+M<0,_$G+;lgm*eTu4zBY-)Kxw)Qi>}i');
define('SECURE_AUTH_SALT', 'R-nd&r[`+Iya?@Wea~UX@+?vHi-;,E2WhyK0C*X=H e041&yc6Kx;#X$RD3#/#e{');
define('LOGGED_IN_SALT',   'mbTi0!|WhZzBQX r[|F/K:F+vYfbL%E; e-s[hob[5R4ree4=BlF~w>MSj[ag).|');
define('NONCE_SALT',       'm;xY$PPR-:<Z78BL(<c:rehn31X0v+@X@.!?eXt=VjI%$`AG^qEW t{[`<ObEk>^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'osfr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define ('WPLANG', 'es_ES');

define('WP_ENV', 'development');
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
