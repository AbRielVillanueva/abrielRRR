
<article id="quote"><!--Quote Post Format-->

		<div class="post-line">
				<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/08/aside.gif"></img>
		</div>

		<div class="entry">
				<div class="post-image-size">
						<a href="<?php the_permalink() ?>">
						
							<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { 
								the_post_thumbnail(array(2000,2000), 
									array("class" => "post-image")
													); 
								} ?>
						</a>
				</div>
		</div>
		
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>' );?>
		<small class="time"><?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php the_category(' '); ?> | Comments <a href="<?php the_permalink() ?>"><?php comments_number(); ?></a></small><!-- time -->
		<?php the_excerpt();?>	
		<br>
		<br>
		<br>

</article>