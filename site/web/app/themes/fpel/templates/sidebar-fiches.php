
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
    <!-- the loop -->
    <?php while ( $p1->have_posts() ) : $p1->the_post(); ?>
        <!-- pagination here -->
        <?php 

        $logotypes = get_field('logotype');
        $gabarits = get_field('gabarits');
        $ref = get_field('references');

        if( !empty($logotypes) ): ?>

          <p class="hidden-print"><a href="<?php echo $logotypes['url']; ?>" class="btn btn-block btn-lg btn-fonds"><i class="icon-download"></i> <span>Téléchargez votre logo</span></a><p>

        <?php endif;

        if( !empty($gabarits) ): ?>

          <p class="hidden-print"><a href="<?php echo $gabarits['url']; ?>" class="btn btn-block btn-lg btn-fonds"><i class="icon-file-text"></i> <span>Téléchargez votre gabarit</span></a><p>

        <?php endif;

        if( !empty($ref) ): ?>

          <p class="hidden-print"><a href="<?php echo $ref['url']; ?>" class="btn btn-block btn-lg btn-fonds"><i class="icon-gavel"></i> <span>Textes de référence</span></a><p>

        <?php endif; ?>

          <aside class="fiche-sidebar">
            <h2 class="text-uppercase">Contact</h2>
            <div class="section-content">
              <?php the_field('contact'); ?>
            </div>

          </aside>

    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->
    </section>

    <?php wp_reset_postdata(); ?>

  <?php endif; ?>