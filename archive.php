<?php get_header(); ?>


<div class="col-xs-12, col-sm-9"><!--RIGHT CONTAINER -->

		<div class="my-category"><!-- TOGGLE CATEGORIES -->
				<?php 
					wp_list_categories( array(
						'orderby' => 'count',
						'order' => 'ASC',
						'show_count' => 0,
						'title_li' => '',
						'number' => 5,
					) );
				?>
		</div>
		
		<div class="category-nav"><!-- TOGGLE CATEGORIES BUTTON -->
				<?php wp_nav_menu(array('theme_location'=>'secondary'));?>
		</div>

		<header class="page-header">
							<?php
								the_archive_title('<h1 class="page-title">', '</h1>');
								the_archive_description('<div class="taxonomy-description">', '</div>');
								?>
					</header>
				
		<?php
		if( have_posts() ):
				while( have_posts() ): the_post(); ?>
						<?php get_template_part('content','archive'); ?><!-- to call the content/post format -->
				<?php endwhile; ?>
				
				<br>
				<!-- pagination-->
				<div class="custom-pagination">
						<?php echo paginate_links( ); ?>
				</div><!-- end pagination-->
		
		<?php	
		endif;
		wp_reset_query();
		?>


		<hr>
		<?php get_footer(); ?>
</div>

