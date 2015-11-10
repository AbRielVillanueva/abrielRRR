<?php get_header(); ?>


<div class="col-xs-12, col-sm-9">

		<div class="my-category">
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
		
		<div class="category-nav">
				<?php wp_nav_menu(array('theme_location'=>'secondary'));?>
		</div>
		
		<?php
		if( have_posts() ): ?>
		<div class="search-result-for">
				<h2>Search Result for: <b><?php the_search_query(); ?></b></h2>
		</div>
	
				<?php while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?><!-- to call the content/post format -->	
				<?php endwhile; ?>
		<?php else :?>
		
		<article class="nothing-found">
				<hr>
				<h2>Nothing Found...</h2>
				<br>
				<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
		</article>
		
			<!-- pagination-->
		<br>
		<div class="col-xs-6 text-left">
				<?php next_posts_link('< Older Posts'); ?>
		</div>
		<div class="col-xs-6 text-right">
				<?php previous_posts_link('Newer Posts >'); ?>
		</div>
			<!-- end pagination-->
		<?php	endif;
				wp_reset_query();
		?>
		
		<hr>
		
		<?php get_footer(); ?>
</div>
