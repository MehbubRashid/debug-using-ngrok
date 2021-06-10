<?php

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 */
class Dungrok_Plugin {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'DUNGROK_VERSION' ) ) {
			$this->version = DUNGROK_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'debug-using-ngrok';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_hook_or_initialize();

	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );

	}
	
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'debug-using-ngrok',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

	/**
	 * Include files.
	 *
	 * @return void
	 */
	private function load_dependencies() {

	}

	/**
	 * Defines hook or initializes any class.
	 *
	 * @return void
	 */
	public function define_hook_or_initialize() {

		//Admin enqueue script
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
	}

	/**
	 * Registers menu under tools page
	 *
	 * @return void
	 */
	public function register_menu() {
		add_management_page( __('Debug Using Ngrok'), __('Ngrok debug'), 'manage_options', 'ngrok-debug', array($this, 'render_page') );
	}

	/**
	 * Render the menu page html
	 *
	 * @return void
	 */
	public function render_page() {
		echo 'i am menu page';
	}

	/**
	 * Enqueue admin assets.
	 *
	 * @return void
	 */
	public function admin_scripts() {
		wp_enqueue_script( 'debug-using-ngrok-admin', DUNGROK_ASSETS_URL . 'js/admin.min.js', array( 'jquery' ), null, true );
		wp_enqueue_style( 'debug-using-ngrok-admin', DUNGROK_ASSETS_URL . 'css/admin.min.css', array(), null );
	}

}
