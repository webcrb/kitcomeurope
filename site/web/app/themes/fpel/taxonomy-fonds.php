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
		<?php $infos= new WP_Query( array( 'page_id' => 248) );
		if ( $infos->have_posts() ) : ?>

		  <!-- pagination here -->

		  <!-- the loop -->
		  <?php while ( $infos->have_posts() ) : $infos->the_post(); ?>

			<?php the_content(); ?>
		  
		  <?php endwhile; ?>
		  <!-- end of the loop -->

		  <!-- pagination here -->

		  <?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
	</div>
</div>
