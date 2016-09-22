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
			<a class="logo" href="<?php echo get_home_url(); ?>">
				<img class="logo-icon svg" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
			</a>
		</section>
		<nav id="menu" role="navigation">
			<a class="menu-burger">
				<img class="menu-burger-icon svg" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" />
			</a>
		</nav>
	</div>
</header>

<nav class="menu-block">
	<div class="row collapse">
		<div class="column small-6">
			<a class="logo" href="<?php echo get_home_url(); ?>"> 
				<img class="logo-icon svg" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
			</a>
		</div>
		<div class="column small-6">
			<a class="menu-burger">
				<img class="menu-burger-icon svg" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" />
			</a>
		</div>
		<div class="column small-12">
			<ul>
				<li><a href="#projects">Senaste projekt</a></li>
				<li><a href="#about">Om mig</a></li>
				<li><a class="show-for-medium-down" href="#contact1">Kontakt</a><a class="hide-for-medium-down" href="#contact2">Kontakt</a></li>
			</ul>
		</div>
	</div>		
</nav>
<div id="container">
