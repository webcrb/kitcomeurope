<footer class="section section-footer content-info">
  <div class="container">
   	<?php
		if (has_nav_menu('nav-footer')) :
		wp_nav_menu(['theme_location' => 'nav-footer', 'menu_class' => 'list-inline']);
		endif;
	?>
  </div>
</footer>
