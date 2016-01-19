<?php 
global $query_string;
query_posts( $query_string . '&orderby=title&order=ASC' );
?>
<ol class="breadcrumb">
  <li><a href="<?php bloginfo('url') ?>">Accueil</a></li>
  <li class="active"><?php echo single_term_title( '', false ); ?></li>
</ol>
<div class="row">
	<div class="col-md-8">
		<?php if (!have_posts()) : ?>
		  <div class="alert alert-warning">
		    <?php _e('Sorry, no results were found.', 'sage'); ?>
		  </div>
		  <?php get_search_form(); ?>
		<?php endif; ?>
		<nav class="nav-montant">
			<ol class="nav nav-stacked nav-pills">
				<?php while (have_posts()) : the_post(); ?>
				  <li class="nav-item"><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></li>
				<?php endwhile; ?>
			</ol>
		</nav>
	</div>
	<div class="col-md-4">
		<p>Si vous ne connaissez pas le montant total de l'aide publique dont vous bénéficiez et si vous vous interrogez sur les obligations de publicité liées au cofinancement de votre projet, veuillez prendre contact avec le Conseil régional de Bretagne :</p>
	<address class="border">
		<h3>Direction des Affaires Européennes et Internationales</h3>
		<p>Juliette CRISTESCU, Chargée du pilotage de l’information et de l’animation des programmes européens<br/>
		Tél. 02 22 51 60 08<br/>
		europe@bretagne.bzh</p>
	</address>
	</div>
</div>
