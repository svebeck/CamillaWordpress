<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

</head>

<body>
<div id="wrapper" class="hfeed">

<?php if (is_page() ): ?>
<div class="bg-cover">
	<header id="header" class="row collapse" role="banner">
		<div class="column small-12">
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
		<div class="column small-12 header-title">
			<p>Ny logotyp/ identitet till Bar Brillo.</p>
			<a>Se case</p>
		</div>
	</header>
	<div class="arrow-container">
		<a href="#projects" class="arrow-down"><img class="svg arrow-down-icon" src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.svg" /></a>
	</div>
</div>
<?php else: ?>
<header id="header" class="row collapse" role="banner">
	<div class="column small-12">
		<section id="branding">
			<a class="logo" href="<?php echo get_home_url(); ?>">
				<img class="logo-icon fill-black svg" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />
			</a>
		</section>
		<nav id="menu" role="navigation">
			<a class="menu-burger">
				<img class="menu-burger-icon fill-black svg" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" />
			</a>
		</nav>
	</div>
</header>
<?php endif; ?>

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
				<li><a href="#footer">Kontakt</a></li>
			</ul>
		</div>
	</div>		
</nav>
<div id="container">
