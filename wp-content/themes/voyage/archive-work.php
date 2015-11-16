<?php

/*
Template Name: Work Template
Neue Raidho Website
*/

get_header();

?>

<section id="recent_work">

	<div class="wrap">

		<h2 class="Decima">Recent Work</h2>

<?php /*
		<div class="bl-party-two-w-captions">
	        <ul>
	            <li>
					<a href="#">
						<img src="http://lorempixel.com/380/380/technics">
		                <p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
					</a>
	            </li>
	        <ul>
	    </div>

	    <div class="bl-party-three-w-captions">
	        <ul>
	            <li>
	                <a href="#">
						<img src="http://lorempixel.com/380/380/technics">
		                <p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
					</a>
	            </li>
	        <ul>
	    </div>
*/

		if(have_posts()): ?>
			<div class="bl-party-four-w-captions">
				<ul><?php
				while(have_posts()): the_post(); ?>

					<li>
						<a href="<?php the_permalink(); ?>"><?php

							if (has_post_thumbnail( $post->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'med-sq' ); ?>
								<img src="<?php echo $image[0]; ?>" width="380" /><?php
							endif; ?>

							<p><?php the_title(); ?> <span class="Leitura"><?php the_field('subtitle'); ?></span></p>
						</a>
					</li><?php

				endwhile; ?>
				<ul>
			</div><?php
		endif; ?>


	</div>

</section><?php

	get_template_part('inc/extended_nav');
	get_footer(); ?>
