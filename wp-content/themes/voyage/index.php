<?php

	/*
	 *	Template Name: Index/Recent Template
	 */

	get_header(); ?>

<section id="loader" class="wrap">
	<div class="filter_header">
		<h2 class="Decima">Recent Activity: <?php
			if(is_archive('blog')){
				echo 'Blog';
			} else {
				echo single_cat_title( '', true );
			} ?></h2>
		<ul class="log_filter">
			<span class="Decima">Filter: </span><?php
			get_template_part('inc/log_filter'); ?>
		</ul>
	</div><?php


	if ( have_posts() ) : ?>
	<ul class="log masonry">
		<!-- Masonry gutter sizer -->
		<li class="masonry_gutter"></li>
		<!-- Masonry columnWidth sizer -->
		<li class="masonry_column"></li>
		<!-- Masonry items --><?php
		while ( have_posts() ) : the_post();

			get_template_part('inc/log_cards');

		endwhile; ?>
	</ul><?php
	endif; ?>

</section><?php

	$query1 = new WP_Query( 'post_type=page&pagename=recent' );
	while ( $query1->have_posts() ) {
	$query1->the_post();
		get_template_part('inc/extended_nav');
	}
	wp_reset_postdata();

	get_footer(); ?>
