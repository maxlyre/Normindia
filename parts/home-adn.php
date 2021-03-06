<div id="adn" class="row expanded" data-magellan-target="adn">
  <div class="column xlarge-2 large-1 medium-0">
  <p></p></div>

  <div class="column xlarge-8 large-10 medium-12">
  <?php if( have_rows('adn') ):

  	while( have_rows('adn') ): the_row();

  		?>
      <h1 class="column medium-12 show-for-small hide-for-large titre-small"><?php the_sub_field('titre'); ?></h1>
      <div class="column medium-6 small-12">
        <h1 class="show-for-large hide-for-small"><?php the_sub_field('titre'); ?></h1>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('paragraphe') ):

           	// loop through the rows of data
              while ( have_rows('paragraphe') ) : the_row();
              $image = get_sub_field('image_production');?>
                  <div>
                    <h2><?php echo the_sub_field('sous-titre');?></h2>
                    <p><?php echo the_sub_field('texte');?></p>
                  </div>
              <?php endwhile;

          else :

              // no rows found

          endif;

          ?>
      </div>
      <div class="column medium-6 small-12">
        <?php $image = get_sub_field('image');
          ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
  	<?php endwhile; ?>

  <?php endif; ?>
  </div>
  <div class="column xlarge-2 large-1 medium-0">
  </div>
</div>
