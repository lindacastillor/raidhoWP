<?php

/*
 *	Single Log Template
 *	Neue Raidho Website
*/

	$bclass = ""; ?>


	<div class="wrap">

		<div class="log_single_wrap">
			<div>
				<?php get_the_image( array( 'meta_key' => array( 'Thumbnail', 'thumbnail' ), 'size' => 'thumbnail', 'image_scan' => true, 'link_to_post' => false ) ); ?>
			</div>
			<div>
				<h4><?php the_title(); ?></h4>
				<p>Posted on <?php
					$postType = get_post_type( $post->ID );
					foreach(get_the_category() as $category) {
						$catSlug = $category->name;
						echo $catSlug.'. ';
					} ?></br> <?php
					the_time('d/m/Y'); ?>
				</p><?php
				get_template_part('inc/sharer'); ?>
			</div>
		</div>

	</div>

	<section id="loader" class="wrap">
		<h2 class="Decima">Recent Activity</h2>

		<ul class="log masonry">
			<!-- Masonry gutter sizer -->
			<li class="masonry_gutter"></li>
			<!-- Masonry columnWidth sizer -->
			<li class="masonry_column"></li>
			<!-- Masonry items --><?php

			$logQ = new WP_Query( array(
					'post_type' => array( 'post', 'blog', 'work' ),
					'posts_per_page' => 12,
					'paged' => get_query_var( 'paged' )
				)
			);
			while ( $logQ->have_posts() ) { $logQ->the_post();
				get_template_part('inc/log_cards');
			}
			wp_reset_postdata(); ?>
		</ul>
	</section><?php

	get_template_part('inc/extended_nav'); ?>
