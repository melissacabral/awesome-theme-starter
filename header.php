<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php 
	//Necessary in <head> for JS and plugins to work. 
	wp_head();  ?>
	
</head>
<body>	
	<div id="wrapper">
	<header role="banner">
		<div class="top-bar clearfix">
			<h1 class="site-name">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"> 
					<?php bloginfo('name'); ?> 
				</a>
			</h1>
			<h2 class="site-description"> <?php bloginfo('description'); ?> </h2>
			<nav>
				<ul class="nav">
					<?php wp_list_pages( array(
						'depth' => 1,
						'title_li' => '',
						) ); ?>
					</ul>
				</nav>
		</div><!-- end .top-bar -->
		
		<ul class="utilities">
			<li><a href="/contact-us/">Contact Us</a></li>
			<li><a href="/location/">Location</a></li>
		</ul>
		<?php get_search_form(); //includes searchform.php if it exists, if not, this outputs the default search bar ?>	
	</header>