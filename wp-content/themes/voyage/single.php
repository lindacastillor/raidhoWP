<?php
	get_header();

	while(have_posts()) : the_post();

		if(is_singular('work')) :
			get_template_part('inc/single', 'work');

		elseif(get_post_type(get_the_ID()) == "blogpost") :
			get_template_part('inc/single', 'blog');

		else :
			echo 'No template for this';

		endif;

	endwhile;
	get_footer(); ?>
