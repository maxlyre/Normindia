<div id="histoire" class="row expanded">
  <div class="column medium-2">
  <p></p></div>

  <div class="column medium-8">
  <?php if( have_rows('histoire') ):

  	while( have_rows('histoire') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
  		<div class="column medium-12">
        <?php the_sub_field('texte'); ?>
  		</div>
      <div>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('chiffre_histoire') ):

           	// loop through the rows of data
              while ( have_rows('chiffre_histoire') ) : the_row(); ?>
                  <div class="column medium-4 chiffre-content">
                    <div class="nombre"><?php echo the_sub_field('nombre');?></div>
                    <div class="nombre-titre"><?php echo the_sub_field('sujet');?></div>
                    <div class="nombre-text"><?php echo the_sub_field('sous_texte');?></div>
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
  <?php if( have_rows('histoire') ):

    while( have_rows('histoire') ): the_row();
    $image = get_sub_field('image_background');
      ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endwhile; ?>

  <?php endif; ?>
</div>
