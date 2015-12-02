<?php

$image = get_sub_field('big-img');
if( !empty($image) ): ?>

	<picture>
		<img class="full_width_image"
			 src="<?php echo $image['sizes']['large']; ?>" <?php

				$imM = $image['sizes']['medium'];
				$imL = $image['sizes']['large'];
				$imL2 = $image['sizes']['larger'];
				$imL3 = $image['sizes']['largest'];
				$imH = $image['url'];

			 echo 'srcset="'.$imM. ' 600w';
				if($imL) { echo ', '. $imL.' 1024w'; }
				if($imL2) { echo ', '. $imL2.' 1400w'; }
				if($imL3) { echo ', '. $imL3.' 1800w'; }
				if($imH) { echo ', '. $imH.' 2000w'; }
			 echo '" '; ?>

			 alt="<?php echo $image['title']; ?>" /><?php


			if($image['caption'] || $image['title']) :
				echo '<div class="Decima caption">';

				if($image['alt']){
					echo '<a href="'.$image['alt'].'" target="_blank">';
				}
				if($image['title']){
					echo '<span>'.$image['title'].'</span>';
				}
				if($image['caption']){
					echo $image['caption'];
				}
				if($image['alt']){
					echo '</a>';
				}
				echo '</div>';

			endif; ?>

	</picture><?php

endif; ?>
