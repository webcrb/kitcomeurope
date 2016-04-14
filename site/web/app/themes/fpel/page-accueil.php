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

  <h2 class="text-sm-center m-t-2">Vous bénéficiez d'un cofinancement via le :</h2>

  <nav class="nav-fonds">
      <?php
       if ( ! empty( $fondseuropeens ) && ! is_wp_error( $fondseuropeens ) ){
           echo '<ul class="list list-unstyled">';
           foreach ( $fondseuropeens as $term ) { ?>
             
             <li class="list-item">
              <a class="menu-item menu-<?php echo $term->slug; ?>" href="<?php echo get_term_link( $term ); ?>">
                <div class="menu-item-wrapper">
                  <h3 class="fonds-title"><?php echo $term->name; ?></h2>
                  <p><?php echo $term->description; ?></p>
                  <small><i class="icon-hand-o-right"></i> Accéder</small>
                </div>
              </a>
             
              </li>
           <?php }
           echo '</ul>';
       }
      ?>
  </nav>
  
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <hr>
        <ul>
          <li><strong>Pour le FEAMP :</strong> <br>
          Les obligations des bénéficiaires seront mises en ligne sur ce portail, dès validation de la stratégie de communication par la Commission européenne.</li>
          <li><strong>Pour le PO national FSE :</strong> <br>
          page en cours de réalisation</li>
        </ul>
    </div>
  </div>
  

<?php endwhile; ?>
