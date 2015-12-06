<?php

	$image = get_field('hzn_image');

	if( $image ): ?>
	<div class="section_bottom_margins">
		<picture>
			<img class="full_width_image"
				 src="<?php echo $image['sizes']['large']; ?>"
				 <?php echo tevkori_get_srcset_string( $image['ID'], 'huge' ); ?>
				 alt="<?php echo $image['alt']; ?>" />
		</picture><?php
		imgCaption($image); ?>
	</div><?php
	endif; ?>

<div class="wrap">
	<div class="blog_wrap">
		<div class="blog_header">
			<h1 class="replica"><?php the_title(); ?></h1>
			<div class="regular_title Leitura"><?php the_excerpt(); ?></div>
			<p class="meta Decima">Posted on Blog</br> <?php the_time('d/m/Y'); ?></p><?php

			get_template_part('inc/sharer'); ?>

		</div>
		<div class="blog_body Leitura">
			<?php the_content(); ?>
		</div>

		<div class="blog_foot"><?php

			get_template_part('inc/sharer'); ?>

			<div class="blog_more">
				<h3 class="Decima">More Blog Posts</h3>
				<ul><?php
				$logQ = new WP_Query( array(
						'post_type' => 'blog',
						'posts_per_page' => 2,
						'orderby' => 'rand',
						'paged' => get_query_var( 'paged' )
					)
				);
				while ( $logQ->have_posts() ) { $logQ->the_post();
					$thumbID = get_post_thumbnail_id( $post_id );
					$thumb = wp_get_attachment_image_src($thumbID, 'large'); ?>
					<li><?php
						if($thumb) {
							echo '<img src="'. $thumb[0] .'" alt="">';
						} ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li><?php
				}
				wp_reset_postdata(); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
