<?php use Roots\Sage\Extras; ?>

<header class="banner hidden-print">
	<a name="top"></a>
 	<div class="container">
 		<?php if (is_front_page()): ?>
 			
 			<div class="wrapper">
 				<h1 class="site-title"><span>Kit de communication</span><br>pour les bénéficiaires<br>de fonds européens</h1>
 				<?= Extras\get_the_content_by_id(18); ?>
 			</div>

 			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="L'europe s'engage en Bretagne" class="logo">

    	<?php else: ?>
			<h1 class="site-title h3"><a href="<?php bloginfo('url') ?>"><span>Kit de communication</span> pour le bénéficiaires de fonds européens</a></h1>
		<?php endif; ?>
  	</div>
</header>