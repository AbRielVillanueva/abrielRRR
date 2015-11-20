<div id="child"><!-- pagination-->
		
		<div class="container-logo" >
			
				<div class="banner-logo">
						<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/09/banner.gif">
				</div>
			
				<div class="logo">
						<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/09/ab-riel.jpg"></img>
						<p> 'The Unstoppable Dreamer!'</p>
						<small>Learning to code everyday is the key to turn a scratch into a success... Happy coding!!</small>
				</div>
				
				<div class="logo2">
						<img src="http://localhost/blog/wordpress/wp-content/uploads/2015/10/triangle.gif"></img>
				</div>
		</div>

			
		<nav class="mynavbar">
				<div class="sidenav">
					<?php get_sidebar('header'); ?>	
				</div>
		</nav>
			
		<div class="custom-links">
				<a class="fa fa-facebook" href="http://facebook.com/leirba" title="Facebook" target="_blank"></a>
				<a class="fa fa-twitter" href="https://twitter.com/aveunalliv01" title="Twitter" target="_blank"></a>
				<a class="fa fa-instagram" href="https://instagram.com/abrielvillanueva/" title="Instagram" target="_blank"></a>
				<a class="fa fa-google-plus" href="https://plus.google.com/u/0/108563987627636625268/posts" title="Google-plus" target="_blank"></a>
				<a class="fa fa-linkedin" href="https://ph.linkedin.com/pub/ab-riel-villanueva/102/675/3b0" title="LinkedIn" target="_blank"></a>
				<a class="fa fa-youtube" href="https://www.youtube.com/user/TheAbriel123" title="Youtube" target="_blank"></a>
				<a class="fa fa-github" href="https://github.com/AbRielVillanueva?tab=repositories" title="Github" target="_blank"></a>
				
		</div>

		<?php get_search_form(); ?>

		<div class="search-button">
				<?php wp_nav_menu(array('theme_location'=>'custom-links')); ?>
		</div>
		
		<div id="sidebar" class="widgets-area">
				<?php get_sidebar('header2'); ?>
		</div>

						
</div>