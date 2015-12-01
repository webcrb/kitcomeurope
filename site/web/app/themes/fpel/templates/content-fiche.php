<a href="<?php the_permalink(); ?>">
	<?php 

	$montant = get_field('montant');

	if( $montant ): ?>

		<?php echo $montant->name; ?>

	<?php endif; ?>
</a>