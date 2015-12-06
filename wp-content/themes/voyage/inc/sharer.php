<ul<?php
	if(is_singular('blog')) {
		echo ' class="share_btns replica"';
	} elseif(is_singular('work')) {} else {
		echo ' class="share_btns squared_btns"';
	} ?>>
	<li><a <?php if(is_singular('work')) { echo 'class="btn"'; } ?> href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>on%20Raidho.mx">Post to Facebook</a></li>
	<li><a <?php if(is_singular('work')) { echo 'class="btn"'; } ?> href="https://twitter.com/share" {count} data-via="raaidho" data-dnt="true">Post to Twitter</a></li><?php
	if(is_singular('post') || is_singular('work')){ ?>
		<li><a <?php if(is_singular('work')) { echo 'class="btn"'; } ?> href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>">Pin this</a></li><?php
	} ?>
	<li><?php // CAN'T COPY ON CLICK. Agregar un input que al picarlo se seleccione todo(el permalink) ?><a <?php if(is_singular('work')) { echo 'class="btn"'; } ?> href="#">Copy URL</a> </li>
</ul>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
