<?php
/**
 * Main Class
 *
 * @package AdThrive Ads
 */

namespace AdThrive_Ads;

/**
 * Main Plugin class
 */
class Main {

	/**
	 * Class constructor
	 */
	public function __construct() {
		$this->load_dependencies();
	}

	/**
	 * Load the required dependencies for this plugin.
	 */
	private function load_dependencies() {
		require_once( 'cmb2/init.php' );
	}

	/**
	 * Setup components
	 */
	public function setup() {
		$options = new Options();
		$options->setup();

		$components = array(
			'AdThrive_Ads\Components\Ads\Main',
			'AdThrive_Ads\Components\IFrame_Buster\Main',
		);

		$components = apply_filters( 'adthrive_ads_components', $components );

		foreach ( $components as $component ) {
			$instance = new $component();
			$instance->setup();
		}

		add_action( 'adthrive_admin_loaded', array( $this, 'admin_loaded' ) );

		register_activation_hook( ADTHRIVE_ADS_FILE, array( $this, 'plugin_activated' ) );
	}

	/**
	 * Called when the admin page is active
	 */
	public function admin_loaded() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	/**
	 * Add scripts and styles
	 */
	public function admin_enqueue_scripts() {
		wp_enqueue_style( 'adthrive-ads-selectize', plugins_url( 'css/selectize.css', ADTHRIVE_ADS_FILE ), false, ADTHRIVE_ADS_VERSION );
		wp_enqueue_script( 'adthrive-ads-selectize', plugins_url( 'js/selectize.min.js', ADTHRIVE_ADS_FILE ), array( 'jquery' ), ADTHRIVE_ADS_VERSION, true );

		wp_enqueue_style( 'adthrive-ads', plugins_url( 'css/adthrive-ads.css', ADTHRIVE_ADS_FILE ), false, ADTHRIVE_ADS_VERSION );
		wp_enqueue_script( 'adthrive-ads', plugins_url( 'js/adthrive-ads.js', ADTHRIVE_ADS_FILE ), array( 'adthrive-ads-selectize' ), ADTHRIVE_ADS_VERSION, true );
	}

	/**
	 * Import the site id from the AdThrive plugin on first activation
	 */
	public function plugin_activated() {
		$core = get_option( 'adthrive_core' );
		$ads = get_option( 'adthrive_ads' );

		if ( false === $ads && false !== $core && isset( $core['site_id'] ) ) {
			$ads['site_id'] = $core['site_id'];

			update_option( 'adthrive_ads', $ads );
		}
	}
}

$main = new Main;
$main->setup();
