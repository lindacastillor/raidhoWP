<?php

/*
Page Template
Neue Raidho Website					:	25%
									//	– Lazy Load
*/

$bclass = "page";
get_header();

global $post;
$post_slug=$post->post_name;
$titBgID = A; ?>


<section id="<?php echo $post_slug; ?>"><?php

while ( have_rows('blocks') ) : the_row();

	if( get_row_layout() == 'intro' ):
		get_template_part('inc/pg/A', 'Intro');

	elseif( get_row_layout() == 'titling' ):
		get_template_part('inc/pg/B', 'Titling');

	elseif( get_row_layout() == 'list' ) :
		get_template_part('inc/pg/C', 'List');

	elseif( get_row_layout() == 'form' ):
		get_template_part('inc/pg/D', 'Form');

	elseif( get_row_layout() == 'slider' ):
		get_template_part('inc/pg/E', 'Slider');

	elseif( get_row_layout() == 'big-image' ):
		get_template_part('inc/pg/F', 'BigImage');

	elseif( get_row_layout() == 'from-log' ):
		get_template_part('inc/pg/G', 'FromLog');

	elseif( get_row_layout() == 'two-cols' ):
		get_template_part('inc/pg/H', 'TwoCols');

	elseif( get_row_layout() == 'members' ):
		get_template_part('inc/pg/I', 'Members');

	elseif( get_row_layout() == 'more' ):
		get_template_part('inc/pg/J', 'More');

	endif;
endwhile; ?>

</section><?php

	get_template_part('inc/extended_nav');

	$post = get_field('ftd-project', 'options');
	$random = array_rand($post, 1);
	$the_query = new WP_Query( array( 'post_type' => 'work', 'p' => $post[$random], 'posts_per_page' => 1 ) );
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		get_template_part('inc/feat_project');
	}
	wp_reset_postdata();

get_footer(); ?>
