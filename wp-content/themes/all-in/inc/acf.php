<?php 
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_sub_page('Settings');
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Analytics');
	acf_add_options_sub_page('Menu');
}

if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Options Settings
	include get_template_directory() . '/inc/acf/settings.php';
	include get_template_directory() . '/inc/acf/analytics.php';
	include get_template_directory() . '/inc/acf/menu.php';
endif;
?>