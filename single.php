<?php/*
=====================================================
*BUILD THE SINGLE POST VIEW ON THE BLOG
=====================================================
*/?>

<?php get_header(); ?>


<div class="row" id="index-row"><!--CONTAINER OF THE SINGLE POST-->
		<div class="col-xs-12, col-sm-9" id="single-background-color"><!--CONTAINER OF THE SINGLE POST "SIZE"-->


				<br>
				<?php
					if( have_posts() ):
							while( have_posts() ): the_post(); ?>
									<br>	
									<div class="single-margin-left">
											<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!--content article -->
										
											<div class="post-line">
													<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/08/video.gif"></img>
											</div>

								
											<?php the_title('<h1 class="entry-title">','</h1>'); ?>
											<small class="time"><?php the_time('F j, Y'); ?></small><!-- time -->
											<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php the_post_thumbnail('full'); ?></div>

							
						
											<?php the_content();?>
											<hr>
											<div class="comments"><!--COMMENT BOX-->
													<?php	if( comments_open() ){
																comments_template();
													}else{
														echo '<h5 class="text-center">Sorry, Comments are closed!!! Thankyou!!!</h5>';
													}
													?>
											</div>
											
											<div class="row"><!--NEXT AND PREVIOUS POST LINK-->
													<div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
													<div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
											</div>				

									</div>
						
					<?php endwhile;
					endif;
				?>
				
				<div class="sample-ads">
				<a href="http://www.hostgator.com/?gclid=CjwKEAjwhdOwBRDFsYTfhvzX1hYSJAAfCUcLc_L2UfT3T6Z6B7ZnpAebOfxry399cwKAF37EShkuERoCeXvw_wcB#wto-48?utm_source=google&utm_medium=brandsearch&utm_campaign=329589" target="_blank">
						<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/10/hostgator.jpg"></img></a>
				</div>
							

				<div class="related-post"><!--RELATED POST-->
						
						<?php $orig_post = $post;
						global $post;
						$categories = get_the_category($post->ID);
								
						if ($categories) {
							$category_ids = array();
									
						foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								
								$args=array(
									'category__in' => $category_ids,
									'post__not_in' => array($post->ID),
									'posts_per_page'=> 2, // Number of related posts that will be shown.
									'caller_get_posts'=>1
									);
									
								
						$my_query = new wp_query( $args );
							
								if( $my_query->have_posts() ) {
									
									echo '<div id="related_posts"><h3>Related Posts</h3><ul>';
									
								while( $my_query->have_posts() ) {
										$my_query->the_post();?>
								
								<div class="col-xs-12, col-sm-5">
										<li>

												<div class="title-single"><?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())),'</a></h1>' );?></div>
												<?php the_time('M j, Y') ?>

												<div class="entry">
														<a href="<?php the_permalink() ?>">
																<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { 
																	the_post_thumbnail(array(1000,1000), 
																array("class" => "post-image")
																); 
																} ?>
															
														</a>
													
												</div>

										</li>
								</div>
									<?php
									}
									echo '</ul></div>';
									}
									}
									$post = $orig_post;
									
						wp_reset_query(); ?>
				</div><!--END RELATED POST-->
				
								<div class="sample-ads">
										<a href="http://www.lazada.com.ph/" target="_blank">
										<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/10/images.jpg"></img></a>
								</div>									
				
		</div>
</div>

								


<?php get_footer(); ?>