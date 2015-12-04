<?php

global $titBgID;
$image = get_sub_field('bg-img');
$bgClr = get_sub_field('bg-color');

$img = $image['ID'];

if($img){
	$img_med = wp_get_attachment_image_src($img, 'medium');
	$img_large = wp_get_attachment_image_src($img, 'large');
	$img_larger = wp_get_attachment_image_src($img, 'larger');
	$img_largest = wp_get_attachment_image_src($img, 'largest');
	$img_huge = wp_get_attachment_image_src($img, 'full-size');

	echo '<div id="bg-'. $titBgID .'" class="back_img_quote"><div class="wrap">';

	echo '<style> #bg-'.$titBgID.' {background-image: url(' . $img_med[0] . ');';
	if($bgClr) {
		echo '} #bg-'.$titBgID.':before {background-color:'.$bgClr;
	}
	echo '}';
	if($img_med) { echo ' @media (min-width: 600px) { #bg-'.$titBgID.' {background-image: url(' . $img_large[0] . ');} }'; }
	if($img_large) { echo ' @media (min-width: 1024px) { #bg-'.$titBgID.' {background-image: url(' . $img_larger[0] . ');} }'; }
	if($img_larger) { echo ' @media (min-width: 1400px) { #bg-'.$titBgID.' {background-image: url(' . $img_largest[0] . ');} }'; }
	if($img_largest) { echo ' @media (min-width: 1800px) { #bg-'.$titBgID++.' {background-image: url(' . $img_huge[0] . ');} }'; }
	echo '</style>';

} elseif($bgClr) {
	echo '<div style="background-color:'.$bgClr.';" class="back_img_quote"><div class="wrap">';

} else {
	echo '<div class="wrap"><div class="section_pad">';
} ?>

		<div><?php
			if(get_sub_field('title')) {
				echo '<p class="blue Decima">'.get_sub_field('title').' <span class="replica">→</span></p>';
			}
			if(get_sub_field('content')) {
				echo '<div class="Leitura medium_title full_width_message">'.get_sub_field('content').'</div>';
			} ?>
		</div>
	</div><?php
	imgCaption($image); ?>
</div>
