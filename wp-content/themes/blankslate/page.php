<?php get_header(); ?>
<section id="content" class="row content" role="main">
	<div class="columns">
	  <div class="row collapse">
		  <div class="splash column small-12">
		  </div>
	  </div>
	  <a href="#projects" class="arrow-down hide-for-small-only"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.svg" /></a>
	  <?php get_template_part("projects"); ?>
	  <section class="row collapse align-center quote">
		<div class="column small-12">
		  	<p class="quote-icon">&#8221;</p>
		  	<p class="quote-text"><?php the_field("quote"); ?>
			</p>
		</div>
	  </section>
	  <aside id="contact2" class="contact hide-for-large-down">
	  	<ul>
		  	<li class="header">E-MAIL</li>
			<li><?php echo get_option("admin_email"); ?></li>

			<li class="header">BEHANCE</li>
			<li><?php the_field("behance", "user_1"); ?></li>
		</ul>
	  </aside>
	  <section id="about" class="row collapse align-center about">
		<div class="column small-12" large-6"">
		  	<h2>Archicienem con corrum qui ipient</h2>
		  	<p><?php the_field("description"); ?></p>
		</div>
	  </section>
	  <div id="contact1" class="row collapse contact show-for-large-down align-center">

	  	<ul class="columns">
		  	<li class="header">E-MAIL</li>
			<li><?php echo get_option("admin_email"); ?></li>
		</ul>
	  </div>
	  <a href="#header" class="button-up">Till toppen</a>
	<!-- Old Entry Code
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php comments_template(); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
	-->
	</div>
</section>
<?php get_footer(); ?>