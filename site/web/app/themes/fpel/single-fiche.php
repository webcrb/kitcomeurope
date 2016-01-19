<?php 

$montant = get_field('montant');

?>

<?php while (have_posts()) : the_post(); ?>

	<ol class="breadcrumb">
  		<li><a href="<?php bloginfo('url') ?>">Accueil</a></li>
  		<li><?php the_terms( $post->ID, 'fonds', '', '' ); ?></li>
  		<li class="active"><?php echo $montant->name; ?></li>
	</ol>

	<article <?php post_class(); ?>>

			<div class="row">

				<div class="col-md-4 col-md-push-8">
			  		
			  		<?php get_template_part('templates/sidebar-fiches'); ?>
					
				</div> <!-- /.col-md-4 -->

				<div class="col-md-8 col-md-pull-4">

					<header class="jumbotron">
				  	
				  	<?php if( has_term( 'feader', 'fonds' ) ) : ?>
					  
					  <p class="lead">
					  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>Programme de développement rural de la Bretagne</strong>. Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
					  </p>
					
					<?php endif; ?>
					
					<?php if( has_term( 'feder', 'fonds' ) ) : ?>
					
					   <p class="lead">
					  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>FEDER</strong>. Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
					  </p>
					
					<?php endif; ?>
					
					<?php if( has_term( 'fse', 'fonds' ) ) : ?>
					  
					   <p class="lead">
					  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong><?php echo $montant->name; ?></strong>.
					  </p>
					
					<?php endif; ?>
					
					<?php if( has_term( 'feamp', 'fonds' ) ) : ?>
					 
					   <p class="lead">
					  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>FEAMP</strong>. Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
					  </p>
					
					<?php endif; ?>
					
					<?php if( has_term( 'feader-leader', 'fonds' ) ) : ?>
					 
					  <p class="lead">
					  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>Programme Leader</strong>. Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
					  </p>

					<?php endif; ?>

						<p>Cette fiche pratique a pour but de vous aider à respecter vos obligations de publicité et de vous accompagner dans vos actions de communication.</p>

					</header>
					<nav class="nav-section">

					  	<!-- Nav tabs -->
						<ul class="nav nav-pills" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" data-toggle="tab" href="#logo" role="tab">Le logo</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" data-toggle="tab" href="#tools" role="tab">Les outils</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" data-toggle="tab" href="#keys" role="tab">Les clés</a>
						  </li>
						</ul>

					</nav>

					<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane active" id="logo" role="tabpanel">
					  	<?php get_template_part('templates/fiche', 'p1'); ?>
					  </div>
					  <div class="tab-pane fade" id="tools" role="tabpanel">
					  	<?php get_template_part('templates/fiche', 'p2'); ?>
					  </div>
					  <div class="tab-pane fade" id="keys" role="tabpanel">
					  	<?php get_template_part('templates/fiche', 'p3'); ?>
					  </div>
					</div>
					
					
				</div><!-- /.col-md-8 -->
				
			</div> <!-- /row -->
	</article>

	<div class="smoothscroll backtop"><a href="#top"><i class="icon-haut"></i></a></div>

<?php endwhile; ?>
