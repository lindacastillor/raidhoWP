<?php
if (get_sub_field('choose') == 'slider') : ?>
	<div>
		<?php
		$images = get_sub_field('gallery');
		if($images) : ?>
			<div class="wide_slider">
				<ul class="rslides slider2"><?php
					foreach( $images as $image ): ?>
						<li>
							<div class="image" style="background-image: url(<?php echo $image['sizes']['larger']; ?>);"></div>
						</li><?php
					endforeach;	?>
				</ul>
			</div><?php
		endif; ?>
	</div>
<?php
endif; ?>
