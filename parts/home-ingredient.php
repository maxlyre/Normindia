<div id="ingredients" class="row expanded">
  <div class="column medium-2">
  <p></p></div>

  <div class="column medium-8">
  <?php if( have_rows('ingredients') ):

  	while( have_rows('ingredients') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
  		<div class="column medium-12">
        <?php the_sub_field('texte'); ?>
  		</div>
      <div>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('ingredient') ):

           	// loop through the rows of data
              while ( have_rows('ingredient') ) : the_row(); ?>
                  <div class="column medium-3">
                    <?php $image = get_sub_field('miniatures');
                      ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <h3 class="nombre"><?php echo the_sub_field('nom_ingredient');?></h3>
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
  <div class="column medium-2">
  </div>
</div>
