<?php

// Setting Options
function custom_setting() {
	add_settings_section( 'custom_setting_section', 'Social Media Area', 'setting_section_func', 'general' );

	add_settings_field( 'custom_fb_field', 'Facebook URL', 'fb_field_func', 'general', 'custom_setting_section' );
	register_setting( 'general', 'custom_fb_field' );

	add_settings_field( 'custom_yt_field', 'Youtube URL', 'yt_field_func', 'general', 'custom_setting_section' );
	register_setting( 'general', 'custom_yt_field' );

	add_settings_field( 'custom_lin_field', 'LinkedIn URL', 'lin_field_func', 'general', 'custom_setting_section' );
	register_setting( 'general', 'custom_lin_field' );

	add_settings_field( 'custom_twt_field', 'Twitter URL', 'twt_field_func', 'general', 'custom_setting_section' );
	register_setting( 'general', 'custom_twt_field' );
}
function setting_section_func() {
	echo "You can add your social media link here.";
}
function fb_field_func() {
	$url = get_option( 'custom_fb_field' );
	?>
		<input class="regular-text" type="url" name="custom_fb_field" value="<?php echo $url; ?>" placeholder="Your Facebook URL.....">
	<?php
}
function yt_field_func() {
	$url = get_option( 'custom_yt_field' );
	?>
		<input class="regular-text" type="url" name="custom_yt_field" value="<?php echo $url; ?>" placeholder="Your Youtube URL.....">
	<?php
}
function lin_field_func() {
	$url = get_option( 'custom_lin_field' );
	?>
		<input class="regular-text" type="url" name="custom_lin_field" value="<?php echo $url; ?>" placeholder="Your LinkedIn URL.....">
	<?php
}
function twt_field_func() {
	$url = get_option( 'custom_twt_field' );
	?>
		<input class="regular-text" type="url" name="custom_twt_field" value="<?php echo $url; ?>" placeholder="Your Twitter URL.....">
	<?php
}
add_action( 'admin_init', 'custom_setting' );


?>
