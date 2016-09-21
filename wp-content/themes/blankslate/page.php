<?php get_header(); ?>
<section id="content" class="row" role="main">
	<div class="columns">
	  <div class="row collapse">
		  <div class="splash column small-12">
		  </div>
	  </div>
	  <div class="row collapse">
		  <div class="column small-12">
			  <div class="row align-center">
			    <div class="column small-1 arrow">
					<a href="#projects" class="arrow-down"></a>
			    </div>
			  </div>
		  </div>
	</div>
	  <?php get_template_part("projects"); ?>
	  <section class="row collapse align-center quote">
		<div class="column small-12">
		  	<p class="quote-icon">&#8221;</p>
		  	<p class="quote-text"><?php the_field("quote"); ?>
			</p>
		</div>
	  </section>
	  <aside class="contact hide-for-small-only hide-for-medium-only hide-for-large-only">
	  	<ul>
		  	<li class="header">E-MAIL</li>
			<li><?php echo get_option("admin_email"); ?></li>

			<li class="header">BEHANCE</li>
			<li><?php the_field("behance", "user_1"); ?></li>

			<li class="header">TELFONNUMMER</li>
			<li><?php the_field("phone", "user_1"); ?></li>
		</ul>
	  </aside>
	  <section class="row collapse align-center about">
		<div class="column small-12" large-6"">
		  	<h2>Archicienem con corrum qui ipient</h2>
		  	<p><?php the_field("description"); ?></p>
		</div>
	  </section>
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