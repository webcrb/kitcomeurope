<a href="<?php the_permalink(); ?>" class="nav-link">
	<?php 

	$montant = get_field('montant');

	if( $montant ): ?>

		<?php echo $montant->name; ?>

	<?php endif; ?>
</a>