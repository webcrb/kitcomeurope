<?php 

$montant = get_field('montant');

?>
<header class="header-fiche">
				  	
	<?php if( has_term( 'feader', 'fonds' ) ) : ?>
  
  <p class="lead">
  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>Programme de développement rural 2014-2020 Bretagne</strong>.<br>Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
  </p>

<?php endif; ?>

<?php if( has_term( 'feder', 'fonds' ) ) : ?>

   <p class="lead">
  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>FEDER</strong>.<br>Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
  </p>

<?php endif; ?>

<?php if( has_term( 'fse', 'fonds' ) ) : ?>
  
   <p class="lead">
  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong><?php echo $montant->name; ?></strong>.
  </p>

<?php endif; ?>

<?php if( has_term( 'feamp', 'fonds' ) ) : ?>
 
   <p class="lead">
  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>FEAMP</strong>.<br>Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
  </p>

<?php endif; ?>

<?php if( has_term( 'feader-leader', 'fonds' ) ) : ?>
 
  <p class="lead">
  	Vous bénéficiez d'un soutien de l’Union européenne via le <strong>Programme Leader</strong>.<br>Votre projet a obtenu une <strong><?php echo $montant->name; ?></strong>.
  </p>

<?php endif; ?>

	<p>Cette fiche pratique a pour but de vous aider à respecter vos obligations de publicité et de vous accompagner dans vos actions de communication.</p>

</header>