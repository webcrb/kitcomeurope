<h2>Je suis bénéficiare du fonds <mark class="marqueur"><?php echo single_term_title( '', false ); ?></mark> d'un montant de :</h2>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
	<nav class="nav-montant">
		<ol class="list list-unstyled">
			<?php while (have_posts()) : the_post(); ?>
			  <li class="menu-item"><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></li>
			<?php endwhile; ?>

		</ol>
	</nav>
