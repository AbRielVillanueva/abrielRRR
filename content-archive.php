<?php/*
=====================================================
*IMAGE AND CONTENT ON POST HAS DIFFERENT COLUMN
=====================================================
*/?>
<article><!--content article -->

		<header class="entry-header">
				<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>' ); ?><!-- title -->
				<small class="time"><?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php the_category(' '); ?> </small><!-- time -->
				<br>
		</header>
		<br>
		<div class="row">

				<?php if( has_post_thumbnail() ): ?><!-- if statement for post format -->
						<div class="col-xs-12 col-sm-6">
								<div class="thumbnail-img"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a></div><!-- post thumbnail -->
						</div>
						<div class="col-xs-12 col-sm-6">
								<div class="archive-p-font-size">
										<?php the_excerpt(); ?> <!-- content -->
								</div>
						</div>

				<?php else: ?>
						<div class="col-xs-12">
								<?php the_excerpt(); ?><!-- content -->
						</div>

				<?php endif; ?>

		</div>
		<hr>
</article>
