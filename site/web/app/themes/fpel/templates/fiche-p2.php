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
      <th scope="row" class="etape"><span>1.</span>Pendant toute l'opération</th>
      <td <?php if(!get_field('title-spo-o') && !get_field('infos-spo-o') ){ echo 'class="empty"'; } ?>>
        <h4><?php if(get_field('title-spo-o')){ the_field('title-spo-o'); } ?></h4>
        <?php if(get_field('infos-spo-o')){ the_field('infos-spo-o'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spo-o')){ the_field('conseil-spo-o'); } ?>
        </p>
        
        <?php if( get_field('btn-url-spo-o') ): ?>

          <p><a href="<?php the_field('btn-url-spo-o'); ?>" class="btn btn-block btn-fonds"><span><?php the_field('btn-title-spo-o'); ?></span></a><p>

        <?php endif; ?>
        
      </td>
      <td <?php if(!get_field('title-spo-r') && !get_field('infos-spo-r') ){ echo 'class="empty"'; } ?>>
        <h4><?php if(get_field('title-spo-r')){ the_field('title-spo-r'); } ?></h4>
        <?php if(get_field('infos-spo-r')){ the_field('infos-spo-r'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spo-r')){ the_field('conseil-spo-r'); } ?>
        </p>
        <?php if( get_field('btn-url-spo-r') ): ?>

          <p><a href="<?php the_field('btn-url-spo-r'); ?>" class="btn btn-block btn-fonds"><span><?php the_field('btn-title-spo-r'); ?></span></a><p>

        <?php endif; ?>

      </td>
    </tr>
  <?php endif; ?>
    
  <?php if( get_field('spt') ): ?>
    <tr>
      <th scope="row" class="etape"><span>2.</span>Pendant les travaux</th>
      <td <?php if(!get_field('title-spt-o') && !get_field('infos-spt-o') ){ echo 'class="empty"'; } ?>>
        <h4><?php if(get_field('title-spt-o')){ the_field('title-spt-o'); } ?></h4>
        <?php if(get_field('infos-spt-o')){ the_field('infos-spt-o'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spt-o')){ the_field('conseil-spt-o'); } ?>
        </p>
        
        <?php if( get_field('btn-url-spt-o') ): ?>

          <p><a href="<?php the_field('btn-url-spt-o'); ?>" class="btn btn-block btn-fonds"><span><?php the_field('btn-title-spt-o'); ?></span></a><p>

        <?php endif; ?>
        
      </td>
      <td <?php if(!get_field('title-spt-r') && !get_field('infos-spt-r') ){ echo 'class="empty"'; } ?>>
        <h4><?php if(get_field('title-spt-r')){ the_field('title-spt-r'); } ?></h4>
        <?php if(get_field('infos-spt-r')){ the_field('infos-spt-r'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-spt-r')){ the_field('conseil-spt-r'); } ?>
        </p>
        
        <?php if( get_field('btn-url-spt-r') ): ?>

          <p><a href="<?php the_field('btn-url-spt-r'); ?>" class="btn btn-block btn-fonds"><span><?php the_field('btn-title-spt-r'); ?></span></a><p>

        <?php endif; ?>

      </td>
    </tr>
  <?php endif; ?>
    
    <?php if( get_field('sao') ): ?>
    <tr>
      <th scope="row" class="etape"><?php if( get_field('spt') ): ?><span>3.</span><?php else: ?><span>2.</span><?php endif; ?>Après l'opération</th>
      <td <?php if(!get_field('title-sao-o') && !get_field('infos-sao-o') ){ echo 'class="empty"'; } ?>>
        <h4><?php if(get_field('title-sao-o')){ the_field('title-sao-o'); } ?></h4>
        <?php if(get_field('infos-sao-o')){ the_field('infos-sao-o'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-sao-o')){ the_field('conseil-sao-o'); } ?>
        </p>
        
        <?php if( get_field('btn-url-sao-o') ): ?>

          <p><a href="<?php the_field('btn-url-sao-o'); ?>" class="btn btn-block btn-fonds"><span><?php the_field('btn-title-sao-o'); ?></span></a><p>

        <?php endif; ?>
        
      </td>
      <td <?php if(!get_field('title-sao-r') && !get_field('infos-sao-r') ){ echo 'class="empty"'; } ?>>
        <h4><?php if(get_field('title-sao-r')){ the_field('title-sao-r'); } ?></h4>
        <?php if(get_field('infos-sao-r')){ the_field('infos-sao-r'); } ?>
        <p class="font-italic">
          <?php if(get_field('conseil-sao-r')){ the_field('conseil-sao-r'); } ?>
        </p>
        
        <?php if( get_field('btn-url-sao-r') ): ?>

          <p><a href="<?php the_field('btn-url-sao-r'); ?>" class="btn btn-block btn-fonds"><span><?php the_field('btn-title-sao-r'); ?></span></a><p>

        <?php endif; ?>

      </td>
    </tr>
  <?php endif; ?>
    
  </tbody>
</table>