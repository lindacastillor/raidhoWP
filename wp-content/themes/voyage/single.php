<?php
	get_header();

	while(have_posts()) : the_post();

		if(is_singular('work')) :
			get_template_part('inc/single', 'work');

		elseif(is_singular('post')) :
			get_template_part('inc/single', 'log');

		elseif(is_singular('blog')) :
			get_template_part('inc/single', 'blog');

		else :
			echo 'No template for this';

		endif;

	endwhile;
	get_footer(); ?>
