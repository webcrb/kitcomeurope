<header class="banner">
	<a name="top"></a>
 	<div class="container">
 		<?php if (is_front_page()): ?>
 			<div class="wrapper">
 				<h1 class="site-title"><i class="logo icon-logo_fr"></i><br><?php bloginfo('slogan'); ?></h1>
 				<p><?php bloginfo('description'); ?></p>
 			</div>
    	<?php else: ?>
			<h1 class="site-title h3"><i class="logo icon-logo_fr"></i> <?php bloginfo('slogan'); ?></h1>
		<?php endif; ?>
  	</div>
</header>
