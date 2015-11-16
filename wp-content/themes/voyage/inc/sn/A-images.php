<?php

if (get_sub_field('choose') == 'one') :
	echo 'one: images';
	$images = get_sub_field('gallery');
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

elseif (get_sub_field('choose') == 'two') :
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


elseif (get_sub_field('choose') == 'one-half') :
	// echo 'one-half: 1 vertical image, 2 Images half the height';
	$images = get_sub_field('gallery');
	if($images) : ?>
		<div class="bl-party-three-one-caption"><?php
			foreach( $images as $image ): ?>
				<div>
					<picture>
						<img src="<?php echo $image['sizes']['larger']; ?>"
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


elseif (get_sub_field('choose') == 'thirds') :
	// echo 'thirds: 3 images, no cap';
	$images = get_sub_field('gallery');
	if($images) : ?>
		<div class="bl-party-three-no-captions"><?php
			foreach( $images as $image ): ?>
				<div>
					<picture>
						<img src="<?php echo $image['sizes']['larger']; ?>"
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


elseif (get_sub_field('choose') == 'thirds-cap') :
	// echo 'thirds-cap: images';
	$images = get_sub_field('gallery');
	if($images) : ?>
		<div class="wrap bl-party-three-w-captions">
			<ul><?php
				foreach( $images as $image ): ?>
					<li>
						<picture>
							<img src="<?php echo $image['sizes']['larger']; ?>"
								 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
								 alt="<?php echo $image['alt']; ?>" />
						</picture><?php
						if($image['caption']){
							echo '<p class="small_paragraph Decima">'. $image['caption'] .'</p>';
						} ?>
					</li><?php
				endforeach;	?>
			<ul>
		</div><?php
	endif;

elseif (get_sub_field('choose') == 'slider') :
	echo 'slider: images<br> @Linda, onstáh esto?';


elseif (get_sub_field('choose') == 'mayhem') :
	$images = get_sub_field('gallery');
	if($images) : ?>
		<div class="wrap bl-party-random-grid section_pad">
			<?php
				$mhmNo = 1;
				foreach( $images as $image ): ?>
					<?php
						if($mhmNo == 1) { ?>
						<div class="rand-grid-a left">
							<div class="rand-grid-a-top">
								<picture>
									<img class="rand-grid-img-<?php echo $nhmNo; ?>"
										 src="<?php echo $image['sizes']['larger']; ?>"
										 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
										 alt="<?php echo $image['alt']; ?>" />
								</picture>
							</div><?php


						} elseif ($mhmNo == 2) { ?>
							<div class="rand-grid-a-bottom">
								<div>
									<picture>
										<img class="rand-grid-img-<?php echo $nhmNo; ?>"
											 src="<?php echo $image['sizes']['larger']; ?>"
											 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
											 alt="<?php echo $image['alt']; ?>" />
									</picture><?php


						} elseif ($mhmNo == 3) { ?>
									<picture>
										<img class="rand-grid-img-<?php echo $nhmNo; ?>"
											 src="<?php echo $image['sizes']['larger']; ?>"
											 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
											 alt="<?php echo $image['alt']; ?>" />
									</picture>
								</div><?php


						} elseif ($mhmNo == 4) {  ?>
								<div>
									<picture>
										<img class="rand-grid-img-<?php echo $nhmNo; ?>"
											 src="<?php echo $image['sizes']['larger']; ?>"
											 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
											 alt="<?php echo $image['alt']; ?>" />
									</picture>
								</div>
							</div>
						</div><?php


						} elseif ($mhmNo == 5) {  ?>
						<div class="rand-grid-c right">
							<picture>
								<img class="rand-grid-img-<?php echo $nhmNo; ?>"
									 src="<?php echo $image['sizes']['larger']; ?>"
									 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
									 alt="<?php echo $image['alt']; ?>" />
							</picture><?php


						} elseif ($mhmNo <= 6) { ?>
							<picture>
								<img class="rand-grid-img-<?php echo $nhmNo; ?>"
									 src="<?php echo $image['sizes']['larger']; ?>"
									 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
									 alt="<?php echo $image['alt']; ?>" />
							</picture><?php


						} elseif ($mhmNo == 8) { ?>
							<picture>
								<img class="rand-grid-img-<?php echo $nhmNo; ?>"
									 src="<?php echo $image['sizes']['larger']; ?>"
									 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
									 alt="<?php echo $image['alt']; ?>" />
							</picture>
						</div><?php
						}
						$mhmNo++;

				endforeach;	?>
		</div><?php
	endif;


endif; ?>
