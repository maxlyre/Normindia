<div id="adn" class="row expanded">
  <div class="column medium-2">
  <p></p></div>

  <div class="column medium-8">
  <?php if( have_rows('adn') ):

  	while( have_rows('adn') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
      <div class="column medium-6">
        <?php

          // check if the repeater field has rows of data
          if( have_rows('paragraphe') ):

           	// loop through the rows of data
              while ( have_rows('paragraphe') ) : the_row();
              $image = get_sub_field('image_production');?>
                  <div class="column medium-4">
                    <h3><?php echo the_sub_field('sous-titre');?></h3>
                    <p><?php echo the_sub_field('texte');?></p>
                  </div>
              <?php endwhile;

          else :

              // no rows found

          endif;

          ?>
      </div>
      <div class="column medium-6">
        <?php $image = get_sub_field('image');
          ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
  	<?php endwhile; ?>

  <?php endif; ?>
  </div>
  <div class="column medium-2">
  </div>
</div>
