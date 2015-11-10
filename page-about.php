<?php 
/*
	Template Name: About
*/
get_header(); ?>

		<div class="col-xs-12, col-sm-9">

				<?php
				if( have_posts() ):
								while( have_posts() ): the_post(); ?>
								<?php get_template_part('content','page'); ?><!-- to call the content/post format -->
							
						<?php endwhile; ?>
						<?php	endif;
								wp_reset_query();
						?>
				<hr>

				<?php get_footer(); ?>
				
		</div>

