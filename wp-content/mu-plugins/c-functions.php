<?php
/**
 * Plugin Name: Custom Functions
 * Plugin URI: http://www.raidho.mx
 * Description: General static functions by Raidho.
 * Author: Raidho
 * Author URI: http://www.raidho.mx
 * Version: 0.1.0
 */





/*
 *	Hide Menu OPTS

	function hide_menu() {
		global $current_user;
		$user_id = get_current_user_id();

		if($user_id != '1') {

			remove_menu_page( 'index.php' );                  	//Dashboard
			remove_menu_page( 'upload.php' );                 	//Media
			remove_menu_page( 'edit-comments.php' );          	//Comments
			remove_menu_page( 'plugins.php' );                	//Plugins
				remove_submenu_page( 'themes.php', 'themes.php' );
				remove_submenu_page( 'themes.php', 'theme-editor.php' );
				remove_submenu_page( 'themes.php', 'customize.php' );
			remove_menu_page( 'nav-menus.php' );              	//Editar Menus
			// remove_menu_page( 'users.php' );                  	Users
			remove_menu_page( 'tools.php' );                  	//Tools
			remove_menu_page( 'options-general.php' );        	//Settings
			remove_menu_page( 'edit.php?post_type=acf' );     	//Advanced Custom Fields
			remove_menu_page( 'admin.php?page=cpt_main_menu' );	//Custom Post Types
			remove_menu_page( 'themes.php' );     			//Custom Fields
		}
	}

	add_action('admin_head', 'hide_menu');
 */









/*
 *  Change Posts => Log
 */

	function revcon_change_post_label() {
		global $menu;
		global $submenu;
		$menu[5][0] = 'Log';
		$submenu['edit.php'][5][0] = 'Log';
		$submenu['edit.php'][10][0] = 'Neue Entry';
		// $submenu['edit.php'][16][0] = 'Nuevas Etiquetas';
		echo '';
	}
	function revcon_change_post_object() {
		global $wp_post_types;
		$labels = &$wp_post_types['post']->labels;
		$labels->name = 'Log';
		$labels->singular_name = 'Log';
		$labels->add_new = 'Neue';
		$labels->add_new_item = 'Neue entry';
		$labels->edit_item = 'Edit entry';
		$labels->new_item = 'Neue';
		$labels->view_item = 'View entry';
		$labels->search_items = 'Search entries';
		$labels->not_found = 'No entries found';
		$labels->not_found_in_trash = 'No entries on trash';
		$labels->all_items = 'Full Log';
		$labels->menu_name = 'Log';
		$labels->name_admin_bar = 'Log';
	}

	add_action( 'admin_menu', 'revcon_change_post_label' );
	add_action( 'init', 'revcon_change_post_object' );










/*
 *  Image handling:
 *
//		1 Tamaños de Imágenes
 */
	add_action( 'after_setup_theme', 'baw_theme_setup' );
	function baw_theme_setup() {
		add_image_size( 'med-sq', 600, 600, true );
		add_image_size( 'larger', 1400, 1400 );
		add_image_size( 'largest', 1800, 1800 );
		add_image_size( 'huge', 2200, 2200 );
	}


//  	2 Tamaños predeterminados

	update_option('thumbnail_size_w', 300);
	update_option('medium_size_w', 600);
	update_option('large_size_w', 1024);
	update_option( 'image_default_size', 'full' );


//  	3 Borrar tamaño original de disco y opción

	function replace_uploaded_image($image_data) {
		// if there is no large image : return
		if (!isset($image_data['sizes']['huge'])) return $image_data;

		// paths to the uploaded image and the large image
		$upload_dir = wp_upload_dir();
		$uploaded_image_location = $upload_dir['basedir'] . '/' .$image_data['file'];
		$large_image_filename = $image_data['sizes']['huge']['file'];

		// Do what wordpress does in image_downsize() ... just replace the filenames ;)
		$image_basename = wp_basename($uploaded_image_location);
		$large_image_location = str_replace($image_basename, $large_image_filename, $uploaded_image_location);

		// delete the uploaded image
		unlink($uploaded_image_location);

		// rename the large image
		rename($large_image_location, $uploaded_image_location);

		// update image metadata and return them
		$image_data['width'] = $image_data['sizes']['huge']['width'];
		$image_data['height'] = $image_data['sizes']['huge']['height'];
		unset($image_data['sizes']['huge']);

		// Check if other size-configurations link to the large-file
		foreach($image_data['sizes'] as $size => $sizeData) {
			if ($sizeData['file'] === $large_image_filename)
			unset($image_data['sizes'][$size]);
		}

		return $image_data;
	}
	add_filter('wp_generate_attachment_metadata', 'replace_uploaded_image');


	function theme_t_wp_set_image_size_options( $sizes ){
		$sizes = array(
			'full' => 'Full Size',
			'thumbnail' => 'Miniatura',
			'medium' => 'Mediana',
			'large' => 'Grande',
			'larger' => __( 'Mas grande' ),
			'largest' => __( 'Grandísimo' ),
			'huge' => __( 'Gigantesco' )
		);
		return $sizes;
	}
	add_filter('image_size_names_choose', 'theme_t_wp_set_image_size_options');







/*
 *  Allow [.svg]
 */

	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );








/*
 *  WYSIWYG Mods
 */

	/*	COLORS  */
	function my_mce4_new_colors( $init ) {
		$default_colours = '';
		$custom_colours = ' "d93636", "Red", "00aacd", "Blue", "FFFFFF", "White" ';
		$init['textcolor_map'] = '['.$custom_colours.','.$default_colours.']';
		return $init;
	}

	add_filter('tiny_mce_before_init', 'my_mce4_new_colors');


	/*	ACF  */
	add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
	function my_toolbars( $toolbars ) {

		$toolbars['Proyect Basic'][1] = array('forecolor' , 'bold' , 'italic' , 'link' , 'unlink' , 'removeformat' );

		// $toolbars['Normal' ] = array();
		// $toolbars['Normal' ][1] = array('styleselect' , 'bold' , 'forecolor' , 'alignleft aligncenter' , 'bullist' , 'indent' , 'outdent' , 'link' , 'unlink' , 'removeformat');

		// remove the 'Full' toolbar completely
		// unset( $toolbars['Full' ] );
		// unset( $toolbars['Basic' ] );

		// return $toolbars - IMPORTANT!
		return $toolbars;
	}


/*  The End  */
