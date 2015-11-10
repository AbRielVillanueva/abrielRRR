<?php get_header(); ?>
<!----------------------HOME-PAGE----------------------->
		<?php	
		if( have_posts() ):
				while( have_posts() ): the_post(); ?>
				<?php get_template_part('content',get_post_format()); ?><!-- to call the content/post format -->

				<?php endwhile; ?>
				
		<!-- pagination-->
				<div class="col-xs-12 text-left">
						<?php next_posts_link('< Older Posts'); ?>
				</div>
				<div class="col-xs-12 text-right">
						<?php previous_posts_link('Newer Posts >'); ?>
				</div>
				
		<!-- end pagination-->
			<?php	endif;
					wp_reset_query();
			?>

			<hr>
		
<?php get_footer(); ?>