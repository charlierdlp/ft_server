<?php
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'charlie' );

/** MySQL database password */
define( 'DB_PASSWORD', 'charlie' );

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
define('AUTH_KEY',         'TZWVqisn<o]5|L#[O[Mj]WS<F&ih_!thJd8</vx$Hkrbo.<eIn|%E fPkeD7im9R');
define('SECURE_AUTH_KEY',  '^{o#3AC{0Zaxyut+gOzm+EYZWG$:6&*Vs|C@<.BCEUDdnki9jO-s}+};DP0D fCF');
define('LOGGED_IN_KEY',    '8/zNOi$SYhmZqi{:W[~Z)dI|Ao&4Y,>g|,eR2m?klMC*^|l7!uaPtjUEaVr,^w:;');
define('NONCE_KEY',        '?Sm#`Fo4)Kj9*qV|X)n=pIC4x|`sVt%(0_!D.=Y,SC|5}E%D<Y4$s!FfM9J#Wg!l');
define('AUTH_SALT',        '5`Z)Iyqs5%Q(>0J!Mj>bmQ$4WOf3Jjr-:+[!V9Fv89g$-|;m3/}]@TRlHaBrf/8_');
define('SECURE_AUTH_SALT', '~`3 tq|Px2NH$~9r6{`Mq+D+kP-YM-]4BgX.bhV?,P/dBbY-Mm$9F3a|o1XdqJl-');
define('LOGGED_IN_SALT',   '7:fIj5bXt8#bfy>MGu%>L{A?@a!LOax+JW>o$gRe2lVxk!TCxi@$+m0[M&+xnR;%');
define('NONCE_SALT',       'P+,a]RVC@I *6QJTDoMUTl;O@9a|4{)a*b-6-!aE4hT|QPrbel+aUzKb!kT{#B]t');
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
