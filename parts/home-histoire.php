
<?php if( have_rows('histoire') ):
  while( have_rows('histoire') ): the_row();
  $image = get_sub_field('image_background');
?>
<div id="histoire" class="row expanded" style="background-image: url(<?php echo $image['url']; ?>);">
<?php endwhile; ?>
<?php endif; ?>

  <div class="column medium-2">
  <p></p></div>

  <div class="column medium-8">
  <?php if( have_rows('histoire') ):

  	while( have_rows('histoire') ): the_row();

  		?>
      <h1 class="column medium-12"><?php the_sub_field('titre'); ?></h1>
  		<div class="column medium-12 histoire_text">
        <?php the_sub_field('texte'); ?>
  		</div>
      <div>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('chiffre_histoire') ):

           	// loop through the rows of data
              while ( have_rows('chiffre_histoire') ) : the_row(); ?>
                  <div class="column medium-4">
                    <div class="chiffre-content">
                      <h1 class="nombre"><?php echo the_sub_field('nombre');?></h1>
                      <h2 class="nombre-titre"><?php echo the_sub_field('sujet');?></h2>
                      <p class="nombre-text"><?php echo the_sub_field('sous_texte');?></p>
                    </div>
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
