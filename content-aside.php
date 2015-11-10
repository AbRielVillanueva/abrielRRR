
<article id="aside"><!--Aside Post Format-->

		<div class="post-line">
				<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/07/abriel-logo.gif"></img>
		</div>
		
		

		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>' );?>
		<small class="time"><?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php the_category(' '); ?> </small><!-- time -->
		<?php the_excerpt();?>
		<br>
		<br>
		<br>

</article>
