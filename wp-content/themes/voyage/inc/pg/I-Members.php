<div class="wrap">
	<h2 class="Decima">People at Raidho</h2><?php


	if(have_rows('founder')) : ?>
	<div class="people_founders"><?php
		while(have_rows('founder')) : the_row(); ?>
			<div><?php
				$image = get_sub_field('face');
				if($image) { ?>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture><?php
				} ?>
				<h4><?php the_sub_field('name'); ?></h4>
				<p class="Decima">
					<?php the_sub_field('position'); ?><br>
					<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
				</p>
			</div><?php

		endwhile; ?>
	</div><?php
	endif;




	if(have_rows('members')) : ?>
	<div class="people_team"><?php
		while(have_rows('members')) : the_row(); ?>
			<div><?php
				$image = get_sub_field('face');
				if($image) { ?>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['large']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'larger' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture><?php
				} ?>
				<h4><?php the_sub_field('name'); ?></h4>
				<p class="Decima">
					<?php the_sub_field('position'); ?><br>
					<a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
				</p>
			</div><?php

		endwhile; ?>
	</div><?php
	endif; ?>


</div>
