<?php
/**
 * IFrame Buster Main Class
 *
 * @package AdThrive Mobile
 */

namespace AdThrive_Ads\Components\IFrame_Buster;

/**
 * Main class
 */
class Main {

	/**
	 * Add hooks
	 */
	public function setup() {
		add_action( 'template_redirect', array( $this, 'template_redirect' ) );
	}

	/**
	 * Add the iframe busters
	 */
	public function template_redirect() {
		global $wp_query;

		if ( is_404() ) {
			$paths = array(
				'/adcentric/ifr_b.html',
				'/adcom/aceFIF.html',
				'/adinterax/adx-iframe-v2.html',
				'/doubleclick/DARTIframe.html',
				'/eyeblaster/addineyeV2.html',
				'/eyereturn/eyereturn.html',
				'/eyewonder/interim.html',
				'/jivox/jivoxIBuster.html',
				'/klipmart/km_ss.html',
				'/rubicon/rp-smartfile.html',
				'/saymedia/iframebuster.html',
				'/smartadserver/iframeout.html',
				'/undertone/UT_IFRAME_buster.html',
				'/unicast/unicastIFD.html',
				'/unicast/UnicastIframe.html',
				'/viewpoint/vwpt.html',
			);

			$uri = filter_input( INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_URL );

			$current_path = parse_url( $uri, PHP_URL_PATH );

			$file = plugin_dir_path( __FILE__ ) . 'partials' . $current_path;

			if ( in_array( $current_path, $paths, true ) && file_exists( $file ) ) {
				status_header( 200 );

				header( 'Content-type: text/html' );

				readfile( $file );

				exit;
			}
		}
	}
}
