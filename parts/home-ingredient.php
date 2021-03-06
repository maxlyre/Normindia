<div id="ingredients" class="row expanded" data-magellan-target="ingredients">
  <div class="column xlarge-2 large-1 medium-0">
  <p></p></div>

  <div class="column xlarge-8 large-10 medium-12">
  <?php if( have_rows('ingredients') ):

  	while( have_rows('ingredients') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
      <div class="ingredient-container">
        <?php

          // check if the repeater field has rows of data
          if( have_rows('ingredient') ):

           	// loop through the rows of data
              while ( have_rows('ingredient') ) : the_row(); ?>
                  <div class="column medium-3 small-6 ingredient-contain">
                    <?php $image = get_sub_field('miniatures');
                      ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <h2 class="nombre"><?php echo the_sub_field('nom_ingredient');?></h2>
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
  <div class="column xlarge-2 large-1 medium-0">
  </div>
</div>
