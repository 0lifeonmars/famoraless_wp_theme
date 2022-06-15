<?php
/*CSS*/
function mis_estilos() {
	wp_register_style('general', get_template_directory_uri() . '/assets/css/general.css');
	wp_enqueue_style('general');
}
add_action('wp_enqueue_scripts', 'mis_estilos');
/*scripts*/
function mis_scripts() {
	if (!is_admin()) {
		wp_register_script('jquery', get_bloginfo('template_directory') .'/assets/js/min/jquery.min.js', array('jquery'), '1', true);
		wp_register_script('pushy', get_bloginfo('template_directory') .'/assets/js/plugins/pushy.min.js', array('jquery'), '1', true);
		wp_register_script('slide', get_bloginfo('template_directory') .'/assets/js/plugins/jquery.easy_slides.js', array('jquery'), '1', true);
		wp_register_script('load', get_bloginfo('template_directory') .'/assets/js/plugins/jquery.simpleloadmore.min.js', array('jquery'), '1', true);
		wp_register_script('validate-form', get_bloginfo('template_directory') .'/assets/js/plugins/jquery.validate.min.js', array('jquery'), '1', true);
		wp_register_script('validate-es', get_bloginfo('template_directory') .'/assets/js/plugins/jquery.validate.spanish.min.js', array('jquery'), '1', true);
		wp_register_script('wow', get_bloginfo('template_directory') .'/assets/js/plugins/wow.min.js', array('jquery'), '1', true);
		wp_register_script('general', get_bloginfo('template_directory') .'/assets/js/general.js', array('jquery'), '1', true);
		
		wp_enqueue_script('jquery', array('jquery'), true);
		wp_enqueue_script('pushy', array('jquery'), true);
		wp_enqueue_script('slide', array('jquery'), true);
		wp_enqueue_script('load', array('jquery'), true);
		wp_enqueue_script('validate-form', array('jquery'), true);
		wp_enqueue_script('validate-es', array('jquery'), true);
		wp_enqueue_script('wow', array('jquery'), true);
		wp_enqueue_script('general', array('jquery'), true);
	}
}
add_action("wp_enqueue_scripts", "mis_scripts", 1 );