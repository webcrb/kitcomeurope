<?php 
$p3args = array( 'page_id' => 16);
$p3= new WP_Query( $p3args );
if ( $p3->have_posts() ) : ?>

  <!-- pagination here -->
  <section>
  <a name="p3">&nbsp;</a>
  <!-- the loop -->
  <?php while ( $p3->have_posts() ) : $p3->the_post(); ?>
    <header class="section-header"><h2><?php the_title(); ?></h2></header>
	<div class="section-content"><?php the_content(); ?></div>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->
  </section>

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>