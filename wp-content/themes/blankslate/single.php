<?php get_header(); ?>
<section id="content" class="row collapse single content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="column small-12">
		<div class="category"><?php the_field("category"); ?></div>
		<h1 class="title"><?php the_title(); ?></h1>
	</div>

	<?php if ( get_field('has_full_image') ) : ?> 
		<div class="column small-12 hide-for-small-only full-image">
			<img src="<?php the_field('full_image'); ?>" />
		</div>
		<div class="column small-12 show-for-small-only single-image">
			<img src="<?php the_field('featured_image'); ?>" />
		</div>
	<?php else: ?>
		<div class="column small-12 medium-6">
			<?php 

			if ( get_field('has_video') ) : 
			?> 
				<a href="#video1" class="video-box fancybox" rel="group">
					<img src="<?php the_field('image'); ?>" style="background-color:<?php the_field('image_background_color');?>" />
					<button class="play-button" data-video-id="#video1"></button>
				</a>
				<div id="video1" class="video-container" style="display:none;" >
					<video class="video" controls loop>
					  <source src="<?php echo get_template_directory_uri(); ?>/videos/<?php the_field('video'); ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video> 
				</div>
			<?php else: ?>
				<img src="<?php the_field('image'); ?>" style="background-color:<?php the_field('image_background_color');?>" />
			<?php endif; ?>
		</div>
		<div class="column small-12 medium-6 single-image" style="background-color:<?php the_field('image2_background_color');?>">
			<img src="<?php the_field('image2'); ?>" />
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
			<img src="<?php the_field('group_image_1'); ?>">
		</div>
		<div class="column small-12 medium-6 group-medium-image block">
		<?php if ( get_field('has_large_group_image') ) : ?>
			<img src="<?php the_field('large_group_image'); ?>" />
		<?php else: ?>
			<img src="<?php the_field('group_image_2'); ?>" />
			<img src="<?php the_field('group_image_3'); ?>" />
		<?php endif; ?>
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

	<div class="column small-12 line"></div>
</section>

<div class="row single content">
	<div class="columns">
		<?php get_template_part( 'projects' ); ?>
		<a href="#wrapper" class="button-up">Till toppen</a>
	</div>
</div>

<?php get_footer(); ?>