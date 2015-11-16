<?php 


// 	Theme Supports 

	add_editor_style('css/wysiwyg.css');
	add_theme_support( 'post-thumbnails' );





/*
 *  ACF - Options  
 */

	if( function_exists('acf_add_options_page') ) { 
		acf_add_options_page(array(
			'page_title' 	=> 'General Options',
			'menu_title'	=> 'Options',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		)); 
	}






