				<footer class="footer" id="contact" role="contentinfo">

							<?php
									// query for the about page
									$your_query = new WP_Query( 'pagename=footer' );
									// "loop" through query (even though it's just one page)
									while ( $your_query->have_posts() ) : $your_query->the_post();
									$image = get_field('background_image_footer');
						        ?>
						       <div id="inner-footer" class="row expanded"style="background-image: url(<?php echo $image['url']; ?>);">
										<div class="medium-6 column medium-centered ">
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
																			<a href="<?php echo the_sub_field('adresse_mail');?>" class="mail"><?php echo the_sub_field('adresse_mail');?></a>
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
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
