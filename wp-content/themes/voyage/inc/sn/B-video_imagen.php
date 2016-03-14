<?php

if (get_sub_field('choose') == 'video_foto') : ?>
		<div class="bl-party-two-no-captions">
			<div>
				<style>
				.embed-container { position: relative; padding-bottom: 57%; height: 0;max-width: 100%; margin-right: 0!important;margin-left: 0!important;width: 100%!important;}
				.embed-container iframe,
				.embed-container object,
				.embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
				</style>
				<div class='embed-container'>
					<?php the_sub_field('video') ?>
				</div>
			</div>
			<div>
				<picture>
					<?php
					$image = get_sub_field('foto');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</picture>
			</div>
		</div><?php

elseif (get_sub_field('choose') == 'foto_video') : ?>
		<div class="bl-party-two-no-captions" style="display: table;width: 100%;">
			<div>
				<picture>
					<?php
					$image = get_sub_field('foto');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</picture>
			</div>
			<div>
				<style>
				.embed-container { position: relative; padding-bottom: 57%; height: 0;max-width: 100%; margin-right: 0!important;margin-left: 0!important;width: 100%!important;}
				.embed-container iframe,
				.embed-container object,
				.embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
				</style>
				<div class='embed-container'>
					<?php the_sub_field('video') ?>
				</div>
			</div>
		</div><?php
endif; ?>
