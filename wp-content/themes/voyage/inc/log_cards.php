<li class="<?php
	$postType = get_post_type( $post->ID );
	foreach(get_the_category() as $category) {
		$catSlug = $category->slug;
		echo $catSlug.' ';
	}
	echo get_post_type( $post->ID ).' '; ?>masonry_item"><?php


	if($catSlug == 'twitter'){
		$user = get_the_author_meta('user_login'); ?>

		<div class="red_bg white">
			<blockquote class="small_title"><?php the_title(); ?></blockquote>
			<p><a href="<?php echo esc_url(home_url('/author/')); echo $user.'/'; ?>">
				Twitted by <?php the_author(); ?>
			</a></p>
		</div><?php

	} else {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
		$imgArray = get_the_image( array( 'image_scan' => true, 'format' => 'array' ) );

		if($image) { ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $image[0]; ?>" />
			</a><?php

		} elseif($imgArray){ ?>
			<a href="<?php the_permalink(); ?>"> <?php
				get_the_image( array( 'size' => 'thumbnail', 'image_scan' => true, 'link_to_post' => false ) ); ?>
			</a><?php
		} elseif($catSlug == 'video') { ?>
			<div style="border: 1px solid; text-align: center; padding: 4em 0; margin-bottom: 1em;">
				There should be a video here.
				<?php // the_content(); ?>
			</div><?php
		}


		if($postType == 'work') {
			echo '<p class="small_title"><a href="'.get_the_permalink().'">';
			if(get_field('new')){
				echo '<span class="red">New Project:</span> ';
			} else {
				echo '<span class="red">Project:</span> ';
			}
			echo get_the_title().'</a></p>';
		} elseif($postType == 'blog') {
			echo '<p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';
		} else {
			echo '<p>'.get_the_title().'</p>';
		}
		// IG: Title – [Nov 2012] – photo by – @rualmx
		// Share: Not sure what varies
		// TW: Not sure a donde te llevan los links
	} ?>
</li>
