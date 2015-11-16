<div class="section_bottom_margins">
	<img class="full_width_image" src="http://lorempixel.com/1280/740/technics">
</div>

<div class="wrap">
	<div class="blog_wrap">
		<div class="blog_header">
			<h1 class="replica"><?php the_title(); ?></h1>
			<div class="regular_title Leitura"><?php the_excerpt(); ?></div>
			<p class="meta Decima">Posted on Blog</br> <?php the_time('j/m/Y'); ?></p><?php

			get_template_part('inc/sharer'); ?>

		</div>
		<div class="blog_body Leitura">
			<?php the_content(); ?>
		</div>

		<div class="blog_foot"><?php

			get_template_part('inc/sharer'); ?>

			<div class="blog_more">
				<h3 class="Decima">More Blog Posts</h3>
				<ul>
					<li><img src="http://lorempixel.com/600/600/technics" alt=""><a href="#">BPR Monterrey, 4th Edition</a></li>
					<li><img src="http://lorempixel.com/600/600/technics" alt=""><a href="#">Finishing that custom type, and how hackers might have some advice on the subject.</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
