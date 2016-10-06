<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

</head>

<body>
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
			<a class="menu-cross">
				<img class="menu-cross-icon svg" src="<?php echo get_template_directory_uri(); ?>/images/cross.svg" />
			</a>
		</div>
		<div class="column small-12">
			<ul>
				<li><a href="#projects">Senaste projekt</a></li>
				<li><a href="<?php echo get_home_url(); ?>#about">Om mig</a></li>
				<li><a class="show-for-medium-down" href="#contact1">Kontakt</a><a class="hide-for-medium-down" href="#contact2">Kontakt</a></li>
			</ul>
		</div>
	</div>		
</nav>
<div id="container">
