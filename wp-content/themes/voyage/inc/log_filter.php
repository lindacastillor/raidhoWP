<?php

	$category = get_the_category();
	while (have_rows('filters', 'option')) :
		the_row('filters', 'option');
			if($category[0]->cat_ID == get_sub_field('tax') || is_archive('blog') && get_sub_field('tax') == 2 ){
				echo '<li class="current">';
			} else {
				echo '<li>';
			} ?>
				<a href="<?php
				if( get_sub_field('tax') == 1 ) {  // Substitute Work
					echo esc_url( home_url( '/work' ) );
				} elseif( get_sub_field('tax') == 2 ) {  // Substitute Blog
					echo esc_url( home_url( '/blog' ) );
				} else {
					echo get_category_link(get_sub_field('tax'));
				} ?>">
					<?php the_sub_field('code'); ?>
				</a>
			</li><?php
	endwhile;
?>
