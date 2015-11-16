<?php

	$img = get_sub_field('img');
	$ftdImg = $img['sizes']['medium']; ?>


<div class="wrap">
	<div class="e_nav1 gray_light_bg">
		<a class="nav1_bttn" href="<?php the_sub_field('link'); ?>">
			<div style="background-image: url('<?php echo $ftdImg; ?>')">
			</div>
			<div>
				<h4 class="red"><?php the_sub_field('title'); ?></h4>
				<div class="Decima">
					<?php the_sub_field('excerpt'); ?>
					<br><span class="red">→</span>
				</div>
			</div>
		</a>
	</div>
</div>
