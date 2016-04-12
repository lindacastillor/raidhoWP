<?php

/*
Template Name: Work Template
Neue Raidho Website
*/

get_header();

?>

<section id="recent_work">

	<div class="wrap project_wrapper"><?php


		$two_obj = get_field('two_featured', 4196);

		if($two_obj): ?>
		<div class="bl-party-two-w-captions">
			<ul><?php
			foreach ($two_obj as $post) :
				setup_postdata($post); ?>

				<li>
					<a href="<?php the_permalink(); ?>"><?php

						// cycled images
						$images = get_field('cycle_gallery');
						if (has_post_thumbnail( $post->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'larger' );

							if($images) echo '<div class="cycled-featured main" id="main">'; ?>
							<img src="<?php echo $image[0]; ?>" /><?php
							if($images) echo '</div>';

						endif;

						if( $images ):
							foreach( $images as $image ):
							$imgUrl = wp_get_attachment_image_src($image, 'larger'); ?>
								<div class="cheese" style="display:none;">
									<img src="<?php echo $imgUrl[0]; ?>" />
								</div>
							<?php endforeach;
						endif; ?>

						<p><?php the_title(); ?> <span class="Leitura"><?php the_field('subtitle'); ?></span></p>
					</a>
				</li><?php
				$two_ids[] .= $post->ID;

			endforeach;
			wp_reset_postdata(); ?>
			</ul>
		</div><?php
		endif;


		$three_obj = get_field('three_featured', 4196);

		if($three_obj): ?>
		<div class="bl-party-three-w-captions">
			<ul><?php
			foreach ($three_obj as $post) :
				setup_postdata($post); ?>

				<li>
					<a href="<?php the_permalink(); ?>"><?php

						// cycled images
						$images = get_field('cycle_gallery');

						if (has_post_thumbnail( $post->ID ) ):
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'med-sq' );

							if($images) echo '<div class="cycled-featured main" id="main">'; ?>
							<img src="<?php echo $image[0]; ?>" /><?php
							if($images) echo '</div>';

						endif;


						if( $images ):
							foreach( $images as $image ):
							$imgUrl = wp_get_attachment_image_src($image, 'larger'); ?>
								<div class="cheese" style="display:none;">
									<img src="<?php echo $imgUrl[0]; ?>" />
								</div>
							<?php endforeach;
						endif; ?>

						<p><?php the_title(); ?> <span class="Leitura"><?php the_field('subtitle'); ?></span></p>
					</a>
				</li><?php
				$two_ids[] .= $post->ID;

			endforeach;
			wp_reset_postdata(); ?>
			</ul>
		</div><?php
		endif;




		// Excludes Case Studies selected above (view functions.php-Line31)

		if(have_posts()): ?>
			<div class="bl-party-four-w-captions">
				<ul><?php
				while(have_posts()): the_post(); ?>

					<li>
						<a href="<?php the_permalink(); ?>"><?php

							// cycled images
							$images = get_field('cycle_gallery');

							if (has_post_thumbnail( $post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'med-sq' );

								if($images) echo '<div class="cycled-featured main" id="main">'; ?>
								<img src="<?php echo $image[0]; ?>" width="380"  /><?php
								if($images) echo '</div>';

							endif;


							if( $images ):
								foreach( $images as $image ):
								$imgUrl = wp_get_attachment_image_src($image, 'larger'); ?>
									<div class="cheese" style="display:none;">
										<img src="<?php echo $imgUrl[0]; ?>" />
									</div>
								<?php endforeach;
							endif; ?>

							<p><?php the_title(); ?> <span class="Leitura"><?php the_field('subtitle'); ?></span></p>
						</a>
					</li><?php

				endwhile; ?>
				</ul>
			</div><?php
		endif; ?>


	</div>

</section><?php



	$archQ = new WP_Query( 'page_id=4196' );
	while ( $archQ->have_posts() ) {
		$archQ->the_post();
		get_template_part('inc/extended_nav');
	}
	get_footer(); ?>
