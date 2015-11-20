<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(' - ', true, 'right');?>  <?php bloginfo('name'); ?></title><!-- post the title above -->
		<meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head>
<?php 
/*=========================================================
body_class
if statement
frontpage == "optimized-class", "my-class"
in not == "no-optimized-class"
===============================================================*/
	if( is_front_page() || is_archive() ):
			$abrielRRR_classes = array('abrielRRR-class', 'my-class');
		elseif ( is_single() ):
			$abrielRRR_classes = array('abrielRRR-single-class', 'my-single-class');
		elseif ( is_page() ):
			$abrielRRR_classes = array('abrielRRR-pages-class', 'my-pages-class');
		else:
			$abrielRRR_classes = array('not-abrielRRR-class');
		endif;
?>


<!-- start of my body-->
<body <?php body_class( $abrielRRR_classes ); ?> data-spy="scroll" data-target=".navbar" data-offset="50"><!-- body class with if statement $optimized_classes -->
	
		<div class="row">
		
				<div class="col-xs-0, col-sm-3" id="left"><!--LEFT SIDEBAR-->
						<?php get_sidebar(); ?>
				</div>
		
			
				<div class="col-xs-12, col-sm-9"  id="right"><!--RIGHT POST CONTAINER-->

						<div class="bs-example"><!-- HIDDEN NAVIGATION -->
								<nav role="navigation" class="navbar navbar-default">
									<!-- Brand and toggle get grouped for better mobile display -->
										<div class="navbar-header">
												<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												<a href="#" class="navbar-brand"><img src="http://localhost/blog/wordpress/wp-content/uploads/2015/09/banner.gif"></a>
										</div>
										<!-- Collection of nav links and other content for toggling -->
										<div id="navbarCollapse" class="collapse navbar-collapse">
										
												<!-- post my primary nav -->
												<?php wp_nav_menu(array(
													'theme_location'=>'primary',
													'container'=>false,
													'menu_class' => 'nav navbar-nav',
													)
													);
													?>
											
												<ul class="nav navbar-nav navbar-right">
														<li><a href="#">Login</a></li>
												</ul>
										</div>
								</nav>
						</div>



	
	

