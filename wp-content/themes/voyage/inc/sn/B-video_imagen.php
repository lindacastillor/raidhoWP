<?php

if (get_sub_field('choose') == 'video_imagen') :
	echo 'one: images';
	$images = get_sub_field('video_foto');
	if($images) : ?>
		<div class="bl-party-one-no-captions"><?php
			foreach( $images as $image ): ?>
				<div>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture>
				</div><?php
			endforeach;
			if(get_sub_field('caption')){ ?>
				<div class="caption decima"><?php the_sub_field('caption') ?></div><?php
			} ?>
		</div><?php
	endif;

elseif (get_sub_field('choose') == 'foto_video') :
	// echo 'two: images';
	$images = get_sub_field('gallery');
	if($images) : ?>
		<div class="bl-party-two-no-captions"><?php
			foreach( $images as $image ): ?>
				<div>
					<picture>
						<img
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture>
				</div><?php
			endforeach;
			if(get_sub_field('caption')){ ?>
				<div class="caption decima"><?php the_sub_field('caption') ?></div><?php
			} ?>
		</div><?php
	endif;

endif; ?>
