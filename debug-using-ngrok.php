<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.facebook.com/disismehbub
 * @since             1.0.0
 * @package           Debug_Using_Ngrok
 *
 * @wordpress-plugin
 * Plugin Name:       Debug Using Ngrok
 * Plugin URI:        https://divdojo.com
 * Description:       Send debug logs to your ngrok server and view those logs of your code execution that cannot be seen or debugged in the browser.
 * Version:           1.0.1
 * Author:            Mehbub Rashid
 * Author URI:        https://www.facebook.com/disismehbub
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       debug-using-ngrok
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DUNGROK_VERSION', '1.0.1' );

/**
 * Define plugin path and plugin url.
 */
define( 'DUNGROK_PATH', plugin_dir_path( __FILE__ ) );
define( 'DUNGROK_URL', plugin_dir_url( __FILE__ ) );
define( 'DUNGROK_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/dist/' );

/**
 * The code that runs during plugin activation.
 */
function dungrok_activate() {
	
}

/**
 * The code that runs during plugin deactivation.
 */
function dungrok_deactivate() {
	
}

register_activation_hook( __FILE__, 'dungrok_activate' );
register_deactivation_hook( __FILE__, 'dungrok_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function dungrok_run() {

	require_once __DIR__ . '/includes/functions.php';
	$plugin = new Dungrok_Plugin();

}
dungrok_run();
