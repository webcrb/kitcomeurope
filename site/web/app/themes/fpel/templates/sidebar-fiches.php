
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

        if( !empty($logotypes) ): ?>

          <p><a href="<?php echo $logotypes['url']; ?>" class="btn btn-block btn-lg btn-primary"><i class="icon-briefcase"></i> les logotypes</a><p>

        <?php endif;

        if( !empty($gabarits) ): ?>

          <p><a href="<?php echo $logotypes['url']; ?>" class="btn btn-block btn-lg btn-primary"><i class="icon-file-text"></i> les gabarits</a><p>

        <?php endif; ?>

          <aside class="fiche-sidebar">
              <h2>Contact</h2>
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