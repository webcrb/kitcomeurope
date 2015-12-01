<?php
/**
 * Template Name: Page d'accueil
 */

$europeens = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => true, 
    'exclude'           => array(), 
    'exclude_tree'      => array(), 
    'include'           => array(),
    'number'            => '', 
    'fields'            => 'all', 
    'slug'              => '',
    'parent'            => '3',
    'hierarchical'      => true, 
    'child_of'          => 0,
    'childless'         => false,
    'get'               => '', 
    'name__like'        => '',
    'description__like' => '',
    'pad_counts'        => false, 
    'offset'            => '', 
    'search'            => '', 
    'cache_domain'      => 'core'
); 

$fondseuropeens = get_terms('fonds', $europeens);
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<hr>

<h2>Vous bénéficiez d'un cofinancement via le :</h2>

<nav class="nav-fonds">
  <?php
	 if ( ! empty( $fondseuropeens ) && ! is_wp_error( $fondseuropeens ) ){
	     echo '<ul class="list list-unstyled">';
	     foreach ( $fondseuropeens as $term ) {
	       echo '<li class="menu-item"><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
	        
	     }
	     echo '</ul>';
	 }
	?>
</nav>