<?php

/*
Single Work Template
Neue Raidho Website					:	50%
Missing:
- Slider template (Linda)
*/

	$bclass = "page";
	$A = 'A'; ?>

    <?php /* LINDA: añadir funcionalidad de slider más adelante */ ?>
	<div class="section_bottom_margins"><?php

		$images = get_field('cover-slider');
		$imgCount = count( $images );

		if($imgCount == 1) {

			if( $images ):
				foreach( $images as $image ): ?>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'huge' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture><?php
				endforeach;
			endif;

		} else {	/* ?>

			<div id="slider" class="flexslider">
				<?php foreach( $images as $image ): ?>
					<div class="slide">
						<picture>
							<img class="full_width_image"
								 src="<?php echo $image['sizes']['larger']; ?>"
								 <?php echo tevkori_get_srcset_string( $image['ID'], 'huge' ); ?>
								 alt="<?php echo $image['alt']; ?>" />
						</picture>
					</div>
				<?php endforeach; ?>
			</div><?php */

		} ?>
	</div>

	<div class="wrap">
		<div>
			<h1><?php the_title(); ?></h1>
			<h2 class="Leitura"><?php the_field('subtitle'); ?></h2>
			<h2 class="Leitura"><?php the_field('excerpt'); ?></h2>
		</div>
	</div><?php




// Loop for Modules

	while ( have_rows('blocks') ) : the_row();

		if( get_row_layout() == 'imagenes' ) :
			get_template_part('inc/sn/A', 'images');

		elseif( get_row_layout() == 'titling' ) :
			get_template_part('inc/pg/B', 'Titling');

		endif;
	endwhile; ?>


	<div class="contact-banner section_pad">
		<div class="wrap bl-party-share">
			<h2 class="Leitura">Share this project:</h2><?php
			get_template_part('inc/sharer'); ?>

			<h2 class="Leitura"><?php the_field('work_ct_title', 'options'); ?></h2><?php
			the_field('work_ct_form', 'options'); ?>
		</div>
	</div>


	<section class="gray_light_bg">
		<div class="wrap bl-party-three-w-captions">
			<h2 class="Decima">Explore More Projects</h2>
			<ul><?php
			$logQ = new WP_Query( array(
					'post_type' => 'work',
					'posts_per_page' => 3,
					'orderby' => 'rand',
					'paged' => get_query_var( 'paged' )
				)
			);
			while ( $logQ->have_posts() ) { $logQ->the_post();
				$thumbID = get_post_thumbnail_id( $post_id );
				$thumb = wp_get_attachment_image_src($thumbID, 'large'); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php
						if($thumb) {
							echo '<img src="'. $thumb[0] .'" alt="">';
						} ?>
						<p><?php the_title(); ?><span class="Leitura"><?php the_field('subtitle'); ?></span></p>
					</a>
				</li><?php
			}
			wp_reset_postdata(); ?>
			<ul>
		</div>
	</section>
