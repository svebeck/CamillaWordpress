<?php get_header(); ?>
<section id="content" class="single" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="category"><?php the_field("category"); ?></div>
	<h1 class="title"><?php the_title(); ?></h1>

	<div class="row collapse images">
		<div class="column small-12 medium-6">
			<img src="<?php the_field('image'); ?>" style="background-color:<?php the_field('image_background_color');?>">
		</div>
		<div class="column small-12 medium-6" style="background-color:<?php the_field('image2_background_color');?>">
			<img src="<?php the_field('image2'); ?>" />
		</div>
	</div>

	<div class="row collapse">
		<div class="column small-12 medium-6 block">
			<h2>Klient</h2>
			<p><?php the_field("client"); ?></p>
		</div>
		<div class="column small-12 medium-6"></div>
		<div class="column small-12 medium-6 block">
			<h2>Uppdrag</h2>
			<p><?php the_field("mission"); ?></p>
		</div>
		<div class="column small-12 medium-6"></div>
		<div class="column small-12 medium-6"></div>
		<div class="column small-12 medium-6 block">
			<p class="quote"><?php the_field("quote"); ?></p>
		</div>
		<div class="column small-12 medium-6 block">
			<h2>Lösning</h2>
			<p><?php the_field("solution"); ?></p>
		</div>
		<div class="column small-12 medium-6"></div>
		<div class="column small-12 medium-6 block">
			<h2>Resultat</h2>
			<p><?php the_field("result"); ?></p>
		</div>
		<div class="column small-12 medium-6"></div>
	</div>
	<div class="row collapse">
		<div class="column small-12 medium-6 block">
			<h3>Vill du veta mer? Hör av dig!</h3>
			<p class="info">camilla.karlsson@medieinstitutet.se</p>
			<p class="info">070-6113064</p>
		</div>
	</div>
<?php endwhile; endif; ?>

	<div class="line"></div>

<?php get_template_part( 'projects' ); ?>
</section>


<?php get_footer(); ?>