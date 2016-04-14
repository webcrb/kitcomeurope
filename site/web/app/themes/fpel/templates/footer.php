<footer class="section section-footer content-info">
  <div class="container">
    <ul class="nav nav-inline pull-md-right">
      <?php if( !is_front_page() ): ?>
      <li class="nav-item"><a href="http://europe.bzh" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/fesi.png" alt="fesi"></a></li>
      <?php endif; ?>
      <li class="nav-item"><a href="http://bretagne.bzh" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/rb.png" alt="Région Bretagne"></a></li>
      <li class="nav-item"><a href="http://www.prefectures-regions.gouv.fr/bretagne" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/prefecture.png" alt="Préfecture de région Bretagne"></a></li>
    </ul>
  	<?php
		if (has_nav_menu('nav-footer')) :
		wp_nav_menu(['theme_location' => 'nav-footer', 'menu_class' => 'list-unstyled']);
		endif;
	?>   	
  </div>
</footer>
