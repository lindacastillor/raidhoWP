<?php

/*
Extended Nav Template
Neue Raidho Website
*/

?>
	<div id="extended_nav"><?php

	// 1 if Default > Get from options
	if(get_field('lower-choose') == 'default') :

		if(get_field('more-choser') == 'log') :
			while (have_rows('more-log', 'options')) {
				the_row();
				get_template_part('inc/pg/exNav_module');
			}
		elseif(get_field('more-choser') == 'blog') :
			while (have_rows('more-blog', 'options')) {
				the_row();
				get_template_part('inc/pg/exNav_module');
			}
		elseif(get_field('more-choser') == 'work') :
			while (have_rows('more-work', 'options')) {
				the_row();
				get_template_part('inc/pg/exNav_module');
			}
		endif;


	// 2 if Custom > get from Repeater
	elseif(get_field('lower-choose') == 'custom') :
		while(have_rows('more-custom')) {
			the_row();
			get_template_part('inc/pg/exNav_module');
		}


	// 3 else (none)
	else :
		// echo 'none';
	endif;


	if(have_rows('shortcuts')) : ?>

		<div class="e_nav_bottom gray_light_bg">
			<div class="wrap"><?php
			$n = 2;


			while(have_rows('shortcuts')) :
				the_row();

				$orExcerpt = get_sub_field('or-excerpt');
				$pShtct = get_sub_field('link');


				$img = wp_get_attachment_image_src( get_post_thumbnail_id($pShtct->ID), 'medium'); ?>

				<div class="e_nav<?php echo $n++; ?>">
					<a class="nav2_bttn" href="<?php echo post_permalink( $pShtct->ID ); ?>">
						<div style="background-image: url(<?php echo $img[0]; ?>)">
						</div>
						<div>
							<h4><?php echo $pShtct->post_title; ?></h4>
							<div class="Decima"><?php
								if($orExcerpt){
									echo $orExcerpt;
								} else {
									the_field('excerpt', $pShtct->ID);
								} ?>
								<span class="phone_hide red">Continue to <?php echo $pShtct->post_title; ?> →</span>
							</div>
						</div>
					</a>
				</div><?php

			endwhile; ?>
			</div>
		</div><?php
	endif;	?>

	</div>
