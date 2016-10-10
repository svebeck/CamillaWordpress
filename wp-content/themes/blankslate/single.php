<?php get_header(); ?>
<section id="content" class="row collapse single content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="column small-12">
		<div class="category"><?php the_field("category"); ?></div>
		<h1 class="title"><?php the_title(); ?></h1>
	</div>

	<?php if ( get_field('has_full_image') ) : ?> 
		<div class="column small-12 hide-for-small-only full-image">
			<a class="fancybox" rel="group" href="<?php the_field('full_image'); ?>">
				<img src="<?php the_field('full_image'); ?>">
			</a>
		</div>
		<div class="column small-12 show-for-small-only single-image">
			<a class="fancybox" rel="group" href="<?php the_field('featured_image'); ?>">
				<img src="<?php the_field('featured_image'); ?>">
			</a>
		</div>
	<?php else: ?>
		<div class="column small-12 medium-6">
			<?php 

			if ( get_field('has_video') ) : 
			?> 
				<a href="#video1" rel="group" class="fancybox">
					<img src="<?php the_field('image'); ?>" style="background-color:<?php the_field('image_background_color');?>">
				</a>
				<video class="video" id="video1" style="display:none;" onclick="playPause()">
				  <source src="<?php the_field('video'); ?>" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
			<?php else: ?>
				<a class="fancybox" rel="group" href="<?php the_field('image'); ?>">
					<img src="<?php the_field('image'); ?>" style="background-color:<?php the_field('image_background_color');?>">
				</a>
			<?php endif; ?>
		</div>
		<div class="column small-12 medium-6 single-image" style="background-color:<?php the_field('image2_background_color');?>">
			<a class="fancybox" rel="group" href="<?php the_field('image2'); ?>">
				<img src="<?php the_field('image2'); ?>" />
			</a>
		</div>
	<?php endif; ?>

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

	<?php if ( get_field('has_quote') ) : ?> 
		<div class="column small-12 medium-6"></div>
		<div class="column small-12 medium-6 block">
			<p class="quote"><?php the_field("quote"); ?></p>
		</div>
	<?php endif; ?> 

	<?php if ( get_field('has_picture_group') ) : ?>
		<div class="column small-12 medium-6 group-large-image">
			<a class="fancybox" rel="group2" href="<?php the_field('group_image_1'); ?>">
				<img src="<?php the_field('group_image_1'); ?>">
			</a>
		</div>
		<div class="column small-12 medium-6 group-medium-image block">
			<a class="fancybox" rel="group2" href="<?php the_field('group_image_2'); ?>">
				<img src="<?php the_field('group_image_2'); ?>" />
			</a>
			<a class="fancybox" rel="group2" href="<?php the_field('group_image_3'); ?>">
				<img src="<?php the_field('group_image_3'); ?>" />
			</a>
		</div>
	<?php endif; ?>

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
	<div class="column small-12 medium-6 block">
		<h3>Vill du veta mer? Hör av dig!</h3>
		<p class="info">camilla.karlsson@medieinstitutet.se</p>
	</div>
	<?php endwhile; endif; ?>

	<div class="columns line"></div>
</section>

<div class="row single content">
	<div class="columns">
		<?php get_template_part( 'projects' ); ?>
		<a href="#wrapper" class="button-up">Till toppen</a>
	</div>
</div>

<?php get_footer(); ?>