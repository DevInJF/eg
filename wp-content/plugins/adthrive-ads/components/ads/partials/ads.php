<?php
/**
 * Ads partial view
 *
 * @package AdThrive Ads
 */

if ( ! defined( 'ADTHRIVE_ADS_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
?>
<script>
window.adthrive = window.adthrive || {};
window.adthrive.cmd = window.adthrive.cmd || [];
window.adthrive.host = 'ads.adthrive.com';
window.adthrive.plugin = 'adthrive-ads-<?php echo esc_js( ADTHRIVE_ADS_VERSION ); ?>';

(function() {
	var script = document.createElement('script');
	script.async = true;
	script.type = 'text/javascript';
	script.src = document.location.protocol + '//' + window.adthrive.host + '/sites/<?php esc_attr_e( $data['site_id'] ); ?>/ads.min.js';
	var node = document.getElementsByTagName('script')[0];
	node.parentNode.insertBefore(script, node);
})();
</script>
