<?php

/*
Header Template
Neue Raidho Website
*/

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content=" ">
	<meta name="author" content=" ">

	<title><?php wp_title(); ?></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsivemenu.css">
	<link rel="stylesheet" type="text/css" href="fonts/leitura/MyFontsWebfontsKit.css">
	<link rel="stylesheet" type="text/css" href="fonts/decima/MyFontsWebfontsKit.css">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shame.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/leitura/MyFontsWebfontsKit.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/decima/MyFontsWebfontsKit.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<header>

		<div class="wrap">
			<h3 id="nav_logo"><a href="<?php echo esc_url(home_url()); ?>"><span><img src="<?php bloginfo('template_url'); ?>/img/simbolo_raidho.svg"></span> RAIDHO</a></h3>

			<a id="mobile_nav_toggl" class="Decima" href="#">&#9776;</a>
			<script>
				$(document).ready(function() {
					$('#mobile_nav_toggl').click(function(e) {
						$(this).toggleClass('active');
						$('#nav').toggleClass('active');
						e.preventDefault();
					});
				});
			</script><?php

			$post_object = get_field('menu', 'options');
			if($post_object) : ?>
			<ul id="nav" class="Decima"><?php
				foreach($post_object as $post) :
					setup_postdata($post);
					echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
				endforeach;
				wp_reset_postdata(); ?>
			</ul><?php
			endif; ?>

		</div>
	</header>
