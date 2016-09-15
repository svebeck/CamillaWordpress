<?php get_header(); ?>
<section id="content" role="main">
  <div class="splash">
		<img src="<?php echo get_template_directory_uri(); ?>/images/splash.png" />
  </div>
  <div class="row align-center">
    <div class="column small-2">
    	<div class="arrow">
			<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" />
		</div>
    </div>
  </div>
  <section id="projects">
  	<h1>Senaste projekten</h1>
  	<div class="row">
  		<div class="column small-6 gray project-big">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
  		</div>
  		<div class="column small-6 project-big">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
			</div>
  		<div class="column small-6 project-big">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
			</div>
  		<div class="column small-6 blue project-big">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
			</div>
  		<div class="column small-6 project-big">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
			</div>
  		<div class="column small-6 project-big">
			<img src="<?php echo get_template_directory_uri(); ?>/images/lstk.png" />
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