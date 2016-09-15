<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<section id="branding">

		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"  alt="Some alt text here">
		<!--<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>-->
		<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
	</section>
	<nav id="menu" role="navigation">
	<!--<div id="search">
	<?php get_search_form(); ?>
	</div>-->
	<div class="menu-burger"></div>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</nav>
</header>
<div id="container">