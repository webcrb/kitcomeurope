<?php 
$p3args = array( 'page_id' => 16);
$p3= new WP_Query( $p3args );
if ( $p3->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $p3->have_posts() ) : $p3->the_post(); ?>

	<?php the_content(); ?>
  
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>