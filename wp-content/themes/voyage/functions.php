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




/*
 *  Exclude previously selected Case Studies
 */

	function exclude_single_posts_home($query) {
		if ($query->is_archive('work') && $query->is_main_query()) {

			$two_obj = get_field('two_featured', 4196);
			foreach ($two_obj as $post) :
				setup_postdata($post);
				$two_ids[] .= $post->ID;
			endforeach;

			$three_obj = get_field('three_featured', 4196);
			foreach ($three_obj as $post) :
				setup_postdata($post);
				$two_ids[] .= $post->ID;
			endforeach;

			$query->set('post__not_in', $two_ids);
		}
	}
	add_action('pre_get_posts', 'exclude_single_posts_home');




/*
 * Image Captions
 */

	function imgCaption($image) {
		if($image['caption'] || $image['title']) :
			print '<div class="Decima caption">';
			if($image['alt']){
				print '<a href="'.$image['alt'].'" target="_blank">';
			}
			if($image['title']){
				print '<span>'.$image['title'].'</span> ';
			}
			if($image['caption']){
				print $image['caption'];
			}
			if($image['alt']){
				print '</a>';
			}
			print '</div>';
		endif;
	}
