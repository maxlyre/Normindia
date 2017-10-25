<div id="production" class="row expanded" data-magellan-target="production">
  <div class="column medium-2">
  <p></p></div>

  <div class="column medium-6 production-content">
  <?php if( have_rows('production') ):

  	while( have_rows('production') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
      <h2 class="column medium-12"><?php the_sub_field('sous-titre'); ?></h2>
      <div class="production_container">
        <?php

          // check if the repeater field has rows of data
          if( have_rows('etape_de_production') ):

           	// loop through the rows of data
              while ( have_rows('etape_de_production') ) : the_row();
              $image = get_sub_field('image_production');?>
                  <div class="column medium-4 etape-content">
                    <div class="miniature"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
                    <p class="etape-text"><?php echo the_sub_field('texte_production');?></p>
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
  <?php if( have_rows('production') ):

    while( have_rows('production') ): the_row();
    $image = get_sub_field('image');
      ?>
  <div class="column medium-4 production_text_container" style="background-image: url(<?php echo $image['url']; ?>);">
          <p class="production_text"><?php the_sub_field('texte_image'); ?></p>
      <?php endwhile; ?>

    <?php endif; ?>
  </div>
</div>
