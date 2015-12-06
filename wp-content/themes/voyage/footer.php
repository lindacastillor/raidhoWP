<?php

/*
Footer Template
Neue Raidho Website
*/

?>
	<footer>
		<div class="wrap">
			<h2 class="Decima"><?php the_field('big-quote', 'options'); ?></h2>
			<ul>
				<li><?php the_field('address', 'options'); ?></li>
				<li><?php
					while(have_rows('channels', 'options')) :
						the_row();
						$info = get_sub_field('info');
						$medium = get_sub_field('medium');
						if($medium == 'mail') :
							echo '<span class="phone_hide">Mail: </span><a class="red" href="mailto:'.$info.'">'.$info.'</a><br>';

						elseif($medium == 'phone') :
							echo '<span class="phone_hide">Phone: </span> <a class="red" href="tel:'.$info.'">'.$info.'</a><br>';

						elseif($medium == 'skype') :
							echo '<span class="phone_hide">Skype: </span><a class="red" href="skype:'.$info.'?chat">'.$info.'</a><br>';

						endif;
					endwhile; ?>
				</li>
				<li><div><?php
					while(have_rows('social-m', 'options')) :
						the_row();
						$info = get_sub_field('info');
						$medium = get_sub_field('medium');
						if($medium == 'behance') :
							echo '<span><a href="'.$info.'">Behance</a></span>';

						elseif($medium == 'facebook') :
							echo '<span><a href="'.$info.'">Facebook</a></span>';

						elseif($medium == 'instagram') :
							echo '<span><a href="'.$info.'">Instagram</a></span>';

						elseif($medium == 'dribble') :
							echo '<span><a href="'.$info.'">Dribbble</a></span>';

						elseif($medium == 'twitter') :
							echo '<span><a href="'.$info.'">Twitter</a></span>';

						elseif($medium == 'github') :
							echo '<span><a href="'.$info.'">Github</a></span>';
						endif;
					endwhile; ?>
				</div></li>
			</ul>
			<p class="Leitura">All rights reserved &copy;Raidho <?php the_time('Y'); ?>.<br>
			See our <a href="<?php echo esc_url(home_url('/privacy')); ?>">Privacy Statement</a> (<i>ver el <a href="<?php echo esc_url(home_url('/privacy')); ?>">Aviso de Privacidad</a></i>).
			</p>
		</div>
	</footer>

	<script type="text/javascript">

		// Masonry activation + imagesLoaded with jQuery
		var $container = $('.masonry');
		// initialize Masonry after all images have loaded
		$container.imagesLoaded( function() {
		  $container.masonry({
			columnWidth: '.masonry_column',
			gutter: '.masonry_gutter',
			itemSelector: '.masonry_item'
			});
		});

	</script>

	<?php wp_footer(); ?>

</body>

</html>
