<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://ljapps.com
 * @since      1.0.0
 *
 * @package    WP_Google_Reviews
 * @subpackage WP_Google_Reviews/admin/partials
 */

    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // wordpress will add the "settings-updated" $_GET parameter to the url
    if (isset($_GET['settings-updated'])) {
        // add settings saved message with the class of "updated"
        add_settings_error('wpfbr_messages', 'wpfbr_message', __('Settings Saved', 'wp-google-reviews'), 'updated');
    }
    // show error/update messages
    settings_errors('wpfbr_messages');
?>

<div class="wrap" id="wp_rev_maindiv">
<h1></h1>
<img class="wprev_headerimg" src="<?php echo plugin_dir_url( __FILE__ ) . 'logo.png'; ?>">
<?php 
include("tabmenu.php");
?>	

	<div id='placeid_div'>
	<div class="wpfbr_margin10">
<div class="w3-col welcomediv w3-container w3-white w3-border w3-border-light-gray2 w3-round-small">
	<form action="options.php" method="post" id='newreviewform'>
		<?php
		// get the value of the setting we've registered with register_setting()
		$options = get_option('wpfbr_google_options');

		// output security fields for the registered setting "wp_fb-google_settings"
		settings_fields('wp_fb-google_settings');
		// output setting sections and their fields
		// (sections are registered for "wp_fb-google_settings", each field is registered to a specific section)
		do_settings_sections('wp_fb-google_settings');
		// output save settings button
		//submit_button('Save Settings');

	?>
	<p class="submit">
		<input name="submit" id="submit" class="button button-primary" value="Save Settings" type="submit">&nbsp;&nbsp;

		<?php
		if( ! empty( $options['google_location_set']['place_id'] )) {
		?>
		<button onclick='getgooglereviewsfunction("<?php echo esc_attr( $options['google_location_set']['place_id'] ); ?>")' id="wpfbr_getgooglereviews" type="button" class="btn_green">Retrieve Reviews</button><br/>
		<p class="description">
		<?php _e('Google only allows a max 5 reviews to be downloaded. Use the "Auto Fetch Reviews" above to slowly build up your database.', 'wp-google-reviews'); ?>
		</p>
		<p class="description">
		<?php _e('- Pro version allows you to grab <b>all your reviews</b> not just your 5 Most Helpful using our new Review Funnel feature! You can also retrieve reviews for multiple places.', 'wp-google-reviews'); ?>
		</p>
		<?php } else {?>
		<button onclick='alert("Please enter the Location above and click Save Settings.");' title="Please enter the Location above and click Save Settings." id="wpfbr_getgooglereviews" type="button" class="button button-secondary btn_off">Retrieve Reviews</button><span class='wpfbr_hide2'><i> Please enter the Location above and click Save Settings.</i></span>
		<?php } ?>
	</p>
	</form>
	</div>
</div>
</div>

	<div id="popup" class="popup-wrapper wpfbr_hide">
	  <div class="popup-content">
		<div class="popup-title">
		  <button type="button" class="popup-close">&times;</button>
		  <h3 id="popup_titletext"></h3>
		</div>
		<div class="popup-body">
		  <div id="popup_bobytext1"></div>
		  <div id="popup_bobytext2"></div>
		</div>
	  </div>
	</div>
</div>