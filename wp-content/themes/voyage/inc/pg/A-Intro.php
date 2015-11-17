<div class="wrap">
	<div><?php
		if(get_sub_field('kicker')){
			echo '<h2 class="Decima">'.get_sub_field('kicker').'</h2>';
		}
		if(get_sub_field('content')){
			echo '<h1 class="Leitura">'.get_sub_field('content').'</h1>';
		} ?>
	</div>
</div><?php


$image = get_sub_field('img');
if($image) { ?>

	<div class="section_bottom_margins">
		<picture>
			<img class="full_width_image"
				 src="<?php echo $image['sizes']['huge']; ?>"
				 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
				 alt="<?php echo $image['alt']; ?>" />
		</picture>
	</div><?php

} else {
	echo '<hr>';
} ?>
