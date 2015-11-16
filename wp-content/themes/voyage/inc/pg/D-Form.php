<div class="contact-banner section_pad">
	<div class="wrap bl-party-share"><?php

		if(is_singular('work')) { ?>
			<h2 class="Leitura">Share this project:</h2>
			<ul>
				<li><a class="btn" href="#">Share on Facebook</a></li>
				<li><a class="btn" href="#">Share on Twitter</a></li>
				<li><a class="btn" href="#">Copy URL</a></li>
			</ul><?php
		}

		if(get_sub_field('title')){
			echo '<h2 class="Leitura">'.get_sub_field('title').'</h2>';
		}
		the_sub_field('form'); ?>

	</div>
</div>
