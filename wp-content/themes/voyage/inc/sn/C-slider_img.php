<?php
if (get_sub_field('choose') == 'slider-right') : ?>
	<div class="bl-party-img-slider">
		<div>
			<picture>
				<?php
				$image = get_sub_field('img');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</picture>
		</div>
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
					<ul>
				</div><?php
			endif; ?>
		</div>
	</div>

<?php
elseif (get_sub_field('choose') == 'slider-left') : ?>
	<div class="bl-party-img-slider">
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
					<ul>
				</div><?php
			endif; ?>
		</div>
		<div>
			<picture>
				<?php
				$image = get_sub_field('img');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</picture>
		</div>
	</div>
<?php
endif; ?>
