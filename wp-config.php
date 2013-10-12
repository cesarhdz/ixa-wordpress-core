<?php
/**
 * wp-config.php
 *
 * this file allows to move WordPress as dependency in its own folder,
 * the real wp-config must be in ../wp-config.php and must contain
 * the following constants in order to work:
 *
 * 	- WP_HOME
 * 	- WP_SITEURL
 * 	- WP_PLUGIN_DIR
 * 	- WP_PLUGIN_URL
 * 	- WP_CONTENT_DIR
 * 	- WP_CONTENT_URL
 *  
 * This files causes WordPress to think its already installed and send
 * a database connection error, so the real wp-config must be filled manually
 */

// Require real WP-CONFIG
require_once dirname(dirname(__FILE__)) . '/wp-config.php';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');