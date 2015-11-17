<div class="wrap">
	<div class="Decima about_intro">
		<div><?php
			if(get_sub_field('choose')) {
				$image = get_sub_field('img-1');
				if($image) { ?>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture><?php
				}
			} ?>
			<h4><?php the_sub_field('txt-1'); ?></h4>
		</div>
		<div>
			<h4><?php the_sub_field('txt-2'); ?></h4><?php
			if(get_sub_field('choose')) {
				$image = get_sub_field('img-2');
				if($image) { ?>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture><?php
				}
			} ?>
		</div>
	</div>
</div>
