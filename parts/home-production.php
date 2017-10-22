<div id="production" class="row expanded">
  <div class="column medium-2">
  <p></p></div>

  <div class="column medium-6">
  <?php if( have_rows('production') ):

  	while( have_rows('production') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
      <h2 class="column medium-12"><?php the_sub_field('sous-titre'); ?></h2>
      <div>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('etape_de_production') ):

           	// loop through the rows of data
              while ( have_rows('etape_de_production') ) : the_row();
              $image = get_sub_field('image_production');?>
                  <div class="column medium-4 etape-content">
                    <div class="miniature"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
                    <div class="etape-text"><?php echo the_sub_field('texte_production');?></div>
                  </div>
              <?php endwhile;

          else :

              // no rows found

          endif;

          ?>
      </div>
  	<?php endwhile; ?>

  <?php endif; ?>
  </div>
  <div class="column medium-4">
    <?php if( have_rows('production') ):

      while( have_rows('production') ): the_row();
      $image = get_sub_field('image');
        ?>
        <div style="background-image: url(<?php echo $image['url']; ?>);">
          <p><?php the_sub_field('texte_image'); ?></p>
        </div>
      <?php endwhile; ?>

    <?php endif; ?>
  </div>
</div>
