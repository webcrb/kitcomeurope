<?php the_content(); ?>

<table class="table table-bordered">
  <thead class="thead-inverse text-uppercase">
    <tr>
      <th>&nbsp;</th>
      <th>Supports obligatoires</th>
      <th>Supports recommandés</th>
    </tr>
  </thead>
  <tbody>
    <?php if( get_field('spo') ): ?>
    <tr>
      <th scope="row">Pendant toute l'opération</th>
      <td>
        <h4><?php if(get_field('title-spo-o')){ the_field('title-spo-o'); } ?></h4>
        <?php if(get_field('infos-spo-o')){ the_field('infos-spo-o'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spo-o')){ the_field('conseil-spo-o'); } ?>
        </p>
        
        <?php if( get_field('btn-url-spo-o') ): ?>

          <p><a href="<?php the_field('btn-url-spo-o'); ?>" class="btn btn-block btn-primary-outline"><?php the_field('btn-title-spo-o'); ?></a><p>

        <?php endif; ?>
        
      </td>
      <td>
        <h4><?php if(get_field('title-spo-r')){ the_field('title-spo-r'); } ?></h4>
        <?php if(get_field('infos-spo-r')){ the_field('infos-spo-r'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spo-r')){ the_field('conseil-spo-r'); } ?>
        </p>
        <?php if( get_field('btn-url-spo-r') ): ?>

          <p><a href="<?php the_field('btn-url-spo-r'); ?>" class="btn btn-block btn-primary-outline"><?php the_field('btn-title-spo-r'); ?></a><p>

        <?php endif; ?>

      </td>
    </tr>
  <?php endif; ?>
    
    <?php if( get_field('spt') ): ?>
    <tr>
      <th scope="row">Pendant les travaux</th>
      <td>
        <h4><?php if(get_field('title-spt-o')){ the_field('title-spt-o'); } ?></h4>
        <?php if(get_field('infos-spt-o')){ the_field('infos-spt-o'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spt-o')){ the_field('conseil-spt-o'); } ?>
        </p>
        
        <?php if( get_field('btn-url-spt-o') ): ?>

          <p><a href="<?php the_field('btn-url-spt-o'); ?>" class="btn btn-block btn-primary-outline"><?php the_field('btn-title-spt-o'); ?></a><p>

        <?php endif; ?>
        
      </td>
      <td>
        <h4><?php if(get_field('title-spt-r')){ the_field('title-spt-r'); } ?></h4>
        <?php if(get_field('infos-spt-r')){ the_field('infos-spt-r'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spt-r')){ the_field('conseil-spt-r'); } ?>
        </p>
        
        <?php if( get_field('btn-url-spt-r') ): ?>

          <p><a href="<?php the_field('btn-url-spt-r'); ?>" class="btn btn-block btn-primary-outline"><?php the_field('btn-title-spt-r'); ?></a><p>

        <?php endif; ?>

      </td>
    </tr>
  <?php endif; ?>
    
    <?php if( get_field('sao') ): ?>
    <tr>
      <th scope="row">Après l'opération</th>
      <td>
        <h4><?php if(get_field('title-sao-o')){ the_field('title-sao-o'); } ?></h4>
        <?php if(get_field('infos-sao-o')){ the_field('infos-sao-o'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-sao-o')){ the_field('conseil-sao-o'); } ?>
        </p>
        
        <?php if( get_field('btn-url-sao-o') ): ?>

          <p><a href="<?php the_field('btn-url-sao-o'); ?>" class="btn btn-block btn-primary-outline"><?php the_field('btn-title-sao-o'); ?></a><p>

        <?php endif; ?>
        
      </td>
      <td>
        <h4><?php if(get_field('title-sao-r')){ the_field('title-sao-r'); } ?></h4>
        <?php if(get_field('infos-sao-r')){ the_field('infos-sao-r'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-sao-r')){ the_field('conseil-sao-r'); } ?>
        </p>
        
        <?php if( get_field('btn-url-sao-r') ): ?>

          <p><a href="<?php the_field('btn-url-sao-r'); ?>" class="btn btn-block btn-primary-outline"><?php the_field('btn-title-sao-r'); ?></a><p>

        <?php endif; ?>

      </td>
    </tr>
  <?php endif; ?>
    
  </tbody>
</table>