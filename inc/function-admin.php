<?php  
/**
 * Custom admin page
 **/

//Generate Bee Admin Page
function bee_admin_page() {
	add_menu_page( 'Bee Theme Options', 'Bee Options', 'manage_options', 'bee_option', 'bee_theme_create_page', 'dashicons-admin-generic', 100 );
//Generate Bee Admin Sub Pages	
	add_submenu_page( 'bee_option', 'Bee Theme Options', 'General', 'manage_options', 'bee_option', 'bee_theme_create_page');
	add_submenu_page( 'bee_option', 'Bee Settings', 'Settings', 'manage_options', 'bee_option_settings', 'bee_theme_settings_page');

	
 }
 add_action( 'admin_menu', 'bee_admin_page');

 add_action( 'admin_init', 'bee_custom_settings');
 function bee_theme_create_page(){
	require_once( get_template_directory() . '/inc/bee-admin.php');
}
function bee_theme_settings_page(){

}
function bee_custom_settings(){
	register_setting( 'bee_settings_group', 'custom_option_name');
	add_settings_section( 'bee_sidebar_options', 'Sidebar Option', 'bee_sidebar_options', 'bee_option' );
	add_settings_field( 'sidebar_email', 'E-mail', 'bee_sidebar_email', 'bee_option', 'bee_sidebar_options');
	add_settings_field( 'sidebar_phone', 'Phone', 'bee_sidebar_phone', 'bee_option', 'bee_sidebar_options');
}
function bee_sidebar_options(){
	echo 'Customize your Topbar Information';
}
function bee_sidebar_email(){
	$customEmail = esc_attr(get_option('custom_option_email'));
	echo '<input type="text" name="custom_option_email" value="'.$customEmail.'" placeholder="Your E-mail">';
}
function bee_sidebar_phone(){
	$customPhone = esc_attr(get_option('custom_option_phone'));
	echo '<input type="text" name="custom_option_phone" value="'.$customPhone.'" placeholder="Your Phone">';
}
