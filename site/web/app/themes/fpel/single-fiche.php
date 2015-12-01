<?php

// The Queries
$p3 = new WP_Query( array( 'page_id' => 16) );
$contact = new WP_Query( array( 'page_id' => 23) );

$montant = get_field('montant');

?>

<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class(); ?>>

		<header class="page-header">
		  <p><span class="label label-primary"><?php the_title(); ?></span></p>
		  <h1 class="entry-title">Kit de communication</h1>
		  <p class="lead">Votre projet est cofinancé par l'Union européenne via le <mark><?php the_terms( $post->ID, 'fonds', '', ' / ' ); ?></mark> <?php if ($montant) : ?>et bénéficie d'une <mark><?php echo $montant->name; ?></mark> <?php endif; ?><br>Cette fiche pratique a pour but de vous aider à respecter vos obligations de publicité et de vous accompagner dans vos actions de communication. </p>
		</header>

	<div class="entry-content">
	  
	  <section>
	    <header class="section-header"><h2>L'utilisation du logo sur vos supports de communication</h2></header>
		
		<h3>Logo « L'Europe s'engage en Bretagne avec le FEDER »</h3>
		<p>Créé  pour la programmation 2014-2020, le logo « L'Europe s'engage en Bretagne » doit apparaître sur tous les supports d'information et de communication liés à votre projet.</p>
		<p><a href="#" class="btn btn-lg btn-info">Télécharger le logo</a></p>

		<h4>Caractéristiques techniques à respecter</h4>

		<h5>Quelle couleur ?</h5>
		Le logo doit être utilisé en couleur sur fond blanc 
		La version noir et blanc est autorisée dans certains cas justifiés, quand les autres logos sont en noir et blanc et/ou pour des documents destinés à un usage en interne (pour impression par exemple).

		<h5>Quelle taille ? </h5>
		Pour les compositions carrées et horizontales (paysage), le logo doit mesurer au minimum 1/6 de la largeur du support
		Pour les compositions verticales (portrait), le logo doit mesurer au minimum 1/5 de la largeur du support
		Le logo doit faire au moins la même taille en hauteur ou en largeur que le plus grand des autres logos
		La taille minimale du logo est de 2 cm de hauteur mais peut être réduite à 1 cm pour les petits objets promotionnels (stylo, clés USB...)
		Les proportions du logo doivent toujours être respectées.

		<h4>Utilisation obligatoire sur vos supports </h4>
		Le logo FEDER (LOFD) doit figurer en bonne place (en-tête, couverture, page d'accueil...) sur tous les supports liés à votre projet cofinancé par l'Union européenne, et être positionné à côté des logos des autres financeurs sur  :

		<h5>Vos documents bureautiques</h5>
		<ul>
			<li><strong>Documents administratifs</strong> : courriers, invitations, feuilles d'émargement...</li>
			<li><strong>Documents de présentation</strong>  : diaporamas, compte-rendus (réunion, formation), rapports (résultat d'une étude/d'une réalisation technique, d'une formation), dossier de presse...</li>
		</ul>
		
		

		<h5>Vos documents de communication : </h5>
		<ul>
			<li><strong>Édition </strong>: brochures, dépliants, affiches, </li>
			<li><strong>Vidéo, web</strong> : infographies, vidéos </li>
			<li><strong>Objets promotionnels</strong> : clés usb, stylos etc... </li>
		</ul>

		<blockquote>Attention : Pour tous les supports de communication liés au projet, vous devez  également mentionner le cofinancement de l'Union européenne et faire référence à l'organisme responsable du contenu de l'information ainsi qu'à l'Autorité de gestion désignée pour la mise en œuvre de l'opération.</blockquote>


		<h5>Votre site Internet ou page web :</h5>
		Si vous disposez d'un site ou d'une page web dédiée au projet, vous devez y faire figurer, dès la page d'accueil :
		le  logo « L'Europe s'engage en Bretagne avec le FEDER » (avec un lien cliquable vers le site europe.bzh)
		l'intitulé du projet
		une description du projet : objectifs, résultats, cofinancement de l'Union européenne...
		des liens vers les sites associés : www.europe.bzh (le site des financements européens en Bretagne), www.europa.eu (le site officiel de l'Union européenne)

		<p>NB : Plus l'aide financière est importante, plus la description doit être détaillée.</p>

	  </section>
	  
	  <section>
	    
	  <section <?php post_class(); ?>>
	    <header class="section-header">
	      <h2 class="entry-title"> Les outils de communication spécifiques</h2>
	    </header>
	    <div class="section-content"><?php the_content(); ?></div>
	    <?php comments_template('/templates/comments.php'); ?>
	  </section>

	  <section>
	    <?php if ( $p3->have_posts() ) : ?>

	      <!-- pagination here -->

	      <!-- the loop -->
	      <?php while ( $p3->have_posts() ) : $p3->the_post(); ?>
	        <header class="section-header"><h2><?php the_title(); ?></h2></header>
			<div class="section-content"><?php the_content(); ?></div>
	      <?php endwhile; ?>
	      <!-- end of the loop -->

	      <!-- pagination here -->

	      <?php wp_reset_postdata(); ?>

	    <?php else : ?>
	      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	    <?php endif; ?>
	  </section>
	  
	</div>


	<footer>
	 	<?php if ( $contact->have_posts() ) : ?>

	      <!-- pagination here -->

	      <!-- the loop -->
	      <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
	        <header class="section-header"><h2><?php the_title(); ?></h2></header>
	        <div class="section-content"><?php the_content(); ?></div>
	      <?php endwhile; ?>
	      <!-- end of the loop -->

	      <!-- pagination here -->

	      <?php wp_reset_postdata(); ?>

	    <?php else : ?>
	      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	    <?php endif; ?>
	</footer>
	</article>

<?php endwhile; ?>
