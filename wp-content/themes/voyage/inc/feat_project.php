<?php

if(is_page('about') /*|| is_page('contact')*/) {
	$class = 'feat_project_small';
} else {
	$class = 'feat_project';
} ?>

<section class="<?php echo $class; ?>">
	<div class="wrap">
		<div class="feat_project_info">
			<h2><span class="white">Featured Project:</span> <?php the_title(); ?></h2><?php
			if( is_page('about') /*|| is_page('contact')*/ ) {} else { ?>
				<p class="Decima"><?php the_field('excerpt'); ?></p><?php
			} ?>
			<p class="Decima white"><a href="<?php the_permalink(); ?>">Read the full story →</a></p>
		</div>
	</div>
	<div class="transp_back_image" id="ftdBgImg-<?php echo $titBgID; ?>"></div><?php

		$img = get_post_thumbnail_id( $post->ID );

		if($img){
			$img_large = wp_get_attachment_image_src($img, 'large');
			$img_larger = wp_get_attachment_image_src($img, 'larger');
			$img_largest = wp_get_attachment_image_src($img, 'largest');
			$img_huge = wp_get_attachment_image_src($img, 'full-size');

			echo '<style> #bg-'.$titBgID.' {background-image: url(' . $img_large[0] . ');';
			if($bgClr) {
				echo '} #ftdBgImg-'.$titBgID.':before {background-color:'.$bgClr;
			}
			echo '}';
			if($img_large) { echo ' @media (min-width: 1024px) { #ftdBgImg-'.$titBgID.' {background-image: url(' . $img_larger[0] . ');} }'; }
			if($img_larger) { echo ' @media (min-width: 1400px) { #ftdBgImg-'.$titBgID.' {background-image: url(' . $img_largest[0] . ');} }'; }
			if($img_largest) { echo ' @media (min-width: 1800px) { #ftdBgImg-'.$titBgID++.' {background-image: url(' . $img_huge[0] . ');} }'; }
			echo '</style>';

		} ?>
</section>
