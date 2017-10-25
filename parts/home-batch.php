<div id="batch" class="row expanded" data-magellan-target="batch">
  <div class="column xlarge-2 large-1 medium-0">
  <p></p></div>

  <div class="column xlarge-8 large-10 medium-12">
  <?php if( have_rows('batch') ):

  	while( have_rows('batch') ): the_row();

  		?>
      <div class="column medium-4">
        <?php $image = get_sub_field('image_batch');
          ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <div class="column medium-8">
        <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('chiffre_batch') ):?>
              <div class="chiffre_container">
            <?php  while ( have_rows('chiffre_batch') ) : the_row(); ?>
                  <div class="column medium-4 small-6 chiffre-content">
                    <h1 class="nombre"><?php echo the_sub_field('nombre');?></h1>
                    <h2 class="nombre-titre"><?php echo the_sub_field('sujet');?></h2>
                    <p class="nombre-text"><?php echo the_sub_field('sous_texte');?></p>
                  </div>
              <?php endwhile;?>
              </div>
          <?php else :

         endif;

          ?>
      </div>
  	<?php endwhile; ?>

  <?php endif; ?>
  </div>
  <div class="column xlarge-2 large-1 medium-0">
  </div>
</div>
