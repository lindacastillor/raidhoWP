<?php

	/*
	 *	Template Name: Home
	 */

	$bclass = "page";
	get_header();

	global $post;
	$post_slug=$post->post_name;
	$titBgID = A;


	while ( have_rows('intro') ) { the_row();
		get_template_part('inc/pg/H', 'Titling');
	}


	$poste = get_field('ftd-project', 'options');
	$random = array_rand($poste, 1);
	$the_query = new WP_Query( array( 'post_type' => 'work', 'p' => $poste[$random], 'posts_per_page' => 1 ) );
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		get_template_part('inc/feat_project');
	}
	wp_reset_postdata();


	get_template_part('inc/pg/H', 'Slider'); ?>


<section id="loader" class="wrap">
	<h2 class="Decima">Recent Activity</h2>
	<ul class="log masonry" style="position: relative; height: 1401.58px;">
		<!-- Masonry gutter sizer -->
		<li class="masonry_gutter"></li>
		<!-- Masonry columnWidth sizer -->
		<li class="masonry_column"></li>
		<!-- Masonry items --><?php

		$recentQ = new WP_Query(
			array(
				'post_type' => array( 'post', 'blog', 'work' ),
				'posts_per_page' => 12,
				'paged' => get_query_var( 'paged' )
			)
		);

		while ( $recentQ->have_posts() ) { $recentQ->the_post();
			get_template_part('inc/log_cards');
		}
		wp_reset_postdata(); ?>
	</ul>
</section><?php

	get_template_part('inc/extended_nav');


get_footer(); ?>
