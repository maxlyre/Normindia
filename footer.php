				<footer class="footer" id="contact" role="contentinfo" data-magellan-target="contact">

							<?php
									// query for the about page
									$your_query = new WP_Query( 'pagename=footer' );
									// "loop" through query (even though it's just one page)
									while ( $your_query->have_posts() ) : $your_query->the_post();
									$image = get_field('background_image_footer');
						        ?>
						       <div id="inner-footer" class="row expanded"style="background-image: url(<?php echo $image['url']; ?>);">
										<div class="large-6 medium-10 column medium-centered ">
											<h1 class="column medium-12"><?php the_field('titre'); ?></h1>
									<div class="column medium-6 footer-left">

										<p><?php the_field('adresse'); ?></p>
										<?php if( have_rows('contact') ):

											while( have_rows('contact') ): the_row();

												?>
												<div>

														<h2><?php the_sub_field('nom'); ?></h2>
														<?php if( have_rows('telephone') ):

															// loop through the rows of data
																while ( have_rows('telephone') ) : the_row(); ?>
																			<p class="telephone"><?php echo the_sub_field('numero');?></p>
																<?php endwhile;

														else :

																// no rows found

														endif;

														?>
												</div>
											<?php endwhile; ?>

										<?php endif; ?>
									</div>
									<div class="column medium-6 footer-right">

														<h2>Mail : </h2>
														<?php if( have_rows('mail') ):

															// loop through the rows of data
																while ( have_rows('mail') ) : the_row(); ?>
																			<a href="mailto:<?php echo the_sub_field('adresse_mail');?>" class="mail"><?php echo the_sub_field('adresse_mail');?></a>
																<?php endwhile;

														else :

																// no rows found

														endif;

														?>
												</div>
											</div>
									</div> <!-- end #inner-footer -->
									<?php endwhile;
									// reset post data (important!)
									wp_reset_postdata();
							?>



				</footer> <!-- end .footer -->
							<!-- #age verification modal -->
			<div class="reveal" id="age" data-reveal data-close-on-esc="false" data-close-on-click="false" >
				<div class="age-container">
					<img class="modal-logo" src="<?php echo get_template_directory_uri().'/assets/images/logo.png' ?>" alt="Coquerel Logo">
					<p class="alert"><?php pll_e('In order to navigate on this website you must have the minimum legal drinking age') ?></p>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Language") ) : ?><?php endif;?>
					<?php echo do_shortcode('[contact-form-7 id="85" title="Age légal"]'); ?>
					<p id="age-validation"><input type="checkbox" class="age_tcheck"><span><?php pll_e('I hereby certify that I am at least 16 years old to access this website') ?></span></p>
					<a id="age-verification" class="inactive" href="#validation"><?php pll_e('Enter') ?></a>
				</div>
			</div>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
