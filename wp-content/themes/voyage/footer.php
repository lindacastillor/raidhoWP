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
							echo 'Mail: <a class="red" href="mailto:'.$info.'">'.$info.'</a><br>';

						elseif($medium == 'phone') :
							echo 'Phone: <a class="red" href="tel:'.$info.'">'.$info.'</a><br>';

						elseif($medium == 'skype') :
							echo 'Skype: <a class="red" href="skype:'.$info.'?chat">'.$info.'</a><br>';

						endif;
					endwhile; ?>
				</li>
				<li><?php
					while(have_rows('social-m', 'options')) :
						the_row();
						$info = get_sub_field('info');
						$medium = get_sub_field('medium');
						if($medium == 'behance') :
							echo '<a href="'.$info.'">Behance</a><br>';

						elseif($medium == 'facebook') :
							echo '<a href="'.$info.'">Facebook</a><br>';

						elseif($medium == 'instagram') :
							echo '<a href="'.$info.'">Instagram</a><br>';

						elseif($medium == 'dribble') :
							echo '<a href="'.$info.'">Dribbble</a><br>';

						elseif($medium == 'twitter') :
							echo '<a href="'.$info.'">Twitter</a><br>';

						elseif($medium == 'github') :
							echo '<a href="'.$info.'">Github</a><br>';

						endif;
					endwhile; ?>
				</li>
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
