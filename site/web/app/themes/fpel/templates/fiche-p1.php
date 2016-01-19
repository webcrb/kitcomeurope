<?php 
$pageid = null;

if( has_term( 'feader', 'fonds' ) ) {
  $pageid = 85;
}
if( has_term( 'feder', 'fonds' ) ) {
  $pageid = 25;
}
if( has_term( 'fse', 'fonds' ) ) {
  $pageid = 60;
}
if( has_term( 'feamp', 'fonds' ) ) {
  $pageid = 90;
}
if( has_term( 'feader-leader', 'fonds' ) ) {
  $pageid = 52;
}

// The Query
$p1= new WP_Query( array( 'page_id' => $pageid) );
if ( $p1->have_posts() ) : ?>

    <!-- pagination here -->
    <section>
    <a name="p1">&nbsp;</a>
    <!-- the loop -->
    <?php while ( $p1->have_posts() ) : $p1->the_post(); ?>
        <header class="section-header">
          <h2>L'utilisation du logo sur vos supports de communication</h2>
        </header>
        <?php 

        $logo = get_field('logo');
        $logotypes = get_field('logotypes');
        $gabarits = get_field('gabarits');

        if( !empty($logo) ): ?>

          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="img-logo img-fluid" />

        <?php endif; ?>

        <div class="section-content"><?php the_content(); ?></div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->
    </section>

    <?php wp_reset_postdata(); ?>

  <?php endif; ?>