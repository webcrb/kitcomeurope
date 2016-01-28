<?php use Roots\Sage\Extras; ?>

<header class="banner">
	<a name="top"></a>
 	<div class="container">
 		<?php if (is_front_page()): ?>
 			<div class="wrapper">
 				<h1 class="site-title"><i class="logo icon-logo_fr"></i><br><?php bloginfo('slogan'); ?></h1>
 				<?= Extras\get_the_content_by_id(18); ?>
 			</div>
    	<?php else: ?>
			<h1 class="site-title h3"><a href="<?php bloginfo('url') ?>" class="logo"><i class="icon-logo_fr"></i></a> <?php bloginfo('slogan'); ?></h1>
		<?php endif; ?>
  	</div>
</header>