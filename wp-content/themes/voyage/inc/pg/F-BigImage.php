<?php

$image = get_sub_field('big-img');
if( !empty($image) ): ?>

	<picture>
		<img class="full_width_image"
			 src="<?php echo $image['sizes']['larger']; ?>"
			 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
			 alt="<?php echo $image['alt']; ?>" />
	</picture><?php

endif; ?>
