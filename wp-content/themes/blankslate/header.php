<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" class="row collapse" role="banner">
	<div class="columns">
		<section id="branding">
			<a href="<?php echo get_home_url(); ?>">
				<img class="logo svg" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
			</a>
			<!--<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>-->
			<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
		</section>
		<nav id="menu" role="navigation">
		<!--<div id="search">
		<?php get_search_form(); ?>
		</div>-->
		<a href="<?php echo get_home_url(); ?>">
			<img class="menu-burger svg" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" />
		</a>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</div>
</header>
<div id="container">
