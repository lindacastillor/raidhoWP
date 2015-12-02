<?php

	/*
	 *	Template Name: Recent Template
	 */

	get_header(); ?>

<section id="loader" class="wrap">
	<div class="filter_header">
		<h2 class="Decima">Recent Activity</h2>
		<ul class="log_filter">
			<span class="Decima">Filter: </span><?php
			get_template_part('inc/log_filter'); ?>
		</ul>
	</div>


	<ul class="log masonry">
		<!-- Masonry gutter sizer -->
		<li class="masonry_gutter"></li>
		<!-- Masonry columnWidth sizer -->
		<li class="masonry_column"></li>
		<!-- Masonry items --><?php
		global $post;
		query_posts(
			array(
				'post_type' => array( 'post', 'blog', 'work' ),
				'posts_per_page' => 50,
				'paged' => get_query_var( 'paged' )
			)
		);
		while ( have_posts() ) { the_post();
			get_template_part('inc/log_cards');
		}
		wp_reset_postdata(); ?>
	</ul>
</section>

<?php

	get_template_part('inc/extended_nav');
	get_footer(); ?>
