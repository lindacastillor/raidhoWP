<?php

/*
Slider with Tabs
Neue Raidho Website
*/

?>
<div class="gray_light_bg section_pad">
	<div class="wrap">
		<div>

			<script type="text/javascript">
				$(function () { <?php /*
					$(".tabbed-slider").responsiveSlides({
						pager: false,
						auto: false,
						prevText: "-",
						nextText: "-",
						nav: true,
						manualControls: '.tabs-pager'
					}); */ ?>
					$("#slider1").responsiveSlides({
						pager: false,
						auto: false,
						prevText: "-",
						nextText: "-",
						nav: true,
						manualControls: '#slider1-pager'
					});
				});
			</script>

			<?php if(get_sub_field('title')){
				echo '<h3 class="Decima">'.get_sub_field('title').'</h3>';
			} ?>


			<div class="main_banner gray_light_bg">

				<ul class="tabs-pager" id="slider1-pager"><?php
					$tabN = 1;
					while(have_rows('tabs')) {
						the_row();
						echo '<li><a href="#tab'.$tabN++.'"><p>'.get_sub_field('title').'</p></a></li>';
					} ?>
				</ul>

				<!-- slides container -->
				<div class="slider_container">
					<ul id="slider1"><?php
						$eleN = 1;
						while (have_rows('tabs')) {
							the_row(); ?>
							<li><?php

							global $titBgID;
							$image = get_sub_field('img');

							if($image){
								$img_large = $image['sizes']['large'];
								$img_larger = $image['sizes']['larger'];
								$img_largest = $image['sizes']['largest'];

								echo '<div class="image" id="slbg-'.$titBgID.'">
									<style> #slbg-'.$titBgID.' {background-image: url(' . $img_large . ');}';
								if($img_large) { echo ' @media (min-width: 1024px) { #slbg-'.$titBgID.' {background-image: url(' . $img_larger . ');} }'; }
								if($img_larger) { echo ' @media (min-width: 1400px) { #slbg-'.$titBgID++.' {background-image: url(' . $img_largest . ');} }'; }
								echo '</style>
								</div>';

							}  ?>


								<div class="txt white_bg">
									<div>
										<h2><span class="red"><?php the_sub_field('title'); ?>:</span> <?php the_sub_field('heading'); ?></h2>
										<p class="Decima"><?php the_sub_field('content'); ?></p><?php
										// if is post object:
										if($image['caption'] || $image['title']) {
											echo '<p><span class="Decima gray">';
											if($image['title']){
												echo $image['title'].'. ';
											}
											if($image['caption']){
												echo $image['caption'].'.';
											}
											echo '</span></p>';
										} ?>
									</div>
								</div>
							</li><?php
						} ?>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>
