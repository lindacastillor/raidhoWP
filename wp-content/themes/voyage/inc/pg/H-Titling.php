<?php

global $titBgID;
$image = get_sub_field('bg-img');
$bgClr = get_sub_field('bg-color'); ?>


<section class="home_cover phone_hide">
	<div class="wrap">
		<div class="home_cover_info">
			<h1 class="white"><?php the_sub_field('title', false, false); ?></h1>
		</div>
	</div><?php

	imgCaption($image);

	$img = $image['ID'];
	if($img){
		$img_med = wp_get_attachment_image_src($img, 'medium');
		$img_large = wp_get_attachment_image_src($img, 'large');
		$img_larger = wp_get_attachment_image_src($img, 'larger');
		$img_largest = wp_get_attachment_image_src($img, 'largest');
		$img_huge = wp_get_attachment_image_src($img, 'full-size');

		echo '<div id="bg-'. $titBgID .'" class="transp_back_image">
		<style> #bg-'.$titBgID.' {background-image: url(' . $img_med[0] . ');';
		if($bgClr) {
			echo '} #bg-'.$titBgID.':before {background-color:'.$bgClr;
		}
		echo '}';
		if($img_med) { echo ' @media (min-width: 600px) { #bg-'.$titBgID.' {background-image: url(' . $img_large[0] . ');} }'; }
		if($img_large) { echo ' @media (min-width: 1024px) { #bg-'.$titBgID.' {background-image: url(' . $img_larger[0] . ');} }'; }
		if($img_larger) { echo ' @media (min-width: 1400px) { #bg-'.$titBgID.' {background-image: url(' . $img_largest[0] . ');} }'; }
		if($img_largest) { echo ' @media (min-width: 1800px) { #bg-'.$titBgID++.' {background-image: url(' . $img_huge[0] . ');} }'; }
		echo '</style></div>';

	} ?>
</section>
