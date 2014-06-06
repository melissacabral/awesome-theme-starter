<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/reset.css" />
	<?php 
//Necessary in <head> for JS and plugins to work. 
//I like it before style.css loads so the theme stylesheet is more specific than all others.
	wp_head();  ?>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- HTML5 shiv -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

</head>

<body>	
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