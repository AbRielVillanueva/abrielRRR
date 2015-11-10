
<article id="standard"><!--Standard Post Format-->

		<div class="post-line">
				<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/07/abriel-logo.gif"></img>
		</div>
		
		<div class="standard-post-image">
		
				<div class="media">
				<div class="media__image"><?php the_post_thumbnail('full'); ?></div>
						<div class="media__body">
								<?php the_title( sprintf('<h2 class="entry-title" id="blog-post-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>' );?></div>
				</div>	
		
		</div>	
		
		<?php the_title( sprintf('<h2 class="entry-title" id="blog-post-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>' );?>
		<small class="time"><?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php the_category(); ?></small><!-- time -->
		<?php the_excerpt();?>
		<br>
		<br>
		<br>

</article>	


