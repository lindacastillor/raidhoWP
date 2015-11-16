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
			get_template_part('inc/pg/B', 'titling');

			/* Use Page Module
			if(get_sub_field('bg-img')) {
				$img = get_sub_field('bg-img');
				$bgClr = get_sub_field('bg-color');

				$img_med = wp_get_attachment_image_src($img, 'medium');
				$img_large = wp_get_attachment_image_src($img, 'large');
				$img_larger = wp_get_attachment_image_src($img, 'larger');
				$img_largest = wp_get_attachment_image_src($img, 'largest');
				$img_huge = wp_get_attachment_image_src($img, 'full-size');

				if($img){
					echo '<style> #bg-'.$A.' {background-image: url(' . $img_med[0] . ');';
					if($bgClr) {
						echo '} #bg-'.$A.':before {background-color:'.$bgClr;
					}
					echo '}';
					if($img_med) { echo ' @media (min-width: 600px) { #bg-'.$A.' {background-image: url(' . $img_large[0] . ');} }'; }
					if($img_large) { echo ' @media (min-width: 1024px) { #bg-'.$A.' {background-image: url(' . $img_larger[0] . ');} }'; }
					if($img_larger) { echo ' @media (min-width: 1400px) { #bg-'.$A.' {background-image: url(' . $img_largest[0] . ');} }'; }
					if($img_largest) { echo ' @media (min-width: 1800px) { #bg-'.$A.' {background-image: url(' . $img_huge[0] . ');} }'; }
					echo '</style>';
				}
				echo '<div id="bg-'. $A++ .'" class="back_img_quote">';
			} ?>
				<div class="wrap">
					<div>
						<p class="blue Decima"><?php the_sub_field('title'); ?></p>
						<p class="Leitura medium_title"><?php the_sub_field('content'); ?></p>
					</div>
				</div><?php
			if(get_sub_field('bg-img')) {
				echo '</div>';
			} */


		endif;
	endwhile;



	get_template_part('inc/contact_share');
	// more projects ?>
	<section class="gray_light_bg">
	    <div class="wrap bl-party-three-w-captions">
	        <h2 class="Decima">Explore More Projects</h2>
	        <ul>
	            <li>
	                <img src="http://lorempixel.com/380/380/technics">
	                <p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
	            </li>
	            <li>
	                <img src="http://lorempixel.com/380/380/technics">
	                <p>Comunidad VIVEX. <span class="Leitura">Re-defining the News in Mexico.</span></p>
	            </li>
	            <li>
	                <img src="http://lorempixel.com/380/380/technics">
	                <p>Knock your Wear. <span class="Leitura">Professional Image Consulting.</span></p>
	            </li>
	        <ul>
	    </div>
	</section>
