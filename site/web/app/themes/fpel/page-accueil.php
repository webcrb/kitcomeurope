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

  <h2 class="text-center">Vous bénéficiez d'un cofinancement via le :</h2>

  <nav class="nav-fonds">
      <?php
       if ( ! empty( $fondseuropeens ) && ! is_wp_error( $fondseuropeens ) ){
           echo '<ul class="list list-unstyled">';
           foreach ( $fondseuropeens as $term ) { ?>
             
             <li class="list-item">
              <div class="menu-item menu-<?php echo $term->slug; ?>">
                  <div class="menu-item-wrapper">
                      <h2><?php echo $term->name; ?></h2>
                      <p><?php echo $term->description; ?></p>
                      <a href="<?php echo get_term_link( $term ); ?>" class="btn btn-primary-outline">Accéder <span>&#8594;</span></a>
                  </div>
              </div>
             
              </li>
           <?php }
           echo '</ul>';
       }
      ?>
  </nav>

  
<?php endwhile; ?>
