<?php get_header(); ?>
<section id="content" class="row collapse content" role="main">
	<div class="splash column small-12">
		<p class="site-name">camilladesign</p>
		<p class="site-text">portfolio 2016</p>
		<div class="thick-line"></div>
	</div>
</section>
<section class="row content">
	<div class="columns">
		<a href="#projects" class="arrow-down hide-for-small-only"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.svg" /></a>
		<?php get_template_part("projects"); ?>
	</div>
</section>
<section class="row content">
	<div class="columns">
		<section class="row collapse align-center quote">
			<div class="column small-12">
				<p class="quote-icon">&#8221;</p>
				<p class="quote-text"><?php the_field("quote"); ?></p>
				<p class="quote-author"><?php the_field("quote_author"); ?></p>
			</div>
		</section>
	</div>
</section>
<section class="row content">
	<div class="columns">
		<aside id="contact2" class="contact hide-for-large-down">
			<ul>
				<li class="header">E-MAIL</li>
				<li>camilla.karlsson@medieinstitutet.se</li>

				<li class="header">BEHANCE</li>
				<li><?php the_field("behance", "user_1"); ?></li>
			</ul>
		</aside>
	</div>
</section>
<section id="about" class="row collapse align-center about">
	<div class="column small-12">
		<h2>Om mig, några rader.</h2>
		<p><?php the_field("description"); ?></p>
	</div>
</section>
<div id="contact1" class="row collapse contact show-for-large-down align-center">

	<ul class="columns">
		<li class="header">E-MAIL</li>
		<li>camilla.karlsson@medieinstitutet.se</li>
		<li class="header">BEHANCE</li>
		<li><?php the_field("behance", "user_1"); ?></li>
	</ul>
</div>
<a href="#header" class="button-up">Till toppen</a>
<?php get_footer(); ?>