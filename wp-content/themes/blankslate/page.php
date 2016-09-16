<?php get_header(); ?>
<section id="content" role="main">
  <div class="splash">
  </div>
  <div class="row align-center">
    <div class="column small-4 arrow">
		<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
    </div>
  </div>
  <section id="projects">
  	<h1 class="projects">Senaste projekten</h1>
  	<div class="row collapse">
  		<?php $post = get_field("featured1"); setup_postdata( $post ); ?>
  		<div class="column small-12 medium-6 project" style="background-color: <?php the_field('image_background_color') ?> ">
			<div class="title-right">
  			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a>
  			</div>
			
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('image'); ?>" />
			</a>
  		</div>
		<?php wp_reset_postdata(); ?>
		<?php $post = get_field("featured2"); setup_postdata( $post ); ?>
  		<div class="column small-12 medium-6 project">
  			<div class="margin-left project-bottom project-small" style="background-color: <?php the_field('image_background_color') ?> ">
  				<span class="title-right"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<img src="<?php the_field('image'); ?>" />
				</a>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php $post = get_field("featured3"); setup_postdata( $post ); ?>
  		<div class="column small-12 medium-6 project text-right" >
  			<div class="margin-right project-right project-small" style="background-color: <?php the_field('image_background_color') ?> ">
  				<span class="title-left"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<img src="<?php the_field('image'); ?>" />
				</a>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php $post = get_field("featured4"); setup_postdata( $post ); ?>
  		<div class="column small-12 medium-6 project" style="background-color: <?php the_field('image_background_color') ?> ">
			<span class="title-left-down"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
			
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('image'); ?>" />
			</a>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php $post = get_field("featured5"); setup_postdata( $post ); ?>
  		<div class="column small-12 medium-6 project text-right">
  			<div class="project-right project-small" style="background-color: <?php the_field('image_background_color') ?> ">
  				<span class="title-left"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<img src="<?php the_field('image'); ?>" />
				</a>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php $post = get_field("featured6"); setup_postdata( $post ); ?>
  		<div class="column small-12 medium-6 project">
  			<div class="margin-left project-left project-small" style="background-color: <?php the_field('image_background_color') ?> ">
  				<span class="title-right"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_field("category_short"); ?></a></span>
				
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<img src="<?php the_field('image'); ?>" />
			</a>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>
	</div>
  </section>
  <section class="row collapse align-center quote">
	<div class="column small-12">
	  	<p class="quote-icon">“</p>
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
	<div class="column small-12">
	  	<h2>Archicienem con corrum qui ipient</h2>
	  	<p><?php the_field("description"); ?></p>
	</div>
</section>
<!-- Old Entry Code
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
-->
</section>
<?php get_footer(); ?>