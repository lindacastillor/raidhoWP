<?php

// vars
$show = get_sub_field('show');

// check
if( $show && in_array('show', $show) ): ?>
<div class="phone_hide" style="background-color: <?php the_sub_field('color'); ?>;">
	<div class="wrap new_content">
		<div class="img"><img src="<?php the_sub_field('img'); ?>"></div>
		<div class="txt"><h2 class="Leitura"><?php the_sub_field('txt'); ?></h2>
			<a href="<?php the_sub_field('link'); ?>" class="button"><?php the_sub_field('link_txt'); ?></a></div>
	</div>
</div>
<?php endif; ?>
