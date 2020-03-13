<h1><?php echo esc_html_e( 'Bee Theme Options', 'bee' ); ?></h1>
<?php settings_errors(); ?>  
<form metod="post" action="option.php">
	<?php  settings_fields('bee-settings-group'); ?>
	<?php do_settings_sections('bee_option') ?>
	<?php submit_button(); ?>
</form>