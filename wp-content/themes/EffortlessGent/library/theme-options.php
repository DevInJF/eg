<?php
	
	// Create custom theme settings Menu
	add_action('admin_menu', 'eg_create_menu', 1);
	
	function eg_create_menu() {
		// Create New Menu
		add_menu_page('EG Options', 'EG Options', 'manage_options', 'eg-menu', $function = 'eg_settings_page', '', $position = '28');
	}

	// call register settings function
	add_action( 'admin_init', 'eg_register_settings' );

	function eg_register_settings() {
			// Base Settings
		register_setting( 'eg-settings-group', 'eg_logo' );
		register_setting( 'eg-settings-group', 'alert_text' );
		register_setting( 'eg-settings-group', 'alert_link_text' );
		register_setting( 'eg-settings-group', 'alert_link' );
		register_setting( 'eg-settings-group', 'alert_cookie' );

	}

	function eg_settings_page() {
?>		
		<style type="text/css">
			table {
				padding: 10px;
				margin-bottom: 20px;
			}

			caption {
				float: left;
				font-weight: bold;
			}
			th {
				font-weight: normal;	
			}
			.small {
				font-size: 10px;
			}
		</style>
		<div class="wrap">
			<h2>Effortless Gent Options Page</h2>
			<form id="landingOptions" method="post" action="options.php">
				<?php settings_fields( 'eg-settings-group' ); ?>
				<table>
					<caption>Basic Settings</caption>
					<tr valign="top">
						<th scope="row">Logo:</th>
						<td>
							<input type="text" name="eg_logo" value="<?php print get_option('eg_logo'); ?>" />
							<span class="small"><br/>*Upload using the Media Uploader<br/> and paste the URL here.</span>
						</td>
					</tr>			
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr valign="top">
						<th scope="row">Alert Text:</th>
						<td>
							<input type="text" name="alert_text" value="<?php print get_option('alert_text'); ?>" />
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Alert Link Text:</th>
						<td>
							<input type="text" name="alert_link_text" value="<?php print get_option('alert_link_text'); ?>" />
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Alert Link:</th>
						<td>
							<input type="text" name="alert_link" value="<?php print get_option('alert_link'); ?>" />
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Alert Delay:</th>
						<td>
							<input type="text" name="alert_cookie" value="<?php print get_option('alert_cookie'); ?>" />
							<br/><span class="small">*NOTE: This doesn't actually do anything right now.</span>
							<br/><span class="small">Amount of time (in days) the alert will stay hidden for each user.</span>
						</td>
					</tr>
				</table>

				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
				</p>
			</form>
		</div>
<?php }

?>