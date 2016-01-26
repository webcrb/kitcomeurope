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

				<?php get_template_part('templates/header', 'fiches'); ?>

				<div id="accordion" role="tablist" aria-multiselectable="true">
					<section class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h2 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#logo" aria-expanded="true" aria-controls="collapseOne">1 &middot; L'utilisation du logo sur vos supports de communication <span class="arrow icon-chevron-down"></span></a>
							</h4>
						</div>
						<div id="logo" class="panel-collapse collapse section-content" role="tabpanel" aria-labelledby="headingOne">
							<?php get_template_part('templates/fiche', 'p1'); ?>
						</div>
					</section>
					<section class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h2 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#tools" aria-expanded="true" aria-controls="collapseTwo">2 &middot; Les outils de communication spécifiques <span class="arrow icon-chevron-down"></span></a>
							</h4>
						</div>
						<div id="tools" class="panel-collapse collapse section-content" role="tabpanel" aria-labelledby="headingTwo">
							<?php get_template_part('templates/fiche', 'p2'); ?>
						</div>
					</section>
					<section class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h2 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#keys" aria-expanded="true" aria-controls="collapseThree">3 &middot; Les clés pour valoriser votre projet européen <span class="arrow icon-chevron-down"></span></a>
							</h4>
						</div>
						<div id="keys" class="panel-collapse collapse section-content" role="tabpanel" aria-labelledby="headingThree">
							<?php get_template_part('templates/fiche', 'p3'); ?>
						</div>
					</section>
				</div>


			</div><!-- /.col-md-8 -->

		</div> <!-- /row -->
	</article>

	<div class="smoothscroll backtop"><a href="#top"><i class="icon-haut"></i></a></div>

<?php endwhile; ?>

