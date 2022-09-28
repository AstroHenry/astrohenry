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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fY2+B2bSp1FArzZBYav5XwQLtBpTcXSgeKs7IfH4+Jt+vGEpKC/0VKaReTsEtPx35e2OV+kzjxKx5e9kRXfcVQ==');
define('SECURE_AUTH_KEY',  '5HL93de1g5IAF0zl7tkE27nOtag1dY2LQrg+OTRuCOe7xPpGTZxsueoHjezU9KoS0tof+2v6hlcms6B4Veefvw==');
define('LOGGED_IN_KEY',    'TFeqUoRiShLcVmIKZq/LoRxNrXG/4UYtFZUCR+nJO/6lptDdAWscHRA2+SA/fSbPWz3f5AcceRZAmw9jNGmYbQ==');
define('NONCE_KEY',        'h+5dmQJOphcAzivgzex2qe6sRNft6BWl0EtdCip4L5FvC8o0Nl2/hWNxilTrcAl1a1eLtd+d2e+mLolfxS4iow==');
define('AUTH_SALT',        'xVvsKpOByUbrBgTcEixnfbbw882KA4+nzfpK4pAYT/qXQxLG+zZzi1X0V0NyuyPzkv9LHhN2hOKMiAEOYwrJ3g==');
define('SECURE_AUTH_SALT', 'mvGeJuLcbhKeCyHGyPoTxw4XEcbIZW57Zm09o+9rNs64nik/a7ukERcQ0rGfy035ipPK3NUH6lpsY9HnbCtk1w==');
define('LOGGED_IN_SALT',   'g9DW/F7bL9F0XYpSOcl0jbVn9PnRtzzcmtWk0QKFa43fkrctzn724vjOWKFUYDVGiQdh/oaWSD953RF9HnX8Ag==');
define('NONCE_SALT',       'qoRRPhprSF0dzSU0pCoWN/q7O5L4WHYHRI4K3b5/h+90JbvZ4fckjjteK30W+wJ8kVrSdZceTEfErXKEDRTShw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
