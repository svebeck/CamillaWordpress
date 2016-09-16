<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<span class="category-single"><?php the_field("category"); ?></span>
	<h1 class="title-single"><?php the_title(); ?></h1>

	<div class="row collapse">
		<div class="column small-12 medium-6">
			<img src="<?php the_field('image'); ?>" style="background-color:<?php the_field('image_background_color');?>">
		</div>
		<div class="column small-12 medium-6" style="background-color:<?php the_field('image2_background_color');?>">
			<img src="<?php the_field('image2'); ?>" />
		</div>
	</div>

	<h2>Client</h2>
	<p><?php the_field("client"); ?></p>
	<h2>Mission</h2>
	<p><?php the_field("mission"); ?></p>
	<p class="quote"><?php the_field("quote"); ?></p>
	<h2>Solution</h2>
	<p><?php the_field("solution"); ?></p>
	<h2>Result</h2>
	<p><?php the_field("result"); ?></p>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>