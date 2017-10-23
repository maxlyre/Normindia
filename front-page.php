<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row expanded">
						<?php get_template_part( 'parts/home', 'header' ); ?>
			    	<?php get_template_part( 'parts/home', 'histoire' ); ?>
						<?php get_template_part( 'parts/home', 'production' ); ?>
						<?php get_template_part( 'parts/home', 'adn' ); ?>
						<?php get_template_part( 'parts/home', 'ingredient' ); ?>
						<?php get_template_part( 'parts/home', 'batch' ); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
