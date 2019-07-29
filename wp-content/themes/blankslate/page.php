<?php get_header(); ?>
<section class="row content">
	<div class="columns">
		<?php get_template_part("projects"); ?>
	</div>
</section>
<!--<section class="row content">
	<div class="columns">
		<section class="row collapse align-center quote">
			<div class="column small-12">
				<p class="quote-icon">&#8221;</p>
				<p class="quote-text"><?php the_field("quote"); ?></p>
				<p class="quote-author"><?php the_field("quote_author"); ?></p>
			</div>
		</section>
	</div>
</section>-->
<section class="row content collapse">
	<div class="column hide-for-small-only small-6 hello">
		hej!
	</div>
	<div class="column small-12 medium-6">
		<p class="about"><?php the_field("description"); ?></p>
		<ul class="contact">
			<li class="header">E-MAIL</li>
			<li><?php echo get_option( 'admin_email' ); ?></li>

			<li class="header">BEHANCE</li>
			<li><?php the_field("behance", "user_1"); ?></li>
		</ul>
	</div>
</section>

<section class="row content collapse hide-for-small-only">
	<div class="column small-12">
		<a href="#projects" class="arrow-up"><img class="svg arrow-up-icon" src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.svg" /></a>
	</div>
</section>
<?php get_footer(); ?>