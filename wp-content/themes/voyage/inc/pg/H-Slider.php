<script type="text/javascript">
	$(function () {
		$("#slider3").responsiveSlides({
			pager: false,
			auto: false,
			prevText: "-",
			nextText: "-",
			nav: true,
			manualControls: '#slider3-pager'
		});
	});
</script>

<section class="gray_light_bg phone_hide">
	<div class="wrap">
		<!-- slider w/bullets -->
		<div class="main_banner">
			<div class="slider_container">
				<!-- slides container --><?php
				$post_objects = get_field('recent_slider');

				if( $post_objects ): ?>
				<ul id="slider3" class="rslides rslides1"><?php
					foreach( $post_objects as $post):
						setup_postdata($post); ?>

						<li id="rslides1_s0" class="" style="display: table; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;"><?php
							$img = get_post_thumbnail_id($post->ID);
							if($img){
								$img_large = wp_get_attachment_image_src($img, 'large');
								$img_larger = wp_get_attachment_image_src($img, 'larger');
								$img_largest = wp_get_attachment_image_src($img, 'largest');

								echo '<a href="'.the_permalink().'">';
								echo '<div class="image" id="slbg-'.$titBgID.'">';
								echo '<style> #slbg-'.$titBgID.' {background-image: url(' . $img_large[0] . ');}';
								if($img_large) { echo ' @media (min-width: 1024px) { #slbg-'.$titBgID.' {background-image: url(' . $img_larger[0] . ');} }'; }
								if($img_larger) { echo ' @media (min-width: 1400px) { #slbg-'.$titBgID++.' {background-image: url(' . $img_largest[0] . ');} }'; }
								echo '</style></div>';
							} ?>
							<div class="txt white_bg">
								<div>
									<h2><span class="red">Recent:</span> <?php the_field('subtitle'); ?></h2>
									<p class="Decima phone_hide"><?php the_field('excerpt'); ?></p>
									<span class="Decima red phone_hide">Read the full story →</span>
								</div>
							</div>
							</a>
						</li><?php

					endforeach; ?>
					</ul><?php
					wp_reset_postdata();
				endif; ?>
				</ul><?php
				$n = 1;
				if( $post_objects ): ?>
				<ul class="tabs-bullets rslides_tabs rslides1_tabs" id="slider3-pager"><?php
					foreach( $post_objects as $post):
						setup_postdata($post); ?>

						<li class="rslides1_s<?php echo $n; ?>"><a href="#tab<?php echo $n++; ?>"></a></li><?php

					endforeach; ?>
				</ul><?php
				wp_reset_postdata();
				endif; ?>

			</div>
		</div>
	</div>
</section>
